@extends('layout.main')

@section('content')

<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        <form action="kecamatan-create" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="mb-3">
                <label for="kodekecamatan">Kode Kecamatan</label>
                <input type="text" name="kode_kecamatan" placeholder="Masukkan Kode Kecamatan" class="form-control" id="kode_kecamatan" required>
            </div>
            <div class="mb-3">
                <label for="namakecamatan">Nama Kecamatan</label>
                <input type="text" name="nama_kecamatan" placeholder="Masukkan Nama Kecamatan" class="form-control" id="nama_kecamatan" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success btn-sm" type="submit">Tambah</button>
            </div>

        </form>
    </div>
</div>

@endsection