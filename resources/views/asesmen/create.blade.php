@extends('Layouts.app')
@section('content')
{{-- Start Layout --}}

<div class="container" data-aos="fade">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
  <h3>Form Tambah Data Asesmen</h3>
  </div> <br>
  <div class="col-lg-12">
    <form action="{{ route('asesmen.store') }}" method="post">
      @csrf

      <div class="container">
        <div class="row mb-3 align-items-center">
          <div class="col-md-3">
            <label for="namalengkap" class="form-label">Nama Peserta</label>
          </div>
          <div class="col-md-9">
            <input type="text" name="namalengkap" class="form-control" id="namalengkap" placeholder="Masukkan Nama Panjang" required="">
          </div>
        </div>
        <div class="row mb-3 align-items-center">
          <div class="col-md-3">
            <label for="nomorinduk" class="form-label">Nomor Induk Mahasiswa</label>
          </div>
          <div class="col-md-9">
            <input type="text" name="nomorinduk" class="form-control" id="nomorinduk" placeholder="Masukkan Nomor Induk Mahasiswa" required="">
          </div>
        </div>
        <div class="row mb-3 align-items-center">
          <div class="col-md-3">
            <label for="id_skema" class="form-label">Skema</label>
          </div>
          <div class="col-md-9">
            <select name="id_skema" class="form-control" id="id_skema" required="">
              <option >- Pilih Skema Sertifikasi -</option>
              @foreach ($skema as $item)
                <option value="{{ $item->id }}">{{ $item->detail }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row mb-3 align-items-center">
          <div class="col-md-3">
            <label for="hasil" class="form-label">Hasil Sertifikasi</label>
          </div>
          <div class="col-md-9">
            <select name="hasil" class="form-control" id="hasil" required="">
              <option >- Pilih Hasil -</option>
              <option value="k">Kompeten</option>
              <option value="bk">Belum Kompeten</option>
            </select>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <button type="button" class="btn btn-danger btn-icon" onclick="window.location.href='{{ route('asesmen.index') }}'">
            <i class="bi bi-x-circle me-2"></i> Batal
          </button>
          <button type="submit" class="btn btn-primary btn-icon">
            <i class="bi bi-save me-2"></i> Simpan
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

{{-- End Layout --}}
@endsection
