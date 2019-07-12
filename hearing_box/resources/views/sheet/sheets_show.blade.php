@extends('layout')

@section('content')
        <h2>{{$company->name}}</h2><br>
        <h3>Q&A</h3>
         @foreach($items as $item)
            <p>質問：{{$item->question}}</p>
            @foreach($item->sheetItems as $sheetItem)
                @if($sheetItem->sheet_id==$sheets->id)
            <p>回答：{{$sheetItem->answer}}</p>
                @endif
            @endforeach
        @endforeach
        <br>
        <h3>Memo</h3>
        @foreach($memos as $memo)
            <p>・{{$memo->content}}</p>
            <a class="btn btn-primary" href="/memo/{{$memo->id}}/edit" role="button">編集</a>
        @endforeach
        <form action="{{route('memo.add')}}" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <textarea class="form-control" name="content" rows="5"></textarea>
        <input type="hidden" name="sheet_id" value="{{$sheets->id}}">
    </div>
    <input type="submit" class="btn btn-primary" name="add" value="追加">
    </form>
@endsection


