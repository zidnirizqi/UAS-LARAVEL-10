@extends('layouts.main')

@section('container')

<div class="container mt-5">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <h2>Edit</h2>
    <form action="{{'/'.$criteria->id.'/editKriteria'}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
            <input type="text" class="form-control" name="nama_kriteria" value="{{ $criteria->nama_kriteria }}">
        </div>
        <div class="mb-3">
            <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
            <input type="text" class="form-control" name="kode_kriteria" value="{{ $criteria->kode_kriteria }}">
        </div>
        <div class="mb-3">
            <label for="bobot" class="form-label">Bobot</label>
            <select class="form-select" name="bobot" value="{{ $criteria->bobot }}" required>
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
            <select class="form-select" name="tipe"value="{{ $criteria->tipe }}" required>
                <option value="">Pilih Tipe</option>
                <option value="benefit">Benefit</option>
                <option value="cost">Cost</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
