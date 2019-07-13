@extends('layout')

@section('content')
        <form action="/memos/{{$memos->id}}/edit" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <p>メモの編集</p>
        <textarea class="form-control" name="content" rows="5">{{$memos->content}}</textarea>
    </div>
    <input type="submit" class="btn btn-primary" name="edit" value="保存">
    </form>
@endsection