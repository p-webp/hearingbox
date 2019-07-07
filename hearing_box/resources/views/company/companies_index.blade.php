<html>
<head>
    <title>DB Companies</title>
</head>
    <style>
        body {font-size:16pt; color:#000000;}
    </style>
    <body>
        <p><a href="/companies">top</a></p>
        <table>
        <tr><th>ID</th><th>Name</th><th>作成日</th><th>更新日</th>
        @foreach($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td><a href="/companies/{{$company->id}}">{{$company->name}}</a></td>
                <td>{{$company->created_at}}</td>
                <td>{{$company->updated_at}}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>