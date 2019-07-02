<html>
<head>
    <title>Sheet Details</title>
</head>
    <style>
        body {font-size:16pt; color:#000000;}
    </style>
    <body>
        @foreach($sheets as $sheet)
            <p>{{$sheet->id}}</p>
        @endforeach
    </body>
</html>


