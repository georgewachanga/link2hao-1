<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['phone', 'idno', 'hometown'];

    public function user()
    {
        return $this->morphMany('\App\User', 'user');
    }
}
