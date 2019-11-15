<?php namespace Agronomist\Services\Bus;

/**
 * Class RequestSeed
 * @package Agronomist\Services\Bus
 */
class RequestSeed {
    /**
     * @var
     */
    public $user;
    /**
     * @var
     */
    public $seed;
    /**
     * @var
     */
    public $qty;

    /**
     * RequestSeed constructor.
     * @param $user
     * @param $seed
     * @param $qty
     */
    function __construct($user, $seed, $qty)
    {
        $this->user = $user;
        $this->seed = $seed;
        $this->qty = $qty;
    }
}
