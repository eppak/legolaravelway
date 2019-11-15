<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Vitamin;
use Illuminate\Auth\Access\HandlesAuthorization;

class VitaminPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any vitamins.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the vitamin.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Vitamin  $vitamin
     * @return mixed
     */
    public function view(User $user, Vitamin $vitamin)
    {
        //
    }

    /**
     * Determine whether the user can create vitamins.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the vitamin.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Vitamin  $vitamin
     * @return mixed
     */
    public function update(User $user, Vitamin $vitamin)
    {
        //
    }

    /**
     * Determine whether the user can delete the vitamin.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Vitamin  $vitamin
     * @return mixed
     */
    public function delete(User $user, Vitamin $vitamin)
    {
        //
    }

    /**
     * Determine whether the user can restore the vitamin.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Vitamin  $vitamin
     * @return mixed
     */
    public function restore(User $user, Vitamin $vitamin)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the vitamin.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Vitamin  $vitamin
     * @return mixed
     */
    public function forceDelete(User $user, Vitamin $vitamin)
    {
        //
    }
}
