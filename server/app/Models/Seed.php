<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;

use Agronomist\Models\Seed as Model;

class Seed extends Model
{
    use CrudTrait;

    public function requestSeed($crud = false) {
	$url = url($crud->route.'/request-seed', [ 'id' => $this->id ]);
        return '<a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" onclick="var qty = prompt(\'Quantità\', 1); window.location.href=\'' . $url . '/\' + qty;" title="Richiedi questo seme"><i class="fa fa-search"></i> Richiedi</a>';
    }

}
