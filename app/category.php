<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['categoryName'];
    public function properties()
    {
        return $this->hasMany('\App\property');
    }
}
