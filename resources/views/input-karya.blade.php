@extends('layout.main')

@section('content')
<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        <form action="karya" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h5 style="font-weight:bold; text-align:center">Tentang Karya</h5>
                    <br>
                    <div class="mb-3">
                        <label for="sanggar_id">ID KIK</label>
                        <input type="text" name="sanggar_id" placeholder="Masukkan ID KIK Sanggar" class="form-control" id="sanggar_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="judulkarya">Judul Karya</label>
                        <input type="text" name="judul_karya" placeholder="Masukkan Judul Karya" class="form-control" id="judul_karya" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahundiciptakan">Tahun Diciptakan</label>
                        <input type="date" name="tahun_diciptakan" placeholder="Masukkan Tahun Diciptakannya Karya" class="form-control" id="tahun_diciptakan" required>
                    </div>
                    <div class="mb-3">
                <label for="sinopsis">Sinopsis</label>
                <input type="text" name="sinopsis" placeholder="Masukkan Sinopsis dari Karya" class="form-control" id="sinopsis" required>
            </div>
            <div class="mb-3">
                <label for="pengalamanditampilkan">Pengalaman Ditampilkan</label>
                <input type="text" name="pengalaman_ditampilkan" placeholder="Masukkan Pengalaman Ditampilkannya" class="form-control" id="pengalaman_ditampilkan" required>
            </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 style="font-weight:bold; text-align:center">Informasi Lain</h5>
                    <br>
                    <div class="mb-3">
                <label for="penatatari">Penata Tari</label>
                <input type="text" name="penata_tari" placeholder="Masukkan Nama Penata Tari (saat karya ditampilkan)" class="form-control" id="penata_tari" required>
            </div>
            <div class="mb-3">
                <label for="penatarias">Penata Rias</label>
                <input type="text" name="penata_rias" placeholder="Masukkan Nama Penata Rias (saat karya ditampilkan)" class="form-control" id="penata_rias" required>
            </div>
            <div class="mb-3">
                <label for="penatamusik">Penata Musik</label>
                <input type="text" name="penata_musik" placeholder="Masukkan Nama Penata Musik (saat karya ditampilkan)" class="form-control" id="penata_musik" required>
            </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 style="font-weight:bold; text-align:center">Unggah Dokumentasi Karya</h5>
                    <br>
                    <div class="mb-3">
                <label for="photo">Dokumentasi</label>
                <div class="input-group">
                    <input type="file" class="form-control" placeholder="Pilih File Foto Dokumentasi" id="photo" name="photo">
                </div>
            </div>
                </div>
            </div>
            
            <!-- <div class="mb-3">
                <label for="sanggar_id">ID KIK</label>
                <input type="text" name="sanggar_id" placeholder="Masukkan ID KIK Sanggar" class="form-control" id="sanggar_id" required>
            </div>
            <div class="mb-3">
                <label for="judulkarya">Judul Karya</label>
                <input type="text" name="judul_karya" placeholder="Masukkan Judul Karya" class="form-control" id="judul_karya" required>
            </div>
            <div class="mb-3">
                <label for="tahundiciptakan">Tahun Diciptakan</label>
                <input type="date" name="tahun_diciptakan" placeholder="Masukkan Tahun Diciptakannya Karya" class="form-control" id="tahun_diciptakan" required>
            </div>
            <div class="mb-3">
                <label for="penatatari">Penata Tari</label>
                <input type="text" name="penata_tari" placeholder="Masukkan Nama Penata Tari (saat karya ditampilkan)" class="form-control" id="penata_tari" required>
            </div>
            <div class="mb-3">
                <label for="penatarias">Penata Rias</label>
                <input type="text" name="penata_rias" placeholder="Masukkan Nama Penata Rias (saat karya ditampilkan)" class="form-control" id="penata_rias" required>
            </div>
            <div class="mb-3">
                <label for="penatamusik">Penata Musik</label>
                <input type="text" name="penata_musik" placeholder="Masukkan Nama Penata Musik (saat karya ditampilkan)" class="form-control" id="penata_musik" required>
            </div>
            <div class="mb-3">
                <label for="sinopsis">Sinopsis</label>
                <input type="text" name="sinopsis" placeholder="Masukkan Sinopsis dari Karya" class="form-control" id="sinopsis" required>
            </div>
            <div class="mb-3">
                <label for="pengalamanditampilkan">Pengalaman Ditampilkan</label>
                <input type="text" name="pengalaman_ditampilkan" placeholder="Masukkan Pengalaman Ditampilkannya" class="form-control" id="pengalaman_ditampilkan" required>
            </div>
            <div class="mb-3">
                <label for="photo">Dokumentasi</label>
                <div class="input-group">
                    <input type="file" class="form-control" placeholder="Pilih File Foto Dokumentasi" id="photo" name="photo">
                </div>
            </div> -->

            <div class="mb-3">
                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
            </div>

        </form>
    </div>
</div>

@endsection