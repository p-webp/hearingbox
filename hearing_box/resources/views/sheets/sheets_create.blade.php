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
        <textarea class="form-control" name="title" rows="1"></textarea>
        <a>訪問日</a>
        <textarea class="form-control" name="visit_date" rows="1"></textarea>
        <a>形式：Y-m-d</a>
        <input type="hidden" name="company_id" value="{{$id}}">
    </div>
    <input type="submit" class="btn btn-primary" name="create" value="作成">
    </form>
@endsection