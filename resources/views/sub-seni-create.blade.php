@extends('layout.main')

@section('content')
    <div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
        <div class="col-10 m-auto">
            <form action="sub-seni-create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="kodekesenian">Kode Jenis Kesenian</label>
                    <input type="text" name="id_jenis_kesenian" placeholder="Masukkan Kode Jenis Kesenian"
                        class="form-control" id="id_jenis_kesenian" required>
                </div>
                <div class="mb-3">
                    <label for="namakecamatan">Sub Kesenian</label>
                    <input type="text" name="nama_subkesenian" placeholder="Masukkan Sub Kesenian" class="form-control"
                        id="nama_subkesenian" required>
                </div>

                <div class="mb-3">
                    <button class="btn btn-success btn-sm" type="submit">Tambah</button>
                </div>

            </form>
        </div>
    </div>
@endsection
