@extends('layouts.main')

@section('container')

<div class="container mt-5">

    @if(session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <h2>Create</h2>
    <form action="{{url('kriteria/create')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
            <input type="text" class="form-control" value={{old('nama_kriteria')}}>
        </div>
        <div class="mb-3">
            <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
            <input type="text" class="form-control" value={{old('kode_kriteria')}}>
        </div>
        <div class="mb-3">
            <label for="bobot" class="form-label">Bobot</label>
            <select class="form-select" name="bobot">
                <option value="0">Pilih Bobot</option>
                <option value="1">10</option>
                <option value="2">15</option>
                <option value="3">20</option>
                <option value="4">25</option>
                <option value="5">30</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <select class="form-select" name="tipe">
                <option value="0">Pilih Bobot</option>
                <option value="1">Benefit</option>
                <option value="2">Cost</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection