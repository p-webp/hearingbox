@extends('layout')

@section('content')
        <h1>会社名：{{$company->name}}</h1>
        @foreach($sheets as $sheet)
            <p>シートID：{{$sheet->id}}</p>
            <p>タイトル：<a href="/sheets/{{$sheet->id}}">{{$sheet->title}}</a></p>
            <p>訪問日：{{$sheet->visit_date}}</p><br>
        @endforeach
@endsection