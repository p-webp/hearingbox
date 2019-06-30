<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;
use App\Sheet;


class SheetsController extends Controller
{
    public function contents($id)
    {
        $company = Company::find($id);
        $sheet_id_array = $company->sheets()->select('id')->get();
        foreach($sheet_id_array as $sheet_id)
        {
            $memos = Sheet::find($sheet_id);
        }
        dd($memos);
        return view('test.contents',['company' => $company,'memos' => $memos]);
    }
}