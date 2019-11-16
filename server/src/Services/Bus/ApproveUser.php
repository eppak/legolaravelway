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
    public $approbation;

    /**
     * RequestSeed constructor.
     * @param from
     * @param $user
     */
    function __construct($approbation)
    {
        $this->approbation = $approbation;
    }
}
