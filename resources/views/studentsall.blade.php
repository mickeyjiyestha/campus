@extends('layouts.main')

@section('container')
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Birth</td>
                <td>Mother Name</td>
                <td>Father Name</td>
                <td>religion</td>
            </tr>
        </thead>
        <tr>
            <td>{{ $student->First_Name }}</td>
            <td>{{ $student->Last_Name }}</td>
            <td>{{ $student->Phone }}</td>
            <td>{{ $student->Address }}</td>
            <td>{{ $student->Birth }}</td>
            <td>{{ $student->Mother_Name }}</td>
            <td>{{ $student->Father_Name }}</td>
            <td>{{ $student->Religion }}</td>
      </tr>
    </table>
@endsection