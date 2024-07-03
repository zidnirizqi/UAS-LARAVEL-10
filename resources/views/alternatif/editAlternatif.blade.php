@extends('layouts.main')

@section('container')

<div class="container mt-5">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <h2>Edit</h2>
    <form action="{{'/'.$alternatifs->id.'/editAlternatif'}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nama_perusahaan" class="form-label">Nama Kriteria</label>
            <input type="text" class="form-control" name="nama_perusahaan" value="{{ $alternatifs->nama_perusahaan }}">
        </div>
        <div class="mb-3">
            <label for="C1" class="form-label">C1</label>
            <input type="text" class="form-control" name="C1" value="{{ $alternatifs->C1 }}">
        </div>
        <div class="mb-3">
            <label for="C2" class="form-label">C2</label>
            <input type="text" class="form-control" name="C2" value="{{ $alternatifs->C2 }}">
        </div>
        <div class="mb-3">
            <label for="C3" class="form-label">C3</label>
            <input type="text" class="form-control" name="C3" value="{{ $alternatifs->C3 }}">
        </div>
        <div class="mb-3">
            <label for="C4" class="form-label">C4</label>
            <input type="text" class="form-control" name="C4" value="{{ $alternatifs->C4 }}">
        </div>
        <div class="mb-3">
            <label for="C5" class="form-label">C5</label>
            <input type="text" class="form-control" name="C5" value="{{ $alternatifs->C5 }}">
        </div>
        

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
