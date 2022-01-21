@extends('layouts.main')

@section('content')
  <h1>Tambah Peserta</h1>
  <div class="card">
    <div class="card-body">
      <form action="/insertpeserta" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="text" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nilai X</label>
          <input type="number" name="nilai_X" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nilai Y</label>
          <input type="number" name="nilai_Y" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nilai Z</label>
          <input type="number" name="nilai_Z" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nilai W</label>
          <input type="number" name="nilai_W" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
@endsection
