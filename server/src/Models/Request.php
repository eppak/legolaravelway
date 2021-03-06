<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;

use Agronomist\Models\User;
use Agronomist\Models\Seed;

/**
 * Class Request
 * @package Agronomist\Models
 */
class Request extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'token', 'user_id', 'seed_id', 'qty' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function giver()
    {
        return $this->belongsTo(User::class, 'giver_id');
    }

    public function seed()
    {
        return $this->belongsTo(Seed::class);
    }
}
