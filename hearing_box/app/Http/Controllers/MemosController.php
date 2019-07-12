<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;

class MemosController extends Controller
{
    public function add(Request $request)
    {
        $memo = new Memo;
        $memo->content = $request->content;
        $memo->sheet_id = $request->sheet_id;
        $memo->save();
        return redirect()->route('sheets.id',['id'=>$memo->sheet_id]);
    }

    public function edit_index($id)
    {
        $memos = Memo::findOrFail($id);
        return view('memos.memos_edit_index',["memos"=>$memos]);
    }

    public function edit_finish(Request $request,$id)
    {
        $memo = Memo::findOrFail($id);
        $memo->content = $request->content;
        $memo->save();
        return redirect()->route('sheets.id',['id'=>$memo->sheet_id]);
    }
}
