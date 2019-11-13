<?php namespace Agronomist\Repositories;

use Agronomist\Models\Vitamin;
use Prettus\Repository\Eloquent\BaseRepository;

class VitaminRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Vitamin::class;
    }
}
