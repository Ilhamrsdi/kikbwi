@extends('layout.main')

@section('content')
<div class="container-fluid">
    <div style="font-family:sans-serif;font-size: small; margin-top: 70px;">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 style="font-weight:bold; text-align:center;">Sanggar Seni {{ $data->nama }}</h5>
                    <br>
                    <div class="text-center">
                        <img src="{{asset('/storage'.$data->photo)}}" class="img img-responsive" style="border-radius: 10px; width:600px; height:400px;" />
                    </div>
                    <br>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-weight:bold;">Identitas Sanggar</h5>
                            <br>
                            <table class="table table-responsive" style="text-align:left;">
                                <tr>
                                    <td>Nama Sanggar Seni</td>
                                    <td>{{ $data->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor KIK</td>
                                    <td>{{ $data->no_induk_sanggar }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $data->status }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-weight:bold;">Alamat Sanggar</h5>
                            <br>
                            <table class="table table-responsive" style="text-align:left;">
                                <tr>
                                    <td>RT</td>
                                    <td>{{ $data->rt }}</td>
                                </tr>
                                <tr>
                                    <td>RW</td>
                                    <td>{{ $data->rw }}</td>
                                </tr>
                                <tr>
                                    <td>Dusun</td>
                                    <td>{{ $data->dusun }}</td>
                                </tr>
                                <tr>
                                    <td>Desa</td>
                                    <td>{{ $data->desa }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>{{ $data->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td>
                                    <td>{{ $data->kode_pos }}</td>
                                </tr>
                                <tr>
                                    <td>Lintang</td>
                                    <td>{{ $data->lintang }}</td>
                                </tr>
                                <tr>
                                    <td>Bujur</td>
                                    <td>{{ $data->bujur }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 style="font-weight:bold;">Informasi Lain</h5>
                            <br>
                            <table class="table table-responsive" style="text-align:left;">
                                <tr>
                                    <td>Jenis Pembinaan Seni</td>
                                    <td>{{ $data->pembinaan_seni }}</td>
                                </tr>
                                <tr>
                                    <td>SK Pendirian Sanggar Seni</td>
                                    <td>{{ $data->sk_pendirian }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pendirian</td>
                                    <td>{{ $data->tanggal_pendirian }}</td>
                                </tr>
                                <tr>
                                    <td>Status kepemilikan</td>
                                    <td>{{ $data->status_kepemilikan }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Akta Notaris</td>
                                    <td>{{ $data->no_akta }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal_penetapan Akta Notaris</td>
                                    <td>{{ $data->tanggal_penetapan_notaris }}</td>
                                </tr>
                                <tr>
                                    <td>Pejabat Yang Mengesahkan Akta Notaris</td>
                                    <td>{{ $data->pejabat_pengesah_notaris }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Penetapan KEMENHUMHAM</td>
                                    <td>{{ $data->tanggal_penetapan_kemenkumham }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Pendaftaran KEMENHUMHAM</td>
                                    <td>{{ $data->no_pendaftaran_kemenkumham }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Rekening</td>
                                    <td>{{ $data->no_rekening }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Bank</td>
                                    <td>{{ $data->nama_bank }}</td>
                                </tr>
                                <tr>
                                    <td>Cabang/KCP/Unit</td>
                                    <td>{{ $data->cabang_kcp_unit }}</td>
                                </tr>
                                <tr>
                                    <td>Rekening Atas Nama</td>
                                    <td>{{ $data->an_rekening }}</td>
                                </tr>
                                <tr>
                                    <td>Luas Tanah Milik(m²)</td>
                                    <td>{{ $data->luas_tanah_milik }}</td>
                                </tr>
                                <tr>
                                    <td>Luas Tanah Bukan Milik(m²)</td>
                                    <td>{{ $data->luas_tanah_bukanmilik }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Wajib Pajak</td>
                                    <td>{{ $data->nama_wajib_pajak }}</td>
                                </tr>
                                <tr>
                                    <td>NPWP</td>
                                    <td>{{ $data->npwp }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td>{{ $data->no_tlp }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Fax</td>
                                    <td>{{ $data->no_fax }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div style="font-family:sans-serif;font-size: small; margin-top: 70px;">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <br>
                                <h5 style="font-weight:bold;">Daftar Karya</h5>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover table-responsive" 
                                    style="text-align:left;">
                                        <tr style="text-align:center;">
                                            <th>No</th>
                                            <th>Judul Karya</th>
                                            <th>Tahun Diciptakan</th>
                                            <th>Penata Tari</th>
                                            <th>Penata Rias</th>
                                            <th>Penata Musik</th>
                                            <th>Sinopsis</th>
                                            <th>Pengalaman Ditampilkan</th>
                                            <th>Dokumentasi</th>
                                        </tr>
                                        @foreach ($daftarkarya as $index)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $index->judul_karya }}</td>
                                            <td>{{ $index->tahun_diciptakan }}</td>
                                            <td>{{ $index->penata_tari }}</td>
                                            <td>{{ $index->penata_rias }}</td>
                                            <td>{{ $index->penata_musik }}</td>
                                            <td style="text-align:justify;">{{ $index->sinopsis }}</td>
                                            <td>{{ $index->pengalaman_ditampilkan }}</td>
                                            <td><img src="{{ asset('/storage' . $index->photo) }}" width='270' height='200' class="img img-responsive" /></td>
                                            @endforeach
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div style="font-family:sans-serif;font-size: small; margin-top: 70px;">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <br>
                                    <h5 style="font-weight:bold;">Daftar Anggota</h5>
                                    <div class="card-body">
                                        <table class="table table-bordered table-hover table-responsive" 
                                        style="text-align:left;">
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tangal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jabatan</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Nomor Telepon</th>
                                                <th>Alamat</th>

                                                @foreach ($anggota as $index)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $index->nik }}</td>
                                                <td>{{ $index->nama }}</td>
                                                <td>{{ $index->tempat_lahir }}</td>
                                                <td>{{ $index->tanggal_lahir }}</td>
                                                <td>{{ $index->jenis_kelamin }}</td>
                                                <td>{{ $index->jabatan }}</td>
                                                <td>{{ $index->pendidikan_terakhir }}
                                                <td>{{ $index->no_telepon }}</td>
                                                <td>{{ $index->alamat }}</td>
                                                @endforeach
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection