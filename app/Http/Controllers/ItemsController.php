<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Item::All();
        return view('items.question_index',['items'=>$items]);
    }

    public function create()
    {
        $items = Item::All();
        return view('items.question_create',['imtes'=>$items]);
    }

    public function store(Request $request)
    {
        $items = Item::create(['question' => $request->question]);
        return redirect()->route('question.index');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.question_edit',["item"=>$item]);
    }

    public function update(Request $request,$id)
    {
        $validate=[
            'question' => 'filled',
        ];
        $this->validate($request,$validate);
        $items = Item::findOrFail($id)->updateOrInsert(
            ['question' => $request->question]
        );
        return redirect()->route('question.index');
    }

    public function delete($id)
    {
        $memo = Item::findOrFail($id);
        $memo->delete();
        return redirect()->route('question.index',['id'=>$id]);
    }

}