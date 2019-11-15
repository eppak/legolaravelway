<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Harvest;
use Illuminate\Auth\Access\HandlesAuthorization;

class HarvestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any harvests.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the harvest.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function view(User $user, Harvest $harvest)
    {
        //
    }

    /**
     * Determine whether the user can create harvests.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the harvest.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function update(User $user, Harvest $harvest)
    {
        //
    }

    /**
     * Determine whether the user can delete the harvest.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function delete(User $user, Harvest $harvest)
    {
        //
    }

    /**
     * Determine whether the user can restore the harvest.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function restore(User $user, Harvest $harvest)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the harvest.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Harvest  $harvest
     * @return mixed
     */
    public function forceDelete(User $user, Harvest $harvest)
    {
        //
    }
}
