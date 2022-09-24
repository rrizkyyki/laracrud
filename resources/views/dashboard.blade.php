@extends('layouts.base')
@section('content')

@if (session('alert'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('alert') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif

<a href="/create" class="btn btn-success mb-4">Add Data</a>

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
    <?php $i = 1 ?>
    @foreach ($dinas as $d)
    <tr>
      <th scope="row">{{$i++}}</th>          
      <td>{{$d->nip}}</td>
      <td>{{$d->nama}}</td>
      <td>{{$d->kota_asal}}</td>
      <td>{{$d->st_asal}}</td>
      <td>{{$d->ket_asal}}</td>
      <td>{{$d->kota_tujuan}}</td>
      <td>{{$d->st_pulang}}</td>
      <td>{{$d->ket_pulang}}</td>
      <td>
        <a href="/edit/{{$d->id}}" class="btn btn-warning mb-2">Edit</a>
        <form action="/edit/{{$d->id}}" method="post" onsubmit="return confirm('Are you sure wanna delete {{$d->nama}}')">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection