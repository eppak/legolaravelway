<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class RequestPolicy
 * @package Agronomist\Policies
 */
class RequestPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('viewAny request');
    }

    /**
     * @param User $user
     * @param Request $request
     * @return mixed
     */
    public function view(User $user, Request $request)
    {
        return $user->can('view request');
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create request');
    }

    /**
     * @param User $user
     * @param Request $request
     * @return mixed
     */
    public function update(User $user, Request $request)
    {
        return $user->can('update request');
    }

    /**
     * @param User $user
     * @param Request $request
     * @return mixed
     */
    public function delete(User $user, Request $request)
    {
        return $user->can('delete request');
    }

    /**
     * @param User $user
     * @param Request $request
     * @return mixed
     */
    public function restore(User $user, Request $request)
    {
        return $user->can('restore request');
    }

    /**
     * @param User $user
     * @param Request $request
     * @return mixed
     */
    public function forceDelete(User $user, Request $request)
    {
        return $user->can('forceDelete request');
    }
}
