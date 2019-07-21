@extends('layout')

@section('content')
    @if(count($errors)>0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/answer/{{$sheetItem->id}}/edit" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
        <p>回答の編集</p>
        @foreach($items as $item)
            @if($item->id == $sheetItem->item_id)
                <p>{{$item->question}}</p>
            @endif
        @endforeach
        <textarea class="form-control" name="answer" value="{{old('answer')}}" rows="5">{{$sheetItem->answer}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="edit" value="保存">
    </form>
@endsection