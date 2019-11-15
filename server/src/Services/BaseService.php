<?php namespace Agronomist\Services;


use Joselfonseca\LaravelTactician\CommandBusInterface;
use Agronomist\Services\Bus\AppendRequest;
use Agronomist\Services\Bus\AppendRequestHandler;

/**
 * Class BaseService
 * @package Agronomist\Services
 */
class BaseService
{
    /**
     * @var CommandBusInterface
     */
    protected $bus;

    /**
     * @param $command
     * @param array $data
     * @param array $middleware
     * @return mixed
     */
    protected function dispatch($command, array $data = [], $middleware = [])
    {
        return $this->bus()->dispatch($command, $data, $middleware);
    }

    /**
     * @param array $handlers
     */
    protected function addHandlers(array $handlers)
    {
        foreach ($handlers as $command => $handler) {
            $this->bus()->addHandler($command, $handler);
        }
    }

    /**
     * @return mixed
     */
    protected function bus()
    {
        if ($this->bus == null) {
            $this->bus = app('Joselfonseca\LaravelTactician\CommandBusInterface');
        }

        return $this->bus;
    }
}
