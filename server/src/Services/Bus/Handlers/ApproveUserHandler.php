<?php namespace Agronomist\Services\Bus\Handlers;

use Log;
use Agronomist\Notifications\ApproveRequest;
use Agronomist\Repositories\ApprovationRepository;
use Agronomist\Repositories\UserRepository;

/**
 * Class ApproveUserHandler
 * @package Agronomist\Services\Bus\Handlers
 */
class ApproveUserHandler
{

    /**
     * @var ApprobationRepository|null
     */
    private $approbationRepository = null;
    private $userRepository = null;

    /**
     * ApproveUserHandler constructor.
     * @param ApprobationRepository $repository
     */
    public function __construct(ApprovationRepository $approvationRepository, UserRepository $userRepository)
    {
        $this->approvationRepository = $approvationRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * @param $command
     */
    public function handle($command)
    {
        $approvation = $command->approvation;
        $user = $approvation->user()->first();
        $approber = $approvation->approver()->first();

        $approbations = $user->approvations();

        Log::info("User {$approber->email}  approving {$user->email}...");
        $this->approbationRepository->update([ 'approved' => true], $approbation->id);

        $approvationsCount = $approbations->where('approved', true)->count() + 1;
        if($approvationsCount >= APPROVE_REQUESTS_COUNT) {
            Log::info(" User {$user->email} activated ({$approvationsCount} approvations)");
            $this->userRepository->update([ 'active' => true], $user->id);
            $user->notify(new ApproveRequest($approber));
        }
    }
}
