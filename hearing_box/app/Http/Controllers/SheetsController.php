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

        echo $sheets;
        /*foreach($sheets as $sheet){
            $sheets_id = $sheet->id;
            $sheets_a   = Sheet::find($sheets_id);
            $memos[]  = $sheets_a->memos()->get();
        }
        return view('test.contents',['memos' => $memos]);*/
    }
};