@extends('layouts.main')

@section('container')
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Phone</td>
                <td>Address</td>
            </tr>
        </thead>
        <tr>
            <td>{{ $teacher->first_name }}</td>
            <td>{{ $teacher->last_name }}</td>
            <td>{{ $teacher->phone }}</td>
            <td>{{ $teacher->address }}</td>
      </tr>
    </table>
@endsection