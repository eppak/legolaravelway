<?php namespace Agronomist\Repositories;

use Agronomist\Models\Seed;
use Prettus\Repository\Eloquent\BaseRepository;

class SeedRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Seed::class;
    }
}

