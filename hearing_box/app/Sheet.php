<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function memos()
    {
        return $this->hasMany('App\Memo');
    }
}
