@extends('layout')

@section('content')
    <body>
        <div class="container">
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
                            <a href="/companies/{{$company->id}}" class="list-group-item">
                            {{$company->name}}
                            </a>
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </body>
@endsection