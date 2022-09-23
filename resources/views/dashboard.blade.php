@extends('layouts.base')
@section('content')

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">KD_DL</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Kota Asal</th>
      <th scope="col">Status Asal</th>
      <th scope="col">Keterangan Asal</th>
      <th scope="col">Kota Tujuan</th>
      <th scope="col">Status Pulang</th>
      <th scope="col">Keterangan Pulang</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <a href="" class="btn btn-warning mb-2">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
</table>

@endsection