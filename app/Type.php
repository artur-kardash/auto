<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function mark()
    {
        return $this->belongsTo('App\Mark');
    }
}
