<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    protected $fillable = ['phone', 'idno', 'location'];

    public function user()
    {
        return $this->morphMany('\App\User', 'user');
    }

    public function properties()
    {
        return $this->hasMany('\App\property');
    }

}
