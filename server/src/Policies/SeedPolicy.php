<?php

namespace App\Policies;

use Agronomist\Models\User;
use App\Seed;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeedPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any seeds.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the seed.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Seed  $seed
     * @return mixed
     */
    public function view(User $user, Seed $seed)
    {
        //
    }

    /**
     * Determine whether the user can create seeds.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the seed.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Seed  $seed
     * @return mixed
     */
    public function update(User $user, Seed $seed)
    {
        //
    }

    /**
     * Determine whether the user can delete the seed.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Seed  $seed
     * @return mixed
     */
    public function delete(User $user, Seed $seed)
    {
        //
    }

    /**
     * Determine whether the user can restore the seed.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Seed  $seed
     * @return mixed
     */
    public function restore(User $user, Seed $seed)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the seed.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Seed  $seed
     * @return mixed
     */
    public function forceDelete(User $user, Seed $seed)
    {
        //
    }
}
