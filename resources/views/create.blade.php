@extends('layouts.base')
@section('content')
<div class="container">
    <a href="/dashboard" class="btn btn-primary mb-4">Back</a>
    <form method="post" action="/store">
        @csrf
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" name="nip"/>
        </div>

        <div class="form-group">
            <label for="value">Nama</label>
            <input type="text" class="form-control" name="nama"/>
        </div>

        <div class="form-group">
            <label for="value">Kota Asal</label>
            <input type="text" class="form-control" name="kota_asal"/>
        </div>

        <div class="form-group">
            <label for="value">Status Asal</label>
            <input type="text" class="form-control" name="st_asal"/>
        </div>

        <div class="form-group">
            <label for="value">Keterangan Asal</label>
            <input type="text" class="form-control" name="ket_asal"/>
        </div>

        <div class="form-group">
        <label for="value">Kota Tujuan</label>
        <input type="text" class="form-control" name="kota_tujuan"/>
        </div>

        <div class="form-group">
        <label for="value">Status Pulang</label>
        <input type="text" class="form-control" name="st_pulang"/>
        </div>

        <div class="form-group">
        <label for="value">Keterangan Pulang</label>
        <input type="text" class="form-control" name="ket_pulang"/>
        </div>

        <button type="submit" class="btn btn-success mb-4 mt-2" style="float: right">Add</button>
    </form>
</div>

@endsection