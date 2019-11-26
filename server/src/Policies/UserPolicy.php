<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('viewAny user');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        return $user->can('view user');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create user');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        return $user->can('update user');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        return $user->can('delete user');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function restore(User $user, User $model)
    {
        return $user->can('restore user');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, User $model)
    {
        return $user->can('forceDelete user');
    }
}
