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
       return $user->can('viewAny approbations'); 
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
       return $user->can('view approbations'); 
    }

    /**
     * Determine whether the user can create approbations.
     *
     * @param  \Agronomist\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
       return $user->can('create approbations');
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
       return $user->can('create approbations');
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
       return $user->can('delete approbations');
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
       return $user->can('restore approbations');
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
       return $user->can('forceDelete approbations');
    }
}
