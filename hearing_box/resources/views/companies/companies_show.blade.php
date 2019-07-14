@extends('layout')

@section('content')
        <body>
        <h2>{{$company->name}}</h2>
        <table class="table">
        <thead class="thead-light">
            <tr>
                <th style="width=30%">タイトル</th>
                <th style="width=70%">訪問日</th>
            </tr>
        @foreach($sheets as $sheet)
            <tbody>
                <tr>
                    <td><a href="/sheets/{{$sheet->id}}">{{$sheet->title}}</a></td>
                    <td>{{$sheet->visit_date}}</td>
                </tr>
            </tbody>
        @endforeach
        <a class="btn btn-primary btn-sm" href="/companies/{{$id}}/sheets/create" role="button">作成</a>
@endsection