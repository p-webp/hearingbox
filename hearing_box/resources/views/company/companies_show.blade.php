<html>
<head>
    <title>Sheet Contents</title>
</head>
    <style>
        body {font-size:16pt; color:#000000;}
    </style>
    <body>
        <h1>{{$company->name}}</h1>

        @foreach($sheets as $sheet)
            <p>シートID：{{$sheet->id}}</p>
            <p>タイトル：<a href="/sheets/{{$sheet->id}}">{{$sheet->title}}</a></p>
            <p>訪問日：{{$sheet->visit_date}}</p><br>
        @endforeach
    </body>
</html>
