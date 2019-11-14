<?php namespace Agronomist\Services;

use Agronomist\Services\Bus\RequestSeed;
use Agronomist\Services\Bus\RequestSeedHandler;

class UserService {
    private $bus;
    private $middleware = [
        \Agronomist\Services\Bus\Validators\RequestSeedValidator::class
    ];

    public function __construct()
    {
        $this->bus = app('Joselfonseca\LaravelTactician\CommandBusInterface');
        $this->bus->addHandler(RequestSeed::class, RequestSeedHandler::class);
    }

    public function requestSeed($user, $seed, $qty)
    {
        return $this->bus->dispatch(RequestSeed::class, [ 'user' => $user, 'seed' => $seed, 'qty' => $qty ], $this->middleware);
    }

    public function requestApprovation(array $data = []) {
	
    }

    public function approveUser($user) {
    }
}
