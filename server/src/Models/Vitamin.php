<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;
use Agronomist\Models\Seed;

/**
 * Class Vitamin
 * @package Agronomist\Models
 */
class Vitamin extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'name' ];

    /**
     * @return mixed
     */
    public function seeds()
        {
            return $this->belongsToMany(Seed::class);
        }
}
