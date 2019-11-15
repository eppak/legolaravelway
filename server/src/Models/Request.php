<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Request
 * @package Agronomist\Models
 */
class Request extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'user_id', 'seed_id', 'qty' ];
}
