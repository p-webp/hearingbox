<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SheetItem;
use App\Item;

class SheetItemController extends Controller
{
    public function edit($id){
        $sheetItem = SheetItem::FindOrFail($id);
        $items = Item::All();
        return view('answer.answer_edit',['sheetItem'=>$sheetItem,'items'=>$items]);
    }

    public function update(Request $request,$id){
        $validate=[
            'answer' => 'filled'
        ];
        $this->validate($request,$validate);
        $sheetItem = SheetItem::FindOrFail($id);
        $sheetItem->answer = $request->answer;
        $sheetItem->save();
        return redirect()->route('sheets.show',['id'=>$sheetItem->sheet_id]);
    }
}
