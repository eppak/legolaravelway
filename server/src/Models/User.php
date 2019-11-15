<?php

namespace Agronomist\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use Agronomist\Models\Seed;
use Agronomist\Models\Request;
use Agronomist\Models\Approbation;

/**
 * Class User
 * @package Agronomist\Models
 */
class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * @return mixed
     */
    public function seeds()
    {
        return $this->belongsToMany(Seed::class);
    }

    /**
     * @return mixed
     */
    public function requests()
    {
        return $this->belongsToMany(Request::class);
    }


    /**
     * @return mixed
     */
    public function approbations()
    {
        return $this->belongsToMany(Approbation::class);
    }
}
