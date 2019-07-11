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
}
