<?php namespace Agronomist\Repositories;

use Agronomist\Models\Harvest;
use Prettus\Repository\Eloquent\BaseRepository;

class HarvestRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Harvest::class;
    }
}

