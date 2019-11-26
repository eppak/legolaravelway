<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Collection;

use Agronomist\Models\User;
use Agronomist\Models\Approbation;
use Agronomist\Services\UserService;
use Agronomist\Repositories\ApprobationRepository;

class UserAddApproveRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserApprobation()
    {

	Approbation::truncate();
        $service = app()->make(UserService::class);
        $repository = app()->make(ApprobationRepository::class);

        $user = User::find(10); //User::all()->random(1)->first();
        $approvers = User::all()->random(APPROVE_REQUESTS_COUNT);

        $service->requestApprobation($user, $approvers);
        $approbations = $repository->requestsOf($user);
	$approbationsCount = $approbations->count();
        $this->assertTrue($approbationsCount >= APPROVE_REQUESTS_COUNT, "Approbations count must greater/equal than " . APPROVE_REQUESTS_COUNT . ", {$approbationsCount} found");

        foreach ($approbations->get() as $approbation) {
            $service->approveUser($approbation);
        }

	$approbations = $repository->requestsOf($user);
        $approbationsCount = $approbations->where('approved', true)->count();
        $this->assertTrue( $approbationsCount >= APPROVE_REQUESTS_COUNT, "Approvations must be at least " . APPROVE_REQUESTS_COUNT . ", {$approbationsCount} found.");

        $user = User::find($user->id);
        $this->assertTrue($user->active == 1, "User must be active");
    }
}
