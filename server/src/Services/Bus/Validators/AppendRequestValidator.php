<?php namespace Agronomist\Services\Bus\Validators;

use Validator;
use League\Tactician\Middleware;
use Agronomist\Exceptions\RequestValidationException;

class AppendRequestValidator implements Middleware{
    protected $rules = [
        'user_id' => 'required',
        'seedid' => 'required',
        'qty' => 'required|numeric|gt:0',
    ];

    public function execute($command, callable $next)
    {
        $validator = Validator::make((array) $command, $this->rules);
        if ($validator->fails()) {
            throw new RequestValidationException($command, $validator);
        }

        return $next($command);
    }
}
