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
    public $approvation;

    /**
     * RequestSeed constructor.
     * @param from
     * @param $user
     */
    function __construct($approvation)
    {
        $this->approvation = $approvation;
    }
}
