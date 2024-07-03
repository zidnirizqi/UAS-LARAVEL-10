@extends('layouts.main')

@section('container')
<table class="table table-sm table-striped table-hover">

    <a href="/alternatif/createAlternatif" class="btn btn-primary mb-3">Create</a>

    <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">C1</th>
            <th scope="col">C2</th>
            <th scope="col">C3</th>
            <th scope="col">C4</th>
            <th scope="col">C5</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alternatifs as $item)
        <tr>
            <th>{{ $item->id }}</th>
            <td>{{ $item->nama_perusahaan }}</td>
            <td>{{ $item->C1 }}</td>
            <td>{{ $item->C2 }}</td>
            <td>{{ $item->C3 }}</td>
            <td>{{ $item->C4 }}</td>
            <td>{{ $item->C5 }}</td>
            <td>
                <a href="{{ url('/' .$item->id . '/editAlternatif') }}" class="btn btn-success btn-sm mx-1">Edit</a>
                <a href="{{ url('/' .$item->id . '/deleteAlternatif') }}" class="btn btn-success btn-sm mx-1"
                    onclick="return confirm('Are You Sure?')">Delete</a>
            </td>
            
        </tr>
        
            
        @endforeach
        
    </tbody>
</table>
@endsection
