<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;
use Agronomist\Models\Category;
use Agronomist\Models\Vitamin;
use Agronomist\Models\User;

/**
 * Class Seed
 * @package Agronomist\Models
 */
class Seed extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return mixed
     */
    public function vitamins()
    {
        return $this->belongsToMany(Vitamin::class);
    }

    /**
     * @return mixed
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
