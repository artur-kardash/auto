<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    public function agent()
    {
        return $this->belongsTo('App\Agent');
    }

    public function marks()
    {
        return $this->hasMany('App\Mark');
    }


}
