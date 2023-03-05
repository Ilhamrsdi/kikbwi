@extends('layout.main')

@section('content')
<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        <form action="anggota" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h5 style="font-weight:bold; text-align:center">Identitas Anggota</h5>
                    <br>
                    <div class="mb-3">
                        <label for="sanggar_id">ID KIK</label>
                        <input type="text" name="sanggar_id" class="form-control" id="sanggar_id" placeholder="Masukkan ID KIK" required>
                    </div>
                    <div class="mb-3">
                        <label for="nik">NIK</label>
                        <input type="int" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK Anggota Sanggar" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama">Nama Anggota</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anggota Sanggar" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin Anggota Sanggar</label>
                        <select value="[laki-laki/perempuan]" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin Anggota Sanggar">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat Anggota Sanggar</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anggota Sanggar" required>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir Anggota Sanggar" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Anggota Sanggar" required>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 style="font-weight:bold; text-align:center">Informasi Lain</h5>
                    <br>
                    <div class="mb-3">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_terakhir" class="form-control" id="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir Anggota Sanggar" required>
                    </div>
                    <div class="mb-3">
                        <label for="status_pekerjaan">Pekerjaan Anggota Sanggar</label>
                        <input type="text" name="status_pekerjaan" class="form-control" id="status_pekerjaan" placeholder="Masukkan Pekerjaan Anggota Sanggar" required>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan">Jabatan Anggota Sanggar</label>
                        <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukkan Jabatan Anggota Sanggar" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telepon">Nomer Telpon</label>
                        <input type="text" name="no_telepon" class="form-control" id="no_telepon" placeholder="Masukkan Nomer Telpon Anggota Sanggar" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="status_keanggotaan">Status Keanggotaan Anggota Sanggar</label>
                        <select value="[PT/PB/PJST/PST/SST/AST]" class="form-control" name="status_keanggotaan" id="status_keanggotaan" placeholder="Masukkan Status Keanggotaan Anggota Sanggar">
                            <option value="PT">PT (Penari Tetap)</option>
                            <option value="PB">PB (Peserta Belajar)</option>
                            <option value="PJST">PJST (Panjak Senior Tetap)</option>
                            <option value="PST">PST (Pelaku Senior Tetap)</option>
                            <option value="SST">SST (Sastrawan Senior Tetap)</option>
                            <option value="AST">AST (Aktor Senior Tetap)</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- <div class="mb-3">
                <label for="sanggar_id">ID KIK</label>
                <input type="text" name="sanggar_id" class="form-control" id="sanggar_id" placeholder="Masukkan ID KIK" required>
            </div>
            <div class="mb-3">
                <label for="nik">NIK</label>
                <input type="int" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK Anggota Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="nama">Nama Anggota</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anggota Sanggar" required>
            </div>
            <div class="form-group mb-3">
                <label for="jenis_kelamin">Jenis Kelamin Anggota Sanggar</label>
                <select value="[laki-laki/perempuan]" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin Anggota Sanggar">
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat Anggota Sanggar</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anggota Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir Anggota Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir Anggota Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <input type="text" name="pendidikan_terakhir" class="form-control" id="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir Anggota Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="status_pekerjaan">Pekerjaan Anggota Sanggar</label>
                <input type="text" name="status_pekerjaan" class="form-control" id="status_pekerjaan" placeholder="Masukkan Pekerjaan Anggota Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="jabatan">Jabatan Anggota Sanggar</label>
                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukkan Jabatan Anggota Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="no_telepon">Nomer Telpon</label>
                <input type="text" name="no_telepon" class="form-control" id="no_telepon" placeholder="Masukkan Nomer Telpon Anggota Sanggar" required>
            </div>
            <div class="form-group mb-3">
                <label for="status_keanggotaan">Status Keanggotaan Anggota Sanggar</label>
                <select value="[PT/PB/PJST/PST/SST/AST]" class="form-control" name="status_keanggotaan" id="status_keanggotaan" placeholder="Masukkan Status Keanggotaan Anggota Sanggar">
                    <option value="PT">PT (Penari Tetap)</option>
                    <option value="PB">PB (Peserta Belajar)</option>
                    <option value="PJST">PJST (Panjak Senior Tetap)</option>
                    <option value="PST">PST (Pelaku Senior Tetap)</option>
                    <option value="SST">SST (Sastrawan Senior Tetap)</option>
                    <option value="AST">AST (Aktor Senior Tetap)</option>
                </select>
            </div> -->
            <div class="mb-3">
                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection