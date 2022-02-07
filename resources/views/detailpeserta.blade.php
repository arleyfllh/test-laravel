@extends('layouts.main')

@section('content')
<h1 class="my-3 text-center bg-warning py-3 rounded-3 border border-dark">Detail Peserta</h1>
<h4>Nama: {{ $data->nama_lengkap }}</h4>
<h4>Email: {{ $data->email }}</h4>

<table class="table mt-4">
  <thead>
    <tr class="text-white">
      <th scope="col" class="border-2 border-dark bg-dark w-25">Aspek</th>
      <th scope="col" class="border-2 border-dark bg-dark text-center">1</th>
      <th scope="col" class="border-2 border-dark bg-dark text-center">2</th>
      <th scope="col" class="border-2 border-dark bg-dark text-center">3</th>
      <th scope="col" class="border-2 border-dark bg-dark text-center">4</th>
      <th scope="col" class="border-2 border-dark bg-dark text-center">5</th>
    </tr>
  </thead>
  <tbody>
      <tr>
        <th class="border-2 border-dark" style="vertical-align: middle">Aspek Intelegensi</th>
        @for ($i = 0; $i < count($arr_range_intel); $i++)
          <td class="border-2 border-dark text-center" style="vertical-align: middle">
            @if ($i == 0 && $nilai_intel <= $arr_range_intel[$i])
              <div class="bg-success text-white p-2 fs-4"><span>&#10003;</span></div>
            @elseif ($i > 0 && $nilai_intel <= $arr_range_intel[$i] && $nilai_intel > $arr_range_intel[$i-1])
              <div class="bg-success text-white p-2 fs-4"><span>&#10003;</span></div>
            @endif
          </td>
        @endfor
      </tr>
      <tr>
        <th class="border-2 border-dark" style="vertical-align: middle">Aspek Numerical Ability</th>
        @for ($i = 0; $i < count($arr_range_num_ab); $i++)
          <td class="border-2 border-dark text-center" style="vertical-align: middle">
            @if ($i == 0 && $nilai_num_ab <= $arr_range_num_ab[$i])
              <div class="bg-success text-white p-2 fs-4"><span>&#10003;</span></div>
            @elseif ($i > 0 && $nilai_num_ab <= $arr_range_num_ab[$i] && $nilai_num_ab > $arr_range_num_ab[$i-1])
              <div class="bg-success text-white p-2 fs-4"><span>&#10003;</span></div>
            @endif
          </td>
        @endfor
      </tr>
  </tbody>
</table>

<a href="/" class="btn btn-primary mb-3">Back to Data Peserta</a>
@endsection
