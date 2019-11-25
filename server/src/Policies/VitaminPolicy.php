<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Vitamin;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class VitaminPolicy
 * @package Agronomist\Policies
 */
class VitaminPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('viewAny vitamin');
    }

    /**
     * @param User $user
     * @param Vitamin $vitamin
     * @return mixed
     */
    public function view(User $user, Vitamin $vitamin)
    {
        return $user->can('view vitamin');
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create vitamin');
    }

    /**
     * @param User $user
     * @param Vitamin $vitamin
     * @return mixed
     */
    public function update(User $user, Vitamin $vitamin)
    {
        return $user->can('update vitamin');
    }

    /**
     * @param User $user
     * @param Vitamin $vitamin
     * @return mixed
     */
    public function delete(User $user, Vitamin $vitamin)
    {
        return $user->can('delete vitamin');
    }

    /**
     * @param User $user
     * @param Vitamin $vitamin
     * @return mixed
     */
    public function restore(User $user, Vitamin $vitamin)
    {
        return $user->can('restore user');
    }

    /**
     * @param User $user
     * @param Vitamin $vitamin
     * @return mixed
     */
    public function forceDelete(User $user, Vitamin $vitamin)
    {
        return $user->can('forceDelete vitamin');
    }
}
