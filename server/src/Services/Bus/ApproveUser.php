<?php


namespace Agronomist\Services\Bus;


/**
 * Class ApproveUser
 * @package Agronomist\Services\Bus
 */
class ApproveUser
{
    /**
     * @var
     */
    public $from;
    /**
     * @var
     */
    public $user;
    /**
     * RequestSeed constructor.
     * @param from
     * @param $user
     */
    function __construct($from, $user)
    {
        $this->from = $from;
        $this->user = $user;
    }
}
