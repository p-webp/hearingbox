@extends('layout')

@section('content')
        <body>
        <h2>{{$company->name}}</h2>
        <a class="btn btn-primary btn-sm" href="{{route('companies.edit',['id'=>$company->id])}}" role="button">会社名の編集</a>
            <form action="{{route('companies.delete',['id'=>$company->id])}}" method="POST">
                {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger btn-sm btn-dell" name="delete" value="会社の削除">
            </form>
        <table class="table">
        <thead class="thead-light">
            <tr>
                <th style="width:20%">タイトル</th>
                <th style="width:80%">訪問日</th>
            </tr>
        @foreach($sheets as $sheet)
            <tbody>
                <tr>
                    <td><a href="/sheets/{{$sheet->id}}">{{$sheet->title}}</a></td>
                    <td>{{$sheet->visit_date}}</td>
                </tr>
            </tbody>
        @endforeach
        </thead>
        </table>
        <a class="btn btn-primary btn-sm" href="/companies/{{$id}}/sheets/create" role="button">シートの作成</a>
        @section('script')
        <script>
        $(function(){
            $(".btn-dell").click(function(){
                    if(confirm("本当に削除しますか？")){
                    }else{
                    return false;
                    }
            });
        });
        </script>
        @endsection
@endsection