<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function dates() {
        return $this->hasMany('App\Date');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
