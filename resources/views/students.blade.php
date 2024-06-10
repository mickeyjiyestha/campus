@extends('layouts.main')
@section('container')
<h1>{{ $title }}</h1>

<table class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Phone</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
    </thead>
    @foreach ($students as $s)
        <tr>
        <td>{{ $s->First_Name }}</td>
        <td>{{ $s->Last_Name }}</td>
        <td>{{ $s->Phone }}</td>
        <td>{{ $s->Address }}</td>
        <td>
            <a href="/studentsall/{{ $s->slug }}" class="btn btn-dark">View</a>
        </td>
        </tr>
        @endforeach
    
</table>

@endsection 