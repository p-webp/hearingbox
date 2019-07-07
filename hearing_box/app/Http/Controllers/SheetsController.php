<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sheet;


class SheetsController extends Controller
{
    public function show($id)
    {
        $sheets = Sheet::find($id);
        $memos = $sheets->memos()->get();
        $company = $sheets->company()->first();
        $items = $sheets->items()->get();
        //$answers = ???
        //$answersには$itemsに紐づくsheet_itemテーブルのanswerを入れたい


        return view('sheet.sheets_show',['memos' => $memos, 'company'=>$company, 'items'=>$items]);
    }
};