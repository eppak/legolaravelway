<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;
use Agronomist\Models\Category;
use Agronomist\Models\Vitamin;
use Agronomist\Models\User;

class Seed extends Model
{
	protected $fillable = [ 'name' ];

        public function category() {
            return $this->belongsTo(Category::class);
        }

        public function vitamins()
        {
            return $this->belongsToMany(Vitamin::class);
        }

        public function users()
        {
            return $this->belongsToMany(User::class);
        }
}
