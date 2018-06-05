<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photobook extends Model
{
    public function pics() {
        return $this->hasMany('App\Pic');
    }
}
