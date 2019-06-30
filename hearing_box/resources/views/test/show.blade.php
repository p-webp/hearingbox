<html>
<head>
    <title>Sheet Contents</title>
</head>
    <style>
        body {font-size:16pt; color:#000000;}
    </style>
    <body>
        <p>{{$company->name}}</p>
        <p>企業ID：{{$company->id}}</p><br>

        @foreach($sheets as $sheet)
            <p>企業ID：{{$sheet->company_id}}</p>
            <p><a href="/companies/{{$company->id}}/{{$company->name}}/{{$sheet->title}}">{{$sheet->title}}</a></p>
            <p>{{$sheet->visit_date}}</p>
        @endforeach
    </body>
</html>
