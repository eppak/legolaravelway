<?php namespace Agronomist\Services;

use Agronomist\Services\Bus\AppendRequest;
use Agronomist\Services\Bus\AppendRequestHandler;

class UserService {
    private $bus;
    private $middleware = [
        \Agronomist\Services\Bus\Validators\AppendRequestValidator::class
    ];

    public function __construct()
    {
        $this->bus = app('Joselfonseca\LaravelTactician\CommandBusInterface');
        $this->bus->addHandler(AppendRequest::class, AppendRequestHandler::class);
    }

    public function appendRequest(array $data = [])
    {
        return $this->bus->dispatch(AppenRequest::class, $data, $this->middleware);
    }

    public function requestApprovation(array $data = []) {

    }
}
