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
        <!--「回答：」のあとにsheet_itemテーブルのカラム：answerを表示させたい-->
        @foreach($items as $item)
            <p>質問：{{$item->question}}</p>
            <p>回答：???</p>
        @endforeach
        <h2>Memo</h2>
        @foreach($memos as $memo)
            <p>・{{$memo->content}}</p>
        @endforeach
    </body>
</html>


