@extends('layout')

@section('content')
    <body>
        <div class="container">
            <div class="row">
                <a href={{route('companies.create')}}>新規会社作成</a>
                <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>会社名</th>
                </tr>
                @foreach($companies as $company)
                <tbody>
                    <tr>
                        <td><a href="/companies/{{$company->id}}">{{$company->name}}</a></td>
                    </tr>
                </tbody>
                @endforeach
                </thead>
                </table>
            </div>
        </div>
    </body>
    @endsection