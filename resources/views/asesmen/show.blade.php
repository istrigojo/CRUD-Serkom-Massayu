@extends('Layouts.app')
@section('content')
{{-- Start Layout --}}

<div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <h3>Data Asesmen Peserta {{ $asesmen->namalengkap }}</h3> {{-- Dpanggil sesuai data id --}}
</div> 
    <table class="table table-striped table-bordered">
        <thead class="table-light text-center">
            <tr>
                <th>Detail Asesmen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Nomor Peserta</strong></td>
                <td>{{ $asesmen->nomorpeserta }}</td>
            </tr>
            <tr>
                <td><strong>NIM</strong></td>
                <td>{{ $asesmen->nomorinduk }}</td>
            </tr>
            <tr>
                <td><strong>Nama Peserta</strong></td>
                <td>{{ $asesmen->namalengkap }}</td>
            </tr>
            <tr>
                <td><strong>Skema</strong></td>
                <td>{{ $asesmen->skema->detail }}</td>
            </tr>
            <tr>
                <td><strong>Asesor</strong></td>
                <td>{{ $asesmen->skema->asesor }}</td>
            </tr>
            <tr>
                <td><strong>Tanggal Pelaksanaan</strong></td>
                <td>{{ $asesmen->skema->tanggal }}</td>
            </tr>
            <tr>
                <td><strong>Tempat Pelaksanaan</strong></td>
                <td>{{ $asesmen->skema->tempat }}</td>
            </tr>
            <tr>
                <td><strong>Hasil</strong></td>
                <td>
                    @if ($asesmen->hasil == 'k')
                        Kompeten
                    @else
                        Belum Kompeten
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-start mb-3">
        <button type="button" class="btn btn-info btn-icon" onclick="window.location.href='{{ route('asesmen.index') }}'">
            <i class="bi bi-arrow-left-circle me-2"></i> Kembali
        </button>
    </div>

{{-- End Layout --}}
@endsection