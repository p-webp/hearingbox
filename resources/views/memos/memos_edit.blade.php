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
    <form action="/memos/{{$memos->id}}/edit" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
        <p>メモの編集</p>
        <textarea class="form-control" name="content" value="{{old('content')}}" rows="5">{{$memos->content}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="edit" value="保存">
    </form>
@endsection