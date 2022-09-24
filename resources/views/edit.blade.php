{{-- @extends('layouts.base')
@section('content') --}}

<a href="/dashboard" class="btn btn-primary mb-4">Back</a>

    <br>
    <br>

    <form method="post" action="/edit/{{$dinas->id}}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="nip">NIP</label>
            <br>
            <input type="text" class="form-control" name="nip" value="{{$dinas->nip}}"/>
        </div>

        <br>

        <div class="form-group">
            <label for="value">Nama</label>
            <br>
            <input type="text" class="form-control" name="nama" value="{{$dinas->nama}}"/>
        </div>

        <br>

        <div class="form-group">
            <label for="value">Kota Asal</label>
            <br>
            <input type="text" class="form-control" name="kota_asal" value="{{$dinas->kota_asal}}"/>
        </div>

        <br>

        <div class="form-group">
            <label for="value">Status Asal</label>
            <br>
            <input type="text" class="form-control" name="st_asal" value="{{$dinas->st_asal}}"/>
        </div>

        <br>

        <div class="form-group">
            <label for="value">Keterangan Asal</label>
            <br>
            <input type="text" class="form-control" name="ket_asal" value="{{$dinas->ket_asal}}"/>
        </div>

        <br>

        <div class="form-group">
            <label for="value">Kota Tujuan</label>
            <br>
            <input type="text" class="form-control" name="kota_tujuan" value="{{$dinas->kota_tujuan}}"/>
        </div>

        <br>

        <div class="form-group">
            <label for="value">Status Pulang</label>
            <br>
            <input type="text" class="form-control" name="st_pulang" value="{{$dinas->st_pulang}}"/>
        </div>

        <br>

        <div class="form-group">
            <label for="value">Keterangan Pulang</label>
            <br>
            <input type="text" class="form-control" name="ket_pulang" value="{{$dinas->ket_pulang}}"/>
        </div>

        <br>
        <br>

        <button type="submit" class="btn btn-success mb-4 mt-2">Edit</button>
    </form>

{{-- @endsection --}}