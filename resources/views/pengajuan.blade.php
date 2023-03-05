@extends('layout.main')

@section('content')

<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        <form action="pengajuan" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h5 style="font-weight:bold; text-align:center">Identitas Sanggar</h5>
                    <br>
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Sanggar" required>
                    </div>
                    <div class="mb-3">
                        <label for="desa">Desa/Kelurahan</label>
                        <input type="text" name="desa" class="form-control" id="desa" placeholder="Masukkan Desa/Kelurahan" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Masukkan Kecamatan" required>
                    </div> --}}
                    
                    <div class="form-group mb-3">
                        <label for="kecamatan">Kecamatan</label> 
                        <select class="form-select" name="kecamatan" id="kecamatan">
                            <option selected>Pilih Kecamatan</option>
                            @foreach($kecamatans as $ke)
                            <option value="{{ $ke->nama_kecamatan }}">{{ $ke->nama_kecamatan }}</option>
                            @endforeach
                        </select>      
                    </div>
                    
                    <div class="mb-3">
                        <label for="no_tlp">No HP</label>
                        <input type="number" name="no_tlp" class="form-control" id="no_tlp" placeholder="Masukkan Nomor HP Sanggar" required>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 style="font-weight:bold; text-align:center">Informasi Lain</h5>
                    <br>
                    <div class="mb-3">
                        <label for="status_kepemilikan">Status Kepemilikan</label>
                        <input type="text" name="status_kepemilikan" class="form-control" id="status_kepemilikan" placeholder="Masukkan Status Kepemilikan Sanggar" required>
                    </div>

                    <div class="mb-3">
                        <label for="pembinaan_seni">Pembinaan Seni :</label>
                        <br>
                        <input type="checkbox" name="pembinaan_seni" value="Seni-Tari"> Seni Tari <br/>
                        <input type="checkbox" name="pembinaan_seni" value="Seni-Musik"> Seni Musik <br/>
                        <input type="checkbox" name="pembinaan_seni" value="Seni-Teater"> Seni Teater <br/>
                        <input type="checkbox" name="pembinaan_seni" value="Seni-Lukis"> Seni Lukis <br/>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="pembinaan_seni">Pembinaan Seni</label>
                        <input type="text" name="pembinaan_seni" class="form-control" id="pembinaan_seni" placeholder="Masukkan Pembinaan Seni" required>
                    </div> --}}
                    <div class="mb-3">
                        <label for="photo">Foto</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="kegiatan" placeholder="Masukkan Nama Sanggar" required>
            </div> -->
            <!-- <div class="mb-3">
                <label for="no_induk_sanggar">No Induk Sanggar</label>
                <input type="text" name="no_induk_sanggar" class="form-control" id="no_induk_sanggar" placeholder="Masukkan Nomor Induk Sanggar" required>
            </div> -->
            <!-- <div class="mb-3">
                <label for="rt">RT</label>
                <input type="number" name="rt" class="form-control" id="rt" placeholder="Masukkan RT" required>
            </div> -->
            <!-- <div class="mb-3">
                <label for="rw">RW</label>
                <input type="number" name="rw" class="form-control" id="rw" placeholder="Masukkan RW" required>
            </div> -->
            <!-- <div class="mb-3">
                <label for="dusun">Dusun</label>
                <input type="text" name="dusun" class="form-control" id="dusun" placeholder="Masukkan Dusun" required>
            </div> -->
            <!-- <div class="mb-3">
                <label for="desa">Desa/Kelurahan</label>
                <input type="text" name="desa" class="form-control" id="desa" placeholder="Masukkan Desa/Kelurahan" required>
            </div>
            <div class="mb-3">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Masukkan Kecamatan" required>
            </div> -->
            <!-- <div class="mb-3">
                <label for="kode_pos">Kode Pos</label>
                <input type="number" name="kode_pos" class="form-control" id="kode_pos" placeholder="Masukkan Kode Pos" required>
            </div>
            <div class="mb-3">
                <label for="lintang">Lintang</label>
                <input type="text" name="lintang" class="form-control" id="lintang" placeholder="Masukkan Lintang" required>
            </div>
            <div class="mb-3">
                <label for="bujur">Bujur</label>
                <input type="text" name="bujur" class="form-control" id="bujur" placeholder="Masukkan Bujur" required>
            </div>
            <div class="mb-3">
                <label for="sk_pendirian">SK Pendirian</label>
                <input type="text" name="sk_pendirian" class="form-control" id="sk_pendirian" placeholder="Masukkan Nomor SK Pendirian Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_pendirian">Tanggal Pendirian</label>
                <input type="date" name="tanggal_pendirian" class="form-control" id="tanggal_pendirian" required>
            </div>
            <div class="mb-3">
                <label for="no_akta">No Akta Notaris</label>
                <input type="text" name="no_akta" class="form-control" id="no_akta" placeholder="Masukkan Nomor Akta Notaris Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_penetapan_notaris">Tanggal Penetepan Notaris</label>
                <input type="date" name="tanggal_penetapan_notaris" class="form-control" id="tanggal_penetapan_notaris" required>
            </div>
            <div class="mb-3">
                <label for="no_pendaftaran_kemenkumham">No Pendaftaran Kemenkumham</label>
                <input type="NUMBER" name="no_pendaftaran_kemenkumham" class="form-control" id="no_pendaftaran_kemenkumham" placeholder="Masukkan Nomor Pendaftaran Kemenkumham Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="pejabat_pengesah_notaris">Pejabat Pengesah Notaris</label>
                <input type="text" name="pejabat_pengesah_notaris" class="form-control" id="pejabat_pengesah_notaris" placeholder="Masukkan Nama Pejabat Pengesah Notaris" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_penetapan_kemenkumham">Tanggal Penetapan Kemenkumham</label>
                <input type="date" name="tanggal_penetapan_kemenkumham" class="form-control" id="tanggal_penetapan_kemenkumham" required>
            </div>
            <div class="mb-3">
                <label for="no_rekening">Nomer Rekening</label>
                <input type="number" name="no_rekening" class="form-control" id="no_rekening" placeholder="Masukkan Nomer Rekening Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="nama_bank">Nama Bank</label>
                <input type="text" name="nama_bank" class="form-control" id="nama_bank" placeholder="Masukkan Nama Bank" required>
            </div>
            <div class="mb-3">
                <label for="cabang_kcp_unit">Cabang KCP Unit</label>
                <input type="text" name="cabang_kcp_unit" class="form-control" id="cabang_kcp_unit" placeholder="Masukkan Cabang KCP Unit" required>
            </div>
            <div class="mb-3">
                <label for="an_rekening">Atas Nama Rekening</label>
                <input type="text" name="an_rekening" class="form-control" id="an_rekening" placeholder="Masukkan Atas Nama Rekening Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="luas_tanah_milik">Luas Tanah Milik</label>
                <input type="text" name="luas_tanah_milik" class="form-control" id="luas_tanah_milik" placeholder="Masukkan Luas Tanah Milik" required>
            </div>
            <div class="mb-3">
                <label for="luas_tanah_bukanmilik">Luas Tanah Bukan Milik</label>
                <input type="text" name="luas_tanah_bukanmilik" class="form-control" id="luas_tanah_bukanmilik" placeholder="Masukkan Luas Tanah Bukan Milik" required>
            </div>
            <div class="mb-3">
                <label for="nama_wajib_pajak">Nama Wajib Pajak</label>
                <input type="text" name="nama_wajib_pajak" class="form-control" id="nama_wajib_pajak" placeholder="Masukkan Nama Wajib Pajak" required>
            </div>
            <div class="mb-3">
                <label for="npwp">NPWP</label>
                <input type="number" name="npwp" class="form-control" id="npwp" placeholder="Masukkan Nomor NPWP" required>
            </div>
            <div class="mb-3">
                <label for="no_fax">No Faximile</label>
                <input type="number" name="no_fax" class="form-control" id="no_fax" placeholder="Masukkan Nomor Faximile" required>
            </div> -->
            <!-- <div class="mb-3">
                <label for="no_tlp">No HP</label>
                <input type="number" name="no_tlp" class="form-control" id="no_tlp" placeholder="Masukkan Nomor HP Sanggar" required>
            </div> -->
            <!-- <div class="mb-3">
                <label for="status_kepemilikan">Status Kepemilikan</label>
                <input type="text" name="status_kepemilikan" class="form-control" id="status_kepemilikan" placeholder="Masukkan Status Kepemilikan Sanggar" required>
            </div>
            <div class="mb-3">
                <label for="pembinaan_seni">Pembinaan Seni</label>
                <input type="text" name="pembinaan_seni" class="form-control" id="pembinaan_seni" placeholder="Masukkan Pembinaan Seni" required>
            </div>
            <div class="mb-3">
                <label for="photo">Foto</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
            </div> -->

            <div class="mb-3">
                <button class="btn btn-success btn-sm" type="submit">Ajukan</button>
            </div>
    </div>
</div>
</form>
</div>


@endsection