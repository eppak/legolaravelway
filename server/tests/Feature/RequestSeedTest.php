<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Agronomist\Models\User;
use Agronomist\Models\Seed;
use Agronomist\Services\UserService;

class RequestSeedTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSeedRequest()
    {
	$service = app()->make(UserService::class);
	$user = User::all()->random(1)->first();	
	$seed = $user->seeds()->get()->random(1)->first();
	$qty = 10;

	$service->requestSeed($user, $seed, $qty);
	$count = $user->requests()->where('seed_id', $seed->id)->count();

        $this->assertTrue($count > 0, 'Seed request must be greater then zero.');
    }
}
