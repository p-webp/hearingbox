@extends('layout')

@section('content')
        <form action="/memo/{{$memos->id}}/edit" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <p>メモ</p>
        <textarea class="form-control" name="content" rows="5">{{$memos->content}}</textarea>
        <input type="hidden" name="sheet_id" value="{{$memos->sheet_id}}">
    </div>
    <input type="submit" class="btn btn-primary" name="edit" value="編集">
    </form>
@endsection