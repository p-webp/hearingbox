@extends('layout')

@section('content')
        <form action="/sheets/{{$id}}/memos/create" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <p>メモの追加</p>
        <textarea class="form-control" name="content" rows="5"></textarea>
        <input type="hidden" name="sheet_id" value="{{$id}}">
    </div>
    <input type="submit" class="btn btn-primary" name="create" value="追加">
    </form>
@endsection