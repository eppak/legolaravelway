<?php

namespace Agronomist\Http\Controllers;

use Illuminate\Http\Request;
use Agronomist\Services\UserService;

/**
 * Class RegisterUserController
 * @package Agronomist\Http\Controllers
 */
class RegisterUserController extends Controller
{
    /**
     * @var UserService|null
     */
    private $service = null;

    /**
     * RegisterUserController constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     *
     */
    public function index()
    {
    }

    /**
     *
     */
    public function register()
    {

    }
}
