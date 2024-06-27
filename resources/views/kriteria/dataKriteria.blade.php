@extends('layouts.main')

@section('container')
<table class="table table-sm table-striped table-hover">

    <a href="/kriteria/create" class="btn btn-primary mb-3">Create</a>

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
        
    </tbody>
</table>
@endsection
