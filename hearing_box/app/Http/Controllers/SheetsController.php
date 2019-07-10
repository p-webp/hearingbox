<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sheet;
use App\Memo;




class SheetsController extends Controller
{
    public function show($id)
    {
        $sheets = Sheet::find($id);
        $memos = $sheets->memos()->get();
        $company = $sheets->company()->first();
        $items = $sheets->items()->get();
        return view('sheet.sheets_show',['memos' => $memos, 'company'=>$company, 'items'=>$items, 'sheets'=>$sheets]);
    }

    /*public function add(Request $request)
    {
        $memo = new Memo;
        $memo->content ="a";
        $memo->sheet_id = $request->sheet_id;
        $memo->save();
        return redirect("/sheets/{id}");
    }*/
};