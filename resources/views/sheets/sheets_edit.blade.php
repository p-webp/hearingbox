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
    <form action="/sheets/{{$sheets->id}}/edit" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <p>タイトル・訪問日の編集</p>
            <textarea class="form-control" name="title" value="{{old('title')}}" rows="1">{{$sheets->title}}</textarea>
            <input type="date" name="visit_date" value="{{old('visit_date')}}">
        </div>
        <input type="submit" class="btn btn-primary" name="edit" value="保存">
    </form>
@endsection