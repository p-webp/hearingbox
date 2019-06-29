<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public function sheets()
    {
        return $this->hasMany('App\Sheet');
    }
}
