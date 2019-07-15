@extends('layout')

@section('content')
    <body>
        <a href={{route('companies.create')}}>新規会社作成</a>
        <table class="table">
        <thead class="thead-light">
        <tr><th style="width:10%">ID</th><th style="width:90%">Name</th></tr>
        </thead>
        @foreach($companies as $company)
            <tbody>
            <tr>
                <th>{{$company->id}}</th>
                <td>
                    <a href="/companies/{{$company->id}}">{{$company->name}}</a>
                    <a class="btn btn-primary btn-sm" href="{{route('companies.edit',['id'=>$company->id])}}" role="button">会社名の編集</a>
                    <form action="{{route('companies.delete',['id'=>$company->id])}}" method="POST">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger btn-sm btn-dell" name="delete" value="削除">
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
        </table>
        <a href={{route('setting')}}>設定</a>
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