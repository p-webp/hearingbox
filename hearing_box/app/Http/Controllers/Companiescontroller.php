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
        return view('companies.companies_index',['companies' => $companies]);
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        $sheets = $company->sheets()->get();
        return view('companies.companies_show',['company' => $company, 'sheets' => $sheets, 'id'=>$id]);
    }

    public function setting()
    {
        return view('companies.setting');
    }
};
