@extends('layout')

@section('content')
        <h1>会社名：{{$company->name}}</h1><br>
        <h2>Q&A</h2>

         @foreach($items as $item)
            <p>質問：{{$item->question}}</p>
            @foreach($item->sheetItems as $sheetItem)
                @if($sheetItem->sheet_id==$sheets->id)
            <p>回答：{{$sheetItem->answer}}</p>
                @endif
            @endforeach
        @endforeach
        <h2>Memo</h2>
        @foreach($memos as $memo)
            <p>・{{$memo->content}}</p>
        @endforeach
        <form action="{{route('memo.add')}}" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <textarea class="form-control" id="content" rows="5"></textarea>
        <input type="hidden" name="sheet_id" value="{{$sheets->id}}">
    </div>
    <button type="submit" class="btn btn-primary" name="add">追加</button>
    </form>
@endsection


