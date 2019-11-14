<?php namespace Agronomist\Services\Bus;

class RequestSeed {
    public $user;
    public $seed;
    public $qty;

    function __construct($user, $seed, $qty)
    {
        $this->user = $user;
        $this->seed = $seed;	
        $this->qty = $qty;
    }
}
