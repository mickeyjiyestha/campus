@extends('layouts.main')
@section('container')
<h1>{{ $title }}</h1>

<table class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <td>Kelas</td>
        <td>Program Studi</td>
        <td>Jurusan</td>
        <td>View</td>
    </tr>
    </thead>
    @foreach ($ClassRoom as $cr)
    <tr>
        <td>{{ $cr->Kelas }}</td>
        <td>{{ $cr->Program_Studi }}</td>
        <td>{{ $cr->Jurusan }}</td>
        <td>
            <button class="btn btn-dark text-pink-500">View</button>
            <button class="btn btn-dark">Update</button>
        </td>
    </tr>
    @endforeach
    
</table>

@endsection 