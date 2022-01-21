@extends('layouts.main')

@section('content')
<h1 class="my-3">Data Peserta</h1>
<a href="/tambahpeserta" class="btn btn-success my-3">Tambah Peserta +</a>
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">X</th>
      <th scope="col">Y</th>
      <th scope="col">Z</th>
      <th scope="col">W</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $row)
      <tr>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->nilai_X }}</td>
        <td>{{ $row->nilai_Y }}</td>
        <td>{{ $row->nilai_Z }}</td>
        <td>{{ $row->nilai_W }}</td>
        <td>
          <a href="/detailpeserta/{{ $row->id }}" class="btn btn-warning">Detail</a>
          <a href="/tampilpeserta/{{ $row->id }}" class="btn btn-primary">Edit</a>
          <a href="/deletepeserta/{{ $row->id }}" class="btn btn-danger">Hapus</button>
        </td>
      </tr>
        
    @endforeach

  </tbody>
</table>
@endsection
