<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SheetItem extends Model
{
    protected $fillable =[
        'sheet_id',
        'item_id',
        'answer'
    ];

    protected $table = 'sheet_item';

    public function items()
    {
        return $this->belongsTo('App\Item');
    }
}
