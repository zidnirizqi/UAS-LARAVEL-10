@extends('layouts.main')

@section('container')
<table class="table table-sm table-striped table-hover">

    <a href="/kriteria/createKriteria" class="btn btn-primary mb-3">Create</a>

    <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kriteria</th>
            <th scope="col">Kode Kriteria</th>
            <th scope="col">Bobot</th>
            <th scope="col">Tipe</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($criterias as $item)
        <tr>
            <th>{{ $item->id }}</th>
            <td>{{ $item->nama_kriteria }}</td>
            <td>{{ $item->kode_kriteria }}</td>
            <td>{{ $item->bobot }}</td>
            <td>{{ $item->tipe }}</td>
            <td>
                <a href="{{ url('/' .$item->id . '/editKriteria') }}" class="btn btn-success btn-sm mx-1">Edit</a>
                <a href="{{ url('/' .$item->id . '/deleteKriteria') }}" class="btn btn-success btn-sm mx-1"
                    onclick="return confirm('Are You Sure?')">Delete</a>
            </td>
        </tr>
        
            
        @endforeach
        
    </tbody>
</table>
@endsection
