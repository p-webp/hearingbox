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
    <form action={{route('companies.update',['id'=>$company->id])}} method="POST">
        {{ csrf_field() }}
        <div class="form-group">
        <p>会社名の編集</p>
        <textarea class="form-control" name="name" value="{{old('name')}}" rows="1">{{$company->name}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="edit" value="保存">
    </form>
@endsection