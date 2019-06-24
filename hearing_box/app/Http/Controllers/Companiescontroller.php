<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from companies');
        return view('test.companies',['items' => $items]);

    }
};
