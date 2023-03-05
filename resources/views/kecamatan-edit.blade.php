@extends('layout.main')

@section('content')

<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        @foreach($kecamatans as $kc)
        <form action="kecamatan-update" method="get">
            @csrf 
            <div class="mb-3">
                <input type="hidden" name="id" value="{{ $kc->id }}">
            </div>
            <div class="mb-3">
                <label for="kodekecamatan">Kode Kecamatan</label>
                <input type="text" required="required" name="kode_kecamatan" value="{{ $kc->kode_kecamatan }}">
            </div>
            <div class="mb-3">
                <label for="namakecamatan">Nama Kecamatan</label>
                <input type="text" required="required" name="nama_kecamatan" value="{{ $kc->nama_kecamatan }}">
            </div>

            <div class="mb-3">
                <button class="btn btn-success btn-sm" type="submit">Edit</button>
            </div>
        </form>
        @endforeach
    </div>
</div>

@endsection