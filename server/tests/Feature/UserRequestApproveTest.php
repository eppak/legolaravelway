<?php

namespace Tests\Feature;

use Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Agronomist\Models\User;
use Agronomist\Services\UserService; 
use Agronomist\Repositories\ApprobationRepository;

class UserRequestApprove extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAddRequestCase()
    {
	$user = User::all()->random(1)->first();
	$users = User::all()->random(APPROVE_REQUESTS_COUNT);
	
	$service = app()->make(UserService::class);
	$service->requestApprobation( $user, $users);

	$repository = app()->make(ApprobationRepository::class);
	$approbations = $repository->requestsOf($user);

	$this->assertTrue($approbations->count() >= APPROVE_REQUESTS_COUNT);
    }

    public function testAddRequestApprobationCase()
    {
	$service = app()->make(UserService::class);
	$repository = app()->make(ApprobationRepository::class);
	$approbations = $repository->requestsOf($user);

	foreach($approbations as $approbation) {
		dd($approbation->user());
		$service->approveUser($approbation->user(), $approbation->giver());			
	}
    }
}
