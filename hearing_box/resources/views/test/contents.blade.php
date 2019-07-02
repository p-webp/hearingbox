<html>
<head>
    <title>Sheet Details</title>
</head>
    <style>
        body {font-size:16pt; color:#000000;}
    </style>
    <body>
        @foreach($memos as $memo)
            <p>{{$memo->content}}</p>
        @endforeach
    </body>
</html>


