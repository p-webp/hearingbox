<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable =['question'];

    public function sheets()
    {
        return $this->belongsToMany('App\Sheet','sheet_item');
    }

    public function sheetItems()
    {
        return $this->hasMany('App\SheetItem');
    }
}
