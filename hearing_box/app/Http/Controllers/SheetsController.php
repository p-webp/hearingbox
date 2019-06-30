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
        echo $sheet_id_array;
    }
}