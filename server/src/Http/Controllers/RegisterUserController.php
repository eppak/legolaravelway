<?php

namespace Agronomist\Http\Controllers;

use Illuminate\Http\Request;
use Agronomist\Services\UserService;

class RegisterUserController extends Controller
{
	private $service = null;

	__construct(UserService $service)
	{
		$this->service = $service;
	}

	public function index() {
	}

	public function register()
	{

	}
}
