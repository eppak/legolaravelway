<?php namespace Agronomist\Repositories;

use Agronomist\Models\User;
use Agronomist\Models\Seed;
use Agronomist\Models\Approbation;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class UserRepository
 * @package Agronomist\Repositories
 */
class UserRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return User::class;
    }

    /**
     * @param Seed $seed
     * @return mixed
     */
    function withSeed(Seed $seed) {
        return User::whereHas('seeds', function($query) use($seed) { $query->where('seed_id', $seed->id); });
    }
}

