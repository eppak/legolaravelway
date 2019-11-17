<?php namespace Agronomist\Services\Bus\Handlers;

use Log;
use Agronomist\Repositories\ApprobationRepository;
use Agronomist\Notifications\RequestApprobationNotification;

class RequestApprobationHandler
{
    private $repository = null;
    public function __construct(ApprobationRepository $repository)
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
            Log::info("User {$from->email} requested approbation to {$user->email} ");
            $this->repository->requestApprobationTo($from, $user);
            $user->notify(new RequestApprobationNotification($from));
        }
    }
}
