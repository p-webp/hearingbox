<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;

class MemosController extends Controller
{
    public function create($id)
    {
        $memos = Memo::All();
        return view('memos.memos_create',["id"=>$id, "memos"=>$memos]);
    }

    public function store(Request $request)
    {
        $memo = new Memo;
        $memo->content = $request->content;
        $memo->sheet_id = $request->sheet_id;
        $memo->save();
        return redirect()->route('sheets.show',['id'=>$memo->sheet_id]);
    }

    public function edit($id)
    {
        $memos = Memo::findOrFail($id);
        return view('memos.memos_edit',["memos"=>$memos]);
    }

    public function update(Request $request,$id)
    {
        $memo = Memo::findOrFail($id);
        $memo->content = $request->content;
        $memo->save();
        return redirect()->route('sheets.show',['id'=>$memo->sheet_id]);
    }

    public function delete($id)
    {
        $memo = Memo::findOrFail($id);
        $memo->delete();
        return redirect()->route('sheets.show',['id'=>$memo->sheet_id]);
    }
}
