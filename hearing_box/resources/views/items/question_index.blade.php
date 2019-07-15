@extends('layout')

@section('content')
    <h2>設定</h2><br>
    <h3>質問一覧</h3>
    <a class="btn btn-primary btn-sm" href="/setting/question/create" role="button">追加</a>
        @foreach($items as $item)
            <p>{{$item->question}}</p>
            <a class="btn btn-primary btn-sm" href="/question/{{$item->id}}/edit" role="button">編集</a>
            <form action="/question/{{$item->id}}/delete" method="POST">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-danger btn-sm btn-dell" name="delete" value="削除">
            </form>
        @endforeach
        @section('script')
        <script>
        $(function(){
            $(".btn-dell").click(function(){
                    if(confirm("本当に削除しますか？")){
                    }else{
                    return false;
                    }
            });
        });
        </script>
        @endsection
@endsection