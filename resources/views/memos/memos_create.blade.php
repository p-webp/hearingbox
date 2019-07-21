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