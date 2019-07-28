<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;


class CompaniesController extends Controller
{
    public function link()
    {
        return view('about');
    }

    public function index()
    {
        $companies = Company::All();
        return view('companies.companies_index',['companies' => $companies]);
    }

    public function show($id)
    {
        $companies = Company::All();
        $company = Company::findOrFail($id);
        $sheets = $company->sheets()->get();
        return view('companies.companies_show',['companies'=>$companies, 'company'=>$company, 'sheets'=>$sheets, 'id'=>$id]);
    }

    public function create()
    {
        $companies = Company::All();
        return view('companies.companies_create',['companies'=>$companies]);
    }

    public function store(Request $request)
    {
        $validate=[
            'name' => 'filled',
        ];
        $this->validate($request,$validate);
        $company = Company::create(['name' => $request->name]);
        return redirect()->route('companies.index');
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.name_edit',['company'=>$company]);
    }

    public function update(Request $request,$id)
    {
        $validate=[
            'name' => 'filled',
        ];
        $this->validate($request,$validate);
        $company = Company::findOrFail($id)->update(
            ['name' => $request->name]
        );
        return redirect()->route('companies.show',['id'=>$id]);
    }

    public function delete($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->route('companies.index',['id'=>$id]);
    }

    public function setting()
    {
        return view('companies.setting');
    }
};
