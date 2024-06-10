@extends('layouts.main')

@section('container')
    <h1>Teacher Page</h1>

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
        @foreach ($teacher as $t)
        <tr>
            <td>{{ $t->first_name }}</td>
            <td>{{ $t->last_name }}</td>
            <td>{{ $t->phone }}</td>
            <td>{{ $t->address }}</td>
            <td>
                <a href="/teacherall/{{ $t->slug }}" class="btn btn-dark">View</a>
            </td>
        </tr>
        @endforeach
    </table>
    <
@endsection