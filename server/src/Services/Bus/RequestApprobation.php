<?php namespace Agronomist\Services\Bus;


/**
 * Class RequestApprobation
 * @package Agronomist\Services\Bus
 */
class RequestApprobation
{
    /**
     * @var null
     */
    public $user = null;
    /**
     * @var null
     */
    public $users = null;

    /**
     * RequestApprobation constructor.
     * @param $user
     * @param $users
     */
    function __construct($user, $users)
    {
        $this->user = $user;
        $this->users = $users;
    }
}
