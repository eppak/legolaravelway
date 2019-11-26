<?php namespace Agronomist\Services\Bus\Handlers;

use Log;
use Agronomist\Notifications\ApproveRequest;
use Agronomist\Repositories\ApprobationRepository;
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
    public function __construct(ApprobationRepository $approbationRepository, UserRepository $userRepository)
    {
        $this->approbationRepository = $approbationRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * @param $command
     */
    public function handle($command)
    {
        $approbation = $command->approbation;
        $user = $approbation->user()->first();
        $approber = $approbation->approver()->first();

        $approbations = $user->approbations();

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
