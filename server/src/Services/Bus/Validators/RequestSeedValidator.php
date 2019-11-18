<?php namespace Agronomist\Services\Bus\Validators;

use Validator;
use League\Tactician\Middleware;
use Agronomist\Exceptions\RequestSeedValidationException;

/**
 * Class RequestSeedValidator
 * @package Agronomist\Services\Bus\Validators
 */
class RequestSeedValidator implements Middleware{
    /**
     * @var array
     */
    protected $rules = [
        'qty' => 'required|numeric|gt:0',
    ];

    /**
     * @param $command
     * @param callable $next
     * @return mixed
     */
    public function execute($command, callable $next)
    {
        $validator = Validator::make((array) $command, $this->rules);
        if ($validator->fails()) {
            throw new RequestSeedValidationException($command, $validator);
        }

        return $next($command);
    }
}
