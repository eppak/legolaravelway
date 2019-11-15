<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any requests.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the request.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Request  $request
     * @return mixed
     */
    public function view(User $user, Request $request)
    {
        //
    }

    /**
     * Determine whether the user can create requests.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the request.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Request  $request
     * @return mixed
     */
    public function update(User $user, Request $request)
    {
        //
    }

    /**
     * Determine whether the user can delete the request.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Request  $request
     * @return mixed
     */
    public function delete(User $user, Request $request)
    {
        //
    }

    /**
     * Determine whether the user can restore the request.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Request  $request
     * @return mixed
     */
    public function restore(User $user, Request $request)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the request.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Request  $request
     * @return mixed
     */
    public function forceDelete(User $user, Request $request)
    {
        //
    }
}
