@extends('layout')

@section('content')
        <h2>{{$company->name}}</h2><br>
        <div class="q_a h3"><a href="/companies/{{$sheets->company_id}}">{{$sheets->title}}</a></div>
        <div class="q_a h3">Q&A</div>
         @foreach($items as $item)
            <p>{{$item->question}}</p>
            @foreach($item->sheetItems as $sheetItem)
                @if($sheetItem->sheet_id==$sheets->id)
            <p>{{$sheetItem->answer}}</p>
            <a class="btn btn-primary btn-sm" href="/answer/{{$sheetItem->id}}/edit" role="button">編集</a>
                @endif
            @endforeach
        @endforeach
        <br>
        <div class="memo h3">Memo</div>
        <a class="btn btn-primary btn-sm" href="/sheets/{{$sheets->id}}/memos/create" role="button">作成</a>
        @foreach($memos as $memo)
            <p>・{{$memo->content}}</p>
            <a class="btn btn-primary btn-sm" href="/memos/{{$memo->id}}/edit" role="button">編集</a>
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


