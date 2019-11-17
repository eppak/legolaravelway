<?php namespace Agronomist\Services\Bus\Handlers;

use Agronomist\Repositories\UserRepository;
use Agronomist\Notifications\SeedRequest;

/**
 * Class RequestSeedHandler
 * @package Agronomist\Services\Bus\Handlers
 */
class RequestSeedHandler
{
    /**
     * @var UserRepository|null
     */
    private $repository = null;

    /**
     * RequestSeedHandler constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $command
     */
    public function handle($command)
    {
        $from_user = $command->user;
        $seed = $command->seed;
        $qty = $command->qty;
        $users = $this->repository->withSeed($seed);

        foreach ($users as $user) {
            if (!$user->is($from_user->id)) {
                Log::info("{$from_user->email} Requesting {$qty} of {$seed->name} to {$user->email}");
                $user->notify(new SeedRequest($from_user, $seed, $qty));
            }
        }
    }
}

