@extends('layouts.main')

@section('container')

<div class="container mt-5">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <h2>Create</h2>
    <form action="{{ url('kriteria/createKriteria') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
            <input type="text" class="form-control" name="nama_kriteria" value="{{ old('nama_kriteria') }}">
        </div>
        <div class="mb-3">
            <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
            <input type="text" class="form-control" name="kode_kriteria" value="{{ old('kode_kriteria') }}">
        </div>
        <div class="mb-3">
            <label for="bobot" class="form-label">Bobot</label>
            <select class="form-select" name="bobot" required>
                <option value="">Pilih Bobot</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <select class="form-select" name="tipe" required>
                <option value="">Pilih Tipe</option>
                <option value="benefit">Benefit</option>
                <option value="cost">Cost</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
