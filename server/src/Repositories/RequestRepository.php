<?php namespace Agronomist\Repositories;

use Agronomist\Models\Request;
use Prettus\Repository\Eloquent\BaseRepository;

class RequestRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return Request::class;
    }
}
