<?php namespace Agronomist\Services\Bus\Handlers;

use Agronomist\Notifications\ApproveRequest;
use Agronomist\Repositories\ApprobationRepository;

/**
 * Class ApproveUserHandler
 * @package Agronomist\Services\Bus\Handlers
 */
class ApproveUserHandler
{

    /**
     * @var ApprobationRepository|null
     */
    private $repository = null;


    /**
     * ApproveUserHandler constructor.
     * @param ApprobationRepository $repository
     */
    public function __construct(ApprobationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $command
     */
    public function handle($command)
    {
        $from = $command->from;
        $user = $command->user;

        $approbations = $user->approbations();
        $request = $approbations->where('approiver_id', $from->id)->first();
        $request->update( [ 'approved' => true ] );

        if($approbations->where('approved', true)->count() >= APPROVE_REQUESTS_COUNT) {
            $user->update([ 'active' => true ]);
            $user->notify(new ApproveRequest($from));
        }
    }
}
