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
    <form action="/sheets/{{$sheets_id}}/quesiton/{{$items_id}}/answer/create/" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <p>回答の追加</p>
        <p>{{$items->question}}</p>
        <textarea class="form-control" name="answer" rows="3"></textarea>
        <input type="hidden" name="sheet_id" value="{{$sheets_id}}">
        <input type="hidden" name="item_id" value="{{$items_id}}">
    </div>
    <input type="submit" class="btn btn-primary" name="create" value="追加">
    </form>
@endsection