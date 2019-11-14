<?php namespace Agronomist\Services;

use Agronomist\Services\Bus\AppendRequest;
use Agronomist\Services\Bus\AppendRequestHandler;

class BaseService {
    protected $bus;
    protected $handlers = [ ];
    protected $middleware = [ ];

    protected function dispatch($command, array $data = [])
    {
        return $this->bus->dispatch(AppenRequest::class, $data, $this->middleware);
    }

    protected function getBus() {
	if ($this->bus == null) {
		$this->bus = app('Joselfonseca\LaravelTactician\CommandBusInterface');
		$this->bus->addHandler($this->handlers);
	}

	return $this->bus;
    }
}
