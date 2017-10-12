<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
 	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function autos()
    {
        return $this->hasMany('App\Auto');
    }

}
