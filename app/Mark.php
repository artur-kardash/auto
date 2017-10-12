<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    public function types()
    {
        return $this->hasMany('App\Type');
    }

    public function auto()
    {
        return $this->belongsTo('App\Auto');
    }


}
