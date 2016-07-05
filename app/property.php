<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    protected $fillable = ['name','category_id','location_id','price','description'];

    public function owner()
    {
        return $this->belongsTo('\App\owner');
    }
    public function location()
    {
        return location::find($this->location_id);
    }

    public function category()
    {
        return category::find($this->category_id);
    }

}
