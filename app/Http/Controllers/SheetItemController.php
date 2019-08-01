<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SheetItem;
use App\Item;

class SheetItemController extends Controller
{
    public function create($sheets_id,$items_id){
        $items = Item::findorFail($items_id);
        return view('answer.answer_create',['items'=>$items, 'sheets_id'=>$sheets_id, 'items_id'=>$items_id]);
        ;
    }

    public function store(Request $request){
        $validate=[
            'answer' => 'filled'
        ];
        $this->validate($request,$validate);
        $sheetItems = SheetItem::create([
            'answer'=>$request->answer,
            'sheet_id'=>$request->sheet_id,
            'item_id'=>$request->item_id
            ]);
        return redirect()->route('sheets.show',['id'=>$request->sheet_id]);
    }

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
