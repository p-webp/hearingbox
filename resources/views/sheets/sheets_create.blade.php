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
    <form action="/companies/{{$id}}/sheets/create" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <p>新規シート作成</p>
        <a>タイトル</a>
        <input type="text" class="form-control" name="title" valeu="{{$id}}">
        <a>訪問日</a>
        <input type="date" name="visit_date" value="{{$id}}">
    </div>
    <input type="submit" class="btn btn-primary" name="create" value="作成">
    </form>
@endsection