<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    public function photobook() {
        return $this->belongsTo('App\Photobook');
    }
}
