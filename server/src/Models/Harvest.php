<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;

use Agronomist\Models\User;
use Agronomist\Models\Seed;

/**
 * Class Harvest
 * @package Agronomist\Models
 */
class Harvest extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'seed_id', 'user_id', 'year', 'qry', 'qty_seed' ];

    /**
     * @return mixed
     */
    public function users() {
        return $this->belongsTo(User::class);
    }

    /**
     * @return mixed
     */
    public function seed() {
        return $this->belongsTo(Seed::class);
    }
}
