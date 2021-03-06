<?php namespace Agronomist\Models;

use Illuminate\Database\Eloquent\Model;
use Agronomist\Models\User;

/**
 * Class Approbation
 * @package Agronomisti\Models
 */
class Approbation extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'token', 'user_id', 'approver_id', 'approved'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id');
    }
}
