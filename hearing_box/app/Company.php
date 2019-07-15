<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable =['name'];

    public function sheets()
    {
        return $this->hasMany('App\Sheet');
    }
}
