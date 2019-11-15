<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Approbation;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApprobationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any approbations.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the approbation.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Approbation  $approbation
     * @return mixed
     */
    public function view(User $user, Approbation $approbation)
    {
        //
    }

    /**
     * Determine whether the user can create approbations.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the approbation.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Approbation  $approbation
     * @return mixed
     */
    public function update(User $user, Approbation $approbation)
    {
        //
    }

    /**
     * Determine whether the user can delete the approbation.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Approbation  $approbation
     * @return mixed
     */
    public function delete(User $user, Approbation $approbation)
    {
        //
    }

    /**
     * Determine whether the user can restore the approbation.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Approbation  $approbation
     * @return mixed
     */
    public function restore(User $user, Approbation $approbation)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the approbation.
     *
     * @param  \Agronomist\Models\User  $user
     * @param  \App\Approbation  $approbation
     * @return mixed
     */
    public function forceDelete(User $user, Approbation $approbation)
    {
        //
    }
}
