@extends('layouts.main')

@section('content')
  <h1 class="my-3 text-center bg-primary text-white py-3 rounded-3 border border-dark">Edit Peserta</h1>
  <div class="card mb-3 border border-dark" style="background: rgb(13,110,253);
  background: linear-gradient(90deg, rgba(13,110,253,1) 0%, rgba(13,110,253,1) 25%, rgba(255,193,7,1) 25%, rgba(255,193,7,1) 50%, rgba(220,53,69,1) 50%, rgba(220,53,69,1) 75%, rgba(13,202,240,1) 75%, rgba(13,202,240,1) 100%);">
    <div class="card-body m-3 text-white rounded" style="background: rgba(0, 0, 0, 0.9)">
      <form action="/updatepeserta/{{ $data->id }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama_lengkap" class="form-label fs-4">Nama Lengkap :</label>
          <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" aria-describedby="nama_lengkap" value="{{ $data->nama_lengkap }}">
          @error('nama_lengkap')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label fs-4">Email :</label>
          <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $data->email }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nilai_x" class="form-label fs-4">Nilai X :</label>
          <input type="number" name="nilai_x" class="form-control @error('nilai_x') is-invalid @enderror" id="nilai_x" value="{{ $data->nilai_x }}">
          @error('nilai_x')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nilai_y" class="form-label fs-4">Nilai Y :</label>
          <input type="number" name="nilai_y" class="form-control @error('nilai_y') is-invalid @enderror" id="nilai_y" value="{{ $data->nilai_y }}">
          @error('nilai_y')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nilai_z" class="form-label fs-4">Nilai Z :</label>
          <input type="number" name="nilai_z" class="form-control @error('nilai_z') is-invalid @enderror" id="nilai_z" value="{{ $data->nilai_z }}">
          @error('nilai_z')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nilai_w" class="form-label fs-4">Nilai W :</label>
          <input type="number" name="nilai_w" class="form-control @error('nilai_w') is-invalid @enderror" id="nilai_w" value="{{ $data->nilai_w }}">
          @error('nilai_w')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
      </form>

    </div>
  </div>
@endsection
