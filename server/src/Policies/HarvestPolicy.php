<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Harvest;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class HarvestPolicy
 * @package Agronomist\Policies
 */
class HarvestPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('viewAny harvests');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function view(User $user, Harvest $harvest)
    {
        return $user->can('view harvests');
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create harvests');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function update(User $user, Harvest $harvest)
    {
        return $user->can('update harvests');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function delete(User $user, Harvest $harvest)
    {
        return $user->can('delete harvests');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function restore(User $user, Harvest $harvest)
    {
        return $user->can('restore harvests');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function forceDelete(User $user, Harvest $harvest)
    {
        return $user->can('forceDelete harvests');
    }
}
