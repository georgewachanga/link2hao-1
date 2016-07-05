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
        'fname','lname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function usertype(){
        return $this->morphTo();
    }

    public function isOwner(){
        if($this->user_type == "App\\owner"){
            return true;
        }
        return false;
    }
    public function getUser(){
        if($this->isOwner()) {
            return Owner::find($this->user_id);
        }
        else if($this->isGuest())
        {
            return guest::find($this->user_id);
        }
        else {
            return null;
        }
    }

    public function isGuest(){
        if($this->user_type == 'App\\guest'){
            return true;
        }
        return false;
    }


}
