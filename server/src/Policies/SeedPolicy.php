<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Seed;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class SeedPolicy
 * @package Agronomist\Policies
 */
class SeedPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('viewAny seed');
    }

    /**
     * @param User $user
     * @param Seed $seed
     * @return mixed
     */
    public function view(User $user, Seed $seed)
    {
        return $user->can('view seed');
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create seed');
    }

    /**
     * @param User $user
     * @param Seed $seed
     * @return mixed
     */
    public function update(User $user, Seed $seed)
    {
        return $user->can('update seed');
    }

    /**
     * @param User $user
     * @param Seed $seed
     * @return mixed
     */
    public function delete(User $user, Seed $seed)
    {
        return $user->can('delete seed');
    }

    /**
     * @param User $user
     * @param Seed $seed
     * @return mixed
     */
    public function restore(User $user, Seed $seed)
    {
        return $user->can('restore seed');
    }

    /**
     * @param User $user
     * @param Seed $seed
     * @return mixed
     */
    public function forceDelete(User $user, Seed $seed)
    {
        return $user->can('forceDelete seed');
    }
}
