<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Collection;

use Agronomist\Models\User;
use Agronomist\Services\UserService;
use Agronomist\Repositories\ApprobationRepository;

class UserAddRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserApprobation()
    {
        $service = app()->make(UserService::class);
        $repository = app()->make(ApprobationRepository::class);

        $user = User::all()->random(1)->first();
        $approver = User::all()->random(1)->first();

        $service->requestApprobation($user, collect([$approver]));
        $approbations = $repository->requestsOf($user);

        $this->assertTrue($approbations->count() > 0, 'Approbations count must greater than 0');
        $this->assertTrue($approbations->where('approver_id', $approver->id)->count() > 0, 'Approbator must be present');

        foreach ($approbations->get() as $approbation) {
            $service->approveUser($approbation);
        }

        $approbationsCount = $approbations->where('approved', true)->count();
        $this->assertTrue( $approbationsCount >= APPROVE_REQUESTS_COUNT, "Approvations must be at least " . APPROVE_REQUESTS_COUNT . ", {$approbationsCount} found.");

        $user = User::find($user->id);
        $this->assertTrue($user->active == 1, "User must be active");
    }
}
