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
    <form action="/question/{{$item->id}}/edit" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
        <p>質問の編集</p>
        <textarea class="form-control" name="question" value="{{old('question')}}" rows="1">{{$item->question}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="edit" value="保存">
    </form>
@endsection