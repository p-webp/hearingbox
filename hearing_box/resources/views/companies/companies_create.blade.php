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
    <form action="{{route('companies.store')}}" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <p>会社の追加</p>
        <textarea class="form-control" name="name" rows="1"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" name="create" value="追加">
    </form>
@endsection