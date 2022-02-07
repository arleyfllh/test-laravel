@extends('layouts.main')

@section('content')
<h1 class="my-3 text-center bg-light py-3 rounded-3 border border-dark">Data Peserta</h1>
<a href="/tambahpeserta" class="btn btn-success my-3">Tambah Peserta +</a>
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<table class="table">
  <thead>
    <tr class="text-white">
      <th class="border-bottom-0 border-2 border-dark bg-dark text-center" style="vertical-align: middle" rowspan="2">Nama</th>
      <th class="border-bottom-0 border-2 border-dark bg-dark text-center" style="vertical-align: middle" rowspan="2">Email</th>
      <th class="border-bottom-0 border-2 border-dark bg-dark text-center" colspan="4">Nilai</th>
      <th class="border-bottom-0 border-2 border-dark bg-dark text-center" style="vertical-align: middle" rowspan="2">Aksi</th>
    </tr>
    <tr>
      <th class="border-bottom-0 border-2 border-dark bg-warning text-center">X</th>
      <th class="border-bottom-0 border-2 border-dark bg-danger text-center">Y</th>
      <th class="border-bottom-0 border-2 border-dark bg-primary text-center">Z</th>
      <th class="border-bottom-0 border-2 border-dark bg-info text-center">W</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $row)
      <tr>
        <td class="border-top-0 border-2 border-dark text-center" style="vertical-align: middle">{{ $row->nama_lengkap }}</td>
        <td class="border-top-0 border-2 border-dark text-center" style="vertical-align: middle">{{ $row->email }}</td>
        <td class="border-top-0 border-2 border-dark text-center" style="vertical-align: middle">{{ $row->nilai_x }}</td>
        <td class="border-top-0 border-2 border-dark text-center" style="vertical-align: middle">{{ $row->nilai_y }}</td>
        <td class="border-top-0 border-2 border-dark text-center" style="vertical-align: middle">{{ $row->nilai_z }}</td>
        <td class="border-top-0 border-2 border-dark text-center" style="vertical-align: middle">{{ $row->nilai_w }}</td>
        <td class="border-top-0 border-2 border-dark text-center" style="vertical-align: middle">
          <a href="/detailpeserta/{{ $row->id }}" class="btn btn-warning border-dark">Detail</a>
          <a href="/tampilpeserta/{{ $row->id }}" class="btn btn-primary border-dark">Edit</a>
          <a href="/deletepeserta/{{ $row->id }}" class="btn btn-danger border-dark">Hapus</button>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
