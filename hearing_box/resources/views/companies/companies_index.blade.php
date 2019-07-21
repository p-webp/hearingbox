@extends('layout')

@section('content')
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12"><a href={{route('companies.create')}}>新規会社作成</a></div>
                @foreach($companies as $company)
                    <div class="col-xs-12 col-lg-2"><a href="/companies/{{$company->id}}">{{$company->name}}</a></div>
                @endforeach
            </div>
        </div>
    </body>
    @endsection