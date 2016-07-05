<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable = ['locationName'];

    public function properties(){
        return property::where('location_id','=', $this->location_id);
    }

}
