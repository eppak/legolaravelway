<?php namespace Agronomist\Services\Bus\Handlers;

use Log;
use Agronomist\Repositories\ApprovationRepository;
use Agronomist\Notifications\RequestApprovationNotification;

class RequestApprovationHandler
{
    private $repository = null;
    public function __construct(ApprovationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $command
     */
    public function handle($command)
    {
        $from = $command->user;
        $users = $command->users;

        foreach ($users as $user) {
            Log::info("User {$from->email} requested approvation to ");
            $this->repository->requestApprovationTo($from, $user);
            $user->notify(new RequestApprovationNotification($from));
        }
    }
}
