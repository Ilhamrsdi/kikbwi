@extends('layout.main')

@section('content')

<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        <form action="aktivitas" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="mb-3">
                <label for="namasanggar">Nama Sanggar</label>
                <input type="text" name="nm_sanggar" placeholder="Masukkan Nama Sanggar" class="form-control" id="nm_sanggar" required>
            </div>
            <div class="mb-3">
                <label for="kegiatan">Kegiatan</label>
                <input type="text" name="kegiatan" placeholder="Masukkan Deskripsi Kegiatan (max 100 huruf)" class="form-control" id="kegiatan" required>
            </div>
            <div class="mb-3">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" required>
            </div>

            <div class="mb-3">
                <label for="photo">Foto</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-success btn-sm" type="submit">Unggah</button>
            </div>

        </form>
    </div>
</div>

@endsection