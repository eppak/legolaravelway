<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;
use Agronomist\Models\Seed;

/**
 * Class Category
 * @package Agronomist\Models
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillabel = [ 'name' ];

    /**
     * @return mixed
     */
    public function seeds() {
         return $this->HasMany(Seed::class);
    }
}
