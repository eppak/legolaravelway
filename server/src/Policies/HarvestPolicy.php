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
        return $user->can('viewAny harvest');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function view(User $user, Harvest $harvest)
    {
        return $user->can('view harvest');
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create harvest');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function update(User $user, Harvest $harvest)
    {
        return $user->can('update harvest');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function delete(User $user, Harvest $harvest)
    {
        return $user->can('delete harvest');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function restore(User $user, Harvest $harvest)
    {
        return $user->can('restore harvest');
    }

    /**
     * @param User $user
     * @param Harvest $harvest
     * @return mixed
     */
    public function forceDelete(User $user, Harvest $harvest)
    {
        return $user->can('forceDelete harvest');
    }
}
