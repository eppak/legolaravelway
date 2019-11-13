<?php namespace Agronomist\Services;

use Agronomist\Services\Bus\AppenRequest;
use Agronomist\Services\Bus\AppenRequestHandler;

class UserService {
    private $bus;
    private $middleware = [
        \Agronomist\Services\Bus\Validators\AppenRequestValidator::class
    ];

    public function __construct()
    {
        $this->bus = app('Joselfonseca\LaravelTactician\CommandBusInterface');
        $this->bus->addHandler(AppenRequest::class, AppenRequestHandler::class);
    }

    public function appendRequest(array $data = [])
    {
        return $this->bus->dispatch(AppenRequest::class, $data, $this->middleware);
    }
}
