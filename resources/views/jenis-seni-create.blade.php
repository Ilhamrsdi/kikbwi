@extends('layout.main')

@section('content')
    <div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
        <div class="col-10 m-auto">
            <form action="jenis-seni-create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="kodekecamatan">Kode Kesenian</label>
                    <input type="text" name="id" placeholder="Masukkan Kode Kesenian" class="form-control"
                        id="id" required>
                </div>

                <div class="mb-3">
                    <label for="namakecamatan">Nama Kesenian</label>
                    <input type="text" name="nama_jnskesenian" placeholder="Masukkan Nama Kesenian" class="form-control"
                        id="nama_jnskesenian" required>
                </div>

                <div class="mb-3">
                    <button class="btn btn-success btn-sm" type="submit">Tambah</button>
                </div>

            </form>
        </div>
    </div>
@endsection
