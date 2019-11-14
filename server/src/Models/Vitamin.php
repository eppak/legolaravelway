<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;
use Agronomist\Models\Seed;

class Vitamin extends Model
{
	protected $fillable = [ 'name' ];

        public function seeds()
        {
            return $this->belongsToMany(Seed::class);
        }
}
