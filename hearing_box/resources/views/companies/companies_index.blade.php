@extends('layout')

@section('content')
    <body>
        <table class="table">
        <thead class="thead-light">
        <tr><th style="width:10%">ID</th><th style="width:90%">Name</th></tr>
        </thead>
        @foreach($companies as $company)
            <tbody>
            <tr>
                <th>{{$company->id}}</th>
                <td><a href="/companies/{{$company->id}}">{{$company->name}}</a></td>
            </tr>
            </tbody>
        @endforeach
        </table>
 @endsection