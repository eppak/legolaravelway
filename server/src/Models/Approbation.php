<?php

namespace Agronomisti\Models;

use Illuminate\Database\Eloquent\Model;

class Approbation extends Model
{
    protected $fillable = [ 'user_id', 'approver_id' ]
}
