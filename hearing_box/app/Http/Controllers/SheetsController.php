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
        $company        = Company::find($id);
        $sheets         = $company->sheets()->get();

        //echo $sheets;
        foreach($sheets as $sheet){
            $sheets_id  = $sheet->id;
            echo $sheets_id;
            $sheets_i   = Sheet::find($sheets_id);
            $memos[]    = $sheets_i->memos()->get();
        }
        dd($memos);
        //return view('test.contents',['memos' => $memos]);
    }
};