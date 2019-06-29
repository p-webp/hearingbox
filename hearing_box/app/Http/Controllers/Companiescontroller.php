<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;


class CompaniesController extends Controller
{
    public function index(Request $request)
    {
        $companies = Company::All();
        return view('test.companies',['companies' => $companies]);
    }
};
