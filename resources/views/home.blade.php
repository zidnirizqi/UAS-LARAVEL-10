@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1>SPK Pemilihan Perusahaan Logistik Terbaik</h1>
        <p class="lead">Sistem Pendukung Keputusan untuk membantu Anda memilih perusahaan logistik terbaik berdasarkan kriteria yang telah ditentukan.</p>
    </div>

    <div class="content" style="min-height: 200px;">
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Data Alternatif</h5>
                    <p class="card-text">Kelola data perusahaan logistik yang dievaluasi.</p>
                    <a href="{{ url('alternatif/dataAlternatif') }}" class="btn btn-primary">Data Alternatif</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Data Kriteria</h5>
                    <p class="card-text">Kelola data kriteria yang digunakan untuk evaluasi.</p>
                    <a href="{{ url('kriteria/dataKriteria') }}" class="btn btn-primary">Data Kriteria</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Hasil Perhitungan</h5>
                    <p class="card-text">Lihat hasil perhitungan dan evaluasi perusahaan logistik.</p>
                    <a href="{{ url('hasilHitung/hasil') }}" class="btn btn-success">Hasil Perhitungan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
