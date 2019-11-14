<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;
use Agronomist\Models\Seed;

class Category extends Model
{
    protected $fillabel = [ 'name' ];

    public function seeds() {
         return $this->hasMany();
    }
}
