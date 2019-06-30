<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;


class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::All();
        return view('test.companies',['companies' => $companies]);
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        $sheets = $company->sheets()->get();
        return view('test.show',['company' => $company, 'sheets' => $sheets]);
    }
};
