<html>
<head>
    <title>DB Companies</title>
</head>
    <style>
        body {font-size:16pt; color:#000000;}
    </style>
    <body>
        <table>
        <tr><th>ID</th><th>Name</th><th>作成日</th><th>更新日</th>
        @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>