<?php

namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [ 'user_id', 'seed_id', 'qty' ];
}
