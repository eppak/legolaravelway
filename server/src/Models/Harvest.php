<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;

use Agronomist\Models\User;
use Agronomist\Models\Seed;

class Harvest extends Model
{
    protected $fillable = [ 'seed_id', 'user_id', 'year', 'qry', 'qty_seed' ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function seed() {
        return $this->belongsTo(Seed::class);
    }
}
