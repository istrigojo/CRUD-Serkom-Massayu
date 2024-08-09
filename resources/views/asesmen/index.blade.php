@extends('Layouts.app')
@section('content')
{{-- Start Layout --}}

    <div class="d-flex justify-content-end mb-3">
        <button type="button" 
        class="btn" style="background-color:white; color: black; box-shadow:  5px 5px 25px rgba(1, 1, 1, 0.1); border: 2px solid #0ea2bd; font-weight: bold;"
        >
            <a href="{{ route('asesmen.create')}}" class="bi bi-plus color: inherit; text-decoration: none; font-weight: bold;">Tambah Asesmen</a>
        </button>
    </div>
    <table class="table table-striped table-bordered">
        <thead class="table-light text-center">
            <tr>
                <th>No</th>
                <th>Nomor Peserta</th>
                <th>NIM</th>
                <th>Nama Peserta</th>
                <th>Skema</th>
                <th>Hasil</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asesmen as $index => $asesmen)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$asesmen->nomorpeserta}}</td>
                    <td>{{$asesmen->nomorinduk}}</td>
                    <td>{{$asesmen->namalengkap}}</td>
                    <td>{{$asesmen->skema->detail}}</td>
                    <td>
                        @if ($asesmen->hasil == 'k')
                            Kompeten
                        @else
                            Belum Kompeten
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-info btn-icon" onclick="window.location.href='{{ route('asesmen.show', $asesmen->id) }}'">
                            <i class="bi bi-info"></i> Detail
                        </button>
                        <button type="button" class="btn btn-info btn-warning" onclick="window.location.href='{{ route('asesmen.edit', $asesmen->id) }}'">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <form action="{{ route('asesmen.destroy', $asesmen->id) }}" method="POST" class="d-inline" id="delete-form-{{ $asesmen->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-icon" onclick="confirmDelete({{ $asesmen->id }})">
                                <i class="bi bi-trash"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

{{-- End Layout --}}
@endsection