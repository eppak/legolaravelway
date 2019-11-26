<?php

namespace Agronomist\Policies;

use Agronomist\Models\User;
use Agronomist\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class CategoryPolicy
 * @package Agronomist\Policies
 */
class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('viewAny category');
    }


    /**
     * @param User $user
     * @param Category $category
     * @return mixed
     */
    public function view(User $user, Category $category)
    {
        return $user->can('view category');
    }


    /**
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create category');
    }

    /**
     * @param User $user
     * @param Category $category
     * @return mixed
     */
    public function update(User $user, Category $category)
    {
        return $user->can('update category');
    }


    /**
     * @param User $user
     * @param Category $category
     * @return mixed
     */
    public function delete(User $user, Category $category)
    {
        return $user->can('delete category');
    }

    /**
     * @param User $user
     * @param Category $category
     * @return mixed
     */
    public function restore(User $user, Category $category)
    {
        return $user->can('restore category');
    }

    /**
     * @param User $user
     * @param Category $category
     * @return mixed
     */
    public function forceDelete(User $user, Category $category)
    {
        return $user->can('forceDelete category');
    }
}
