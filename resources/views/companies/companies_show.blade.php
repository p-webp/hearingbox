@extends('layout')

@section('content')
    <body>
        <div class="container">
            <!--<h2>{{$company->name}}</h2>
            <a class="d-inline btn btn-primary btn-sm" href="{{route('companies.edit',['id'=>$company->id])}}" role="button">会社名の編集</a>
                <form action="{{route('companies.delete',['id'=>$company->id])}}" method="POST">
                    {{ csrf_field() }}
                    <input type="submit" class="d-inline btn btn-danger btn-sm btn-dell" name="delete" value="会社の削除">
                </form>-->



            <div class="row">
                <div class="col col-md-4">
                    <nav class="card">
                        <div class="card-header">会社フォルダ</div>
                        <div class="card-body">
                            <a href={{route('companies.create')}} class="btn page-link text-dark d-inline-block btn-block">
                                会社を追加する
                            </a>
                        </div>
                        <div class="list-group-flush">
                            @foreach($companies as $company)
                                @if($company->id==$id)
                                    <a href="/companies/{{$company->id}}" class="list-group-item my-active">
                                    {{$company->name}}
                                    </a>
                                @else
                                <a href="/companies/{{$company->id}}" class="list-group-item">
                                    {{$company->name}}
                                </a>
                                @endif
                            @endforeach
                        </div>
                    </nav>
                </div>
                <div class="column col-md-8">
                    <nav class="card">
                        <div class="card-header">シート一覧</div>
                            <div class="card-body">
                                <div class="text-right">
                                    <a href="/companies/{{$id}}/sheets/create" class="btn page-link text-dark d-inline-block btn-block">
                                        シートを追加する
                                    </a>
                                </div>
                            </div>
                     <table class="table">
                        <thead>
                            <tr>
                                <th>タイトル</th>
                                <th>訪問日</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sheets as $sheet)
                            <tr>
                                <td><a href="/sheets/{{$sheet->id}}">{{$sheet->title}}</a></td>
                                <td>{{$sheet->visit_date->format('Y年m月d日')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
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