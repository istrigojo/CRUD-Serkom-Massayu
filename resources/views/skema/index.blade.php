@extends('Layouts.app')
@section('content')
{{-- Start Layout --}}

<table class="table table-striped table-bordered">
    <thead class="table-light text-center">
            <tr>
                <th>No</th>
                <th>Sertifikasi</th>
                <th>Penguji</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Tempat Ujian</th>
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($skema as $index => $skema)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$skema->detail}}</td>
                    <td>{{$skema->asesor}}</td>
                    <td>{{$skema->tanggal}}</td>
                    <td>{{$skema->tempat}}</td>
                    {{-- <td>{{}}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

{{-- End Layout --}}
@endsection