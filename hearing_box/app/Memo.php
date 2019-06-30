<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    public function sheets()
    {
        return $this->belongsTo('App\Sheet');
    }
}
