@extends('layouts.main')

@section('content')
<h1 class="my-3">Detail Peserta</h1>
<h6>Nama: {{ $data->nama }}</h6>
<h6>Email: {{ $data->email }}</h6>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Aspek Intelegensi</th>
      <th scope="col">Aspek Numerical Ability</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        <td>{{ $nilai_intel }}</td>
        <td>{{ $nilai_num_ab }}</td>
      </tr>
        

  </tbody>
</table>

<a href="/" class="btn btn-primary">Back to Data Peserta</a>
@endsection
