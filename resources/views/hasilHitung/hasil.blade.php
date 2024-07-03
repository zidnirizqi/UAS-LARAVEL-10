@extends('layouts.main')

@section('container')
<table class="table table-sm table-striped table-hover">


    <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">C1 (Keandalan)</th>
            <th scope="col">C2 (Biaya)</th>
            <th scope="col">C3 (Kecepatan)</th>
            <th scope="col">C4 (Cakupan Wilayah)</th>
            <th scope="col">C5 (Kualitas)</th>
            <th scope="col">Nilai SAW</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alternatifs as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_perusahaan }}</td>
            <td>{{ $item->C1 }}</td>
            <td>{{ $item->C2 }}</td>
            <td>{{ $item->C3 }}</td>
            <td>{{ $item->C4 }}</td>
            <td>{{ $item->C5 }}</td>
            <td>{{ number_format($item->normalized_saw, 2) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
