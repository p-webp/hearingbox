
<p>{{$company->name}}</p>
<p>{{$company->id}}</p>

@foreach($sheets as $sheet)
    <p>{{$sheet->title}}</p>
    <p>{{$sheet->visit_date}}</p>
@endforeach