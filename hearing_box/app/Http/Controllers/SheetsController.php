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
        $memos =collect($memos);
        $memos =$memos->sortByDesc('created_at');
        $company = $sheets->company()->first();
        $items = $sheets->items()->get();
        return view('sheets.sheets_show',['sheets'=>$sheets, 'memos' => $memos, 'company'=>$company, 'items'=>$items]);
    }

};