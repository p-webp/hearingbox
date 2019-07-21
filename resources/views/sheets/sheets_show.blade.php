@extends('layout')

@section('content')
        <a href="/companies/{{$sheets->company_id}}">シート一覧</a><br>
        <br>
        <h2>{{$company->name}}</h2><br>
        <div class="q_a h3">タイトル：{{$sheets->title}}</a></div>
        <div class="q_a h3">訪問日：{{$sheets->visit_date}}</a></div>
        <a class="btn btn-primary btn-sm" href="/sheets/{{$sheets->id}}/edit" role="button">タイトル・訪問日の編集</a>
        <div class="q_a h3">Q&A</div>
         @foreach($items as $item)
            <p>{{$item->question}}</p>
            <a class="btn btn-primary btn-sm" href="/sheets/{{$sheets->id}}/question/{{$item->id}}/answer/create" role="button">回答の追加</a>
            @foreach($item->sheetItems as $sheetItem)
                @if($sheetItem->sheet_id==$sheets->id)
                    <p>{{$sheetItem->answer}}</p>
                    <a class="btn btn-primary btn-sm" href="/answer/{{$sheetItem->id}}/edit" role="button">編集</a>
                @endif
            @endforeach
        @endforeach
        <br>
        <div class="inline h3">Memo</div>
        <a class="btn btn-primary btn-sm" href="/sheets/{{$sheets->id}}/memos/create" role="button">作成</a>
        @foreach($memos as $memo)
            <p>・{{$memo->content}}</p>
            <a class="btn btn-primary btn-sm inline" href="/memos/{{$memo->id}}/edit" role="button">編集</a>
            <form action="/memos/{{$memo->id}}/delete" method="POST">
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


