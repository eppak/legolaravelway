<?php namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Approbation
 * @package Agronomisti\Models
 */
class Approbation extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'user_id', 'approver_id' ];
}
