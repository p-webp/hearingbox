@extends('layout')

@section('content')
    <form action="{{route('memo.post')}}" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="memo">memo</label>
        <textarea class="form-control" id="memo" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="add">追加</button>
    </form>
@endsection
