<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'first_name', 'last_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get all of the groups for the user.
     */
    public function tasks()
    {
        return $this->hasMany(Group::class);
    }
    
    public function get_full_name(){
        return $this->first_name . ' ' . $this->last_name;
    }
}
