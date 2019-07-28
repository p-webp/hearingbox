<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sheet;
use App\Item;
class SheetsController extends Controller
{
    public function show($id)
    {
        $sheets = Sheet::find($id);
        $memos = $sheets->memos()->get();
        $memos =collect($memos);
        $memos =$memos->sortByDesc('created_at');
        $company = $sheets->company()->first();
        $items = Item::All();
        return view('sheets.sheets_show',['sheets'=>$sheets, 'memos' => $memos, 'company'=>$company, 'items'=>$items]);
    }

    public function create($id)
    {
        $sheets = Sheet::All();
        return view('sheets.sheets_create',['sheets'=>$sheets, 'id'=>$id]);
    }

    public function store(Request $request,$id)
    {
        $validate=[
            'title' => 'filled',
            'visit_date' => 'date_format:"Y-m-d"'
        ];
        $this->validate($request,$validate);
        $sheets = new Sheet;
        $sheets->title = $request->title;
        $sheets->visit_date = $request->visit_date;
        $sheets->company_id = $id;
        $sheets->save();
        return redirect()->route('companies.show',['id'=>$id]);
    }

    public function edit($id)
    {
        $sheets = Sheet::findOrFail($id);
        return view('sheets.sheets_edit',["sheets"=>$sheets]);
    }

    public function update(Request $request,$id)
    {
        $validate=[
            'title' => 'filled',
            'visit_date' => 'date_format:"Y-m-d"'
        ];
        $this->validate($request,$validate);
        $sheet = Sheet::findOrFail($id);
        $sheet->title = $request->title;
        $sheet->visit_date = $request->visit_date;
        $sheet->save();
        return redirect()->route('sheets.show',['id'=>$sheet->id]);
    }
};