<html>
<head>
    <title>Sheet Details</title>
</head>
    <style>
        body {font-size:16pt; color:#000000;}
    </style>
    <body>
    <p><a href="/companies">top</a></p>
        <h1>会社名:{{$company->name}}</h1><br>
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
    </body>
</html>


