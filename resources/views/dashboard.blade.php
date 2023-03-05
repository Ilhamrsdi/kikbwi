@extends('layout.main')

@section('content')

<div class="container-fluid">
    <div class="row">
    @if(auth()->user()->level == 'admin')
    <div class="card-group">
        <div class="card text-center" style="margin-top: 70px;">
            <div class="card-body">
                <p class="card-text font-weight-bolder" style="font-size:30px; font-family:'Arial Narrow Bold'; color:#154360;">{{ $totalk }}</p>
                <h4 class="text-uppercase font-weight-bolder" style="font-family:'Franklin Gothic Medium'; color:#154360;">Kecamatan</h4>
                <a href="/kecamatan" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center" style="margin-top: 70px;">
            <div class="card-body">
                <p class="card-text font-weight-bolder" style="font-size:30px; font-family:'Arial Narrow Bold'; color:#154360;">{{ $totaljk }}</p>
                <h4 class="text-uppercase font-weight-bolder" style="font-family:'Franklin Gothic Medium'; color:#154360;">Jenis Kesenian</h4>
                <a href="/Jenis-Kesenian" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center" style="margin-top: 70px;">
            <div class="card-body">
                <p class="card-text font-weight-bolder" style="font-size:30px; font-family:'Arial Narrow Bold'; color:#154360;">{{ $totalsk }}</p>
                <h4 class="text-uppercase font-weight-bolder" style="font-family:'Franklin Gothic Medium'; color:#154360;">Sub Kesenian</h4>
                <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center" style="margin-top: 70px;">
            <div class="card-body">
                <p class="card-text font-weight-bolder" style="font-size:30px; font-family:'Arial Narrow Bold'; color:#154360;">{{ $totalp }}</p>
                <h4 class="text-uppercase font-weight-bolder" style="font-family:'Franklin Gothic Medium'; color:#154360;">User</h4>
                <a href="/list-user" class="btn btn-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <table class="table stylish-table no-wrap">
                    <h3>Data Pengajuan Sanggar</h3>
                    <thead>
                    <tr style="font-weight: bold;">
                        <th class="border-top-0">No</th>
                        <th class="border-top-0">Validasi</th>
                        <th class="border-top-0">Nama Sanggar</th>
                        <th class="border-top-0">Nomor Induk Kesenian</th>
                        <th class="border-top-0">Alamat</th>
                        <th class="border-top-0">Jenis Kesenian</th>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $dt)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            @if(auth()->user()->level == 'admin')
                            <td class="align-middle">
                                <form action="{{ route('updateStatusSanggar', $dt->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                @if ($dt->status == 'aktif')
                                <input class="btn btn-danger btn-sm" type="submit" value="Tidak Aktif" name="status">
                                @endif

                                @if ($dt->status == 'menunggu')
                                <input class="btn btn-success btn-sm" type="submit" value="Aktif" name="status">
                                @endif

                                {{-- <select name="status" id="status" class="form-control">
                                    <option value="aktif">aktif</option>
                                </select> --}}
                                {{-- <input type="submit" name="add" value="Submit" class="btn btn-success"> --}}
                            </form>
                            </td>
                            @endif 
                            <td class="align-middle">
                                <h6>{{ $dt->nama }}</h6><small class="text-muted">{{ $dt->status_kepemilikan}}</small>
                            </td>
                            <td class="align-middle">{{ $dt->no_induk_sanggar }}</td>
                            <td class="align-middle">{{ $dt->kecamatan}}</td>
                            <td class="align-middle">{{ $dt->pembinaan_seni}}</td>
                            <td class="align-middle">
                                @if ($dt->status == 'aktif')
                                    <span class="badge bg-success">{{ $dt->status }}</span>
                                @endif
                                @if ($dt->status == 'menunggu')
                                    <span class="badge bg-warning">{{ $dt->status }}</span>
                                @endif
                            </td>
                            <td class="align-middle">
                                <a href="/Dashboard/{{ $dt->id }}" class="btn btn-primary">Detail</a>
                                @if(auth()->user()->level == 'admin')
                                    <a href="/Dashboard/hapus/{{$dt -> id}}}" 
                                    onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger" 
                                    id="liveToastBtn">Hapus</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <table class="table stylish-table no-wrap">
                        <h3>Data Sanggar Aktif</h3>
                        <thead>
                        <tr style="font-weight: bold;">
                            <th class="border-top-0">Validasi</th>
                            <th class="border-top-0">NIK</th>
                            <th class="border-top-0">Nama Sanggar</th>
                            <th class="border-top-0">Alamat</th>
                            <th class="border-top-0">Jenis Kesenian</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sanggar as $ds)
                            <tr>
                                <td class="align-middle">
                                    <form action="{{ route('updateStatusSanggar', $ds->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        @if ($ds->status == 'aktif')
                                        <input class="btn btn-danger btn-sm" type="submit" value="Tidak Aktif" name="status">
                                        @endif

                                        @if ($ds->status == 'tidak aktif')
                                        <input class="btn btn-success btn-sm" type="submit" value="Aktif" name="status">
                                        @endif

                                        {{-- <select name="status" id="status" class="form-control">
                                            <option value="aktif">aktif</option>
                                            <option value="tidak aktif">tidak aktif</option>
                                        </select> --}}
                                        {{-- <input type="submit" name="add" value="Submit" class="btn btn-success"> --}}
                                    </form>
                                </td>
                                <td class="align-middle">{{ $ds->no_induk_sanggar }}</td>
                                <td class="align-middle">
                                    <h6>{{ $ds->nama }}</h6><small class="text-muted">{{ $ds->status_kepemilikan}}</small>
                                </td>
                                <td class="align-middle">{{ $ds->kecamatan}}</td>
                                <td class="align-middle">{{ $ds->pembinaan_seni}}</td>
                                <td class="align-middle">
                                    @if ($ds->status == 'aktif')
                                        <span class="badge bg-success">{{ $ds->status }}</span>
                                    @endif
                                    @if ($ds->status == 'tidak aktif')
                                        <span class="badge bg-danger">{{ $ds->status }}</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a href="/Dashboard/{{ $ds->id }}" class="btn btn-primary">Detail</a>
                                        <a href="/Dashboard/hapus/{{$ds -> id}}}" 
                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger" 
                                        id="liveToastBtn">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

    @if(auth()->user()->level == 'kepala_desa')
        <div class="col-sm-12">
            <div class="card" style="margin-top: 70px;">
                <div class="card-body">
                <a href="/pengajuan" class="btn btn-primary btn-sm" style="background-color: #5E72E3; margin-bottom: 20px;">
                Tambah Data Pengajuan</a>
                    <table class="table stylish-table no-wrap">
                        <h3>Data Sanggar Aktif</h3>
                        <thead>
                        <tr style="font-weight: bold;">
                            <th class="border-top-0">NIK</th>
                            <th class="border-top-0">Nama Sanggar</th>
                            <th class="border-top-0">Alamat</th>
                            <th class="border-top-0">Jenis Kesenian</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sanggar as $ds)
                            <tr>
                                @if(auth()->user()->level == 'admin')
                                <td class="align-middle">
                                    <form action="{{ route('updateStatusSanggar', $ds->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        @if ($ds->status == 'aktif')
                                        <input class="btn btn-danger btn-sm" type="submit" value="Tidak Aktif" name="status">
                                        @endif

                                        @if ($ds->status == 'tidak aktif')
                                        <input class="btn btn-success btn-sm" type="submit" value="Aktif" name="status">
                                        @endif

                                        {{-- <select name="status" id="status" class="form-control">
                                            <option value="aktif">aktif</option>
                                            <option value="tidak aktif">tidak aktif</option>
                                        </select> --}}
                                        {{-- <input type="submit" name="add" value="Submit" class="btn btn-success"> --}}
                                    </form>
                                </td>
                                @endif
                                <td class="align-middle">{{ $ds->no_induk_sanggar }}</td>
                                <td class="align-middle">
                                    <h6>{{ $ds->nama }}</h6><small class="text-muted">{{ $ds->status_kepemilikan}}</small>
                                </td>
                                <td class="align-middle">{{ $ds->kecamatan}}</td>
                                <td class="align-middle">{{ $ds->pembinaan_seni}}</td>
                                <td class="align-middle">
                                    @if ($ds->status == 'aktif')
                                        <span class="badge bg-success">{{ $ds->status }}</span>
                                    @endif
                                    @if ($ds->status == 'tidak aktif')
                                        <span class="badge bg-danger">{{ $ds->status }}</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a href="/Dashboard/{{ $ds->id }}" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

    @if(auth()->user()->level == 'pemilik_sanggar')
        <div class="col-sm-12">
            <div class="card" style="margin-top: 70px;">
                <div class="card-body">
                    <table class="table stylish-table no-wrap">
                        <h3>Data Sanggar Aktif</h3>
                        <thead>
                        <tr style="font-weight: bold;">
                            <th class="border-top-0">NIK</th>
                            <th class="border-top-0">Nama Sanggar</th>
                            <th class="border-top-0">Alamat</th>
                            <th class="border-top-0">Jenis Kesenian</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sanggar as $ds)
                            <tr>
                                @if(auth()->user()->level == 'admin')
                                <td class="align-middle">
                                    <form action="{{ route('updateStatusSanggar', $ds->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        @if ($ds->status == 'aktif')
                                        <input class="btn btn-danger btn-sm" type="submit" value="Tidak Aktif" name="status">
                                        @endif

                                        @if ($ds->status == 'tidak aktif')
                                        <input class="btn btn-success btn-sm" type="submit" value="Aktif" name="status">
                                        @endif

                                        {{-- <select name="status" id="status" class="form-control">
                                            <option value="aktif">aktif</option>
                                            <option value="tidak aktif">tidak aktif</option>
                                        </select> --}}
                                        {{-- <input type="submit" name="add" value="Submit" class="btn btn-success"> --}}
                                    </form>
                                </td>
                                @endif
                                <td class="align-middle">{{ $ds->no_induk_sanggar }}</td>
                                <td class="align-middle">
                                    <h6>{{ $ds->nama }}</h6><small class="text-muted">{{ $ds->status_kepemilikan}}</small>
                                </td>
                                <td class="align-middle">{{ $ds->kecamatan}}</td>
                                <td class="align-middle">{{ $ds->pembinaan_seni}}</td>
                                <td class="align-middle">
                                    @if ($ds->status == 'aktif')
                                        <span class="badge bg-success">{{ $ds->status }}</span>
                                    @endif
                                    @if ($ds->status == 'tidak aktif')
                                        <span class="badge bg-danger">{{ $ds->status }}</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a href="/Dashboard/{{ $ds->id }}" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <table class="table stylish-table no-wrap">
                        <h3>Data Sanggar Tidak Aktif</h3>
                        <thead>
                        <tr style="font-weight: bold;">
                            @if(auth()->user()->level == 'admin')
                            <th class="border-top-0">Validasi</th>
                            @endif
                            <th class="border-top-0">NIK</th>
                            <th class="border-top-0">Nama Sanggar</th>
                            <th class="border-top-0">Alamat</th>
                            <th class="border-top-0">Jenis Kesenian</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $da)
                            <tr>
                                @if(auth()->user()->level == 'admin')
                                <td class="align-middle">
                                    <form action="{{ route('updateStatusSanggar', $da->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        @if ($da->status == 'aktif')
                                        <input class="btn btn-danger btn-sm" type="submit" value="Tidak Aktif" name="status">
                                        @endif

                                        @if ($da->status == 'tidak aktif')
                                        <input class="btn btn-success btn-sm" type="submit" value="Aktif" name="status">
                                        @endif

                                        {{-- <select name="status" id="status" class="form-control">
                                            <option value="aktif">aktif</option>
                                            <option value="tidak aktif">tidak aktif</option>
                                        </select> --}}
                                        {{-- <input type="submit" name="add" value="Submit" class="btn btn-success"> --}}
                                    </form>
                                </td>
                                @endif
                                <td class="align-middle">{{ $da->no_induk_sanggar }}</td>
                                <td class="align-middle">
                                    <h6>{{ $da->nama }}</h6><small class="text-muted">{{ $da->status_kepemilikan}}</small>
                                </td>
                                <td class="align-middle">{{ $da->kecamatan}}</td>
                                <td class="align-middle">{{ $da->pembinaan_seni}}</td>
                                <td class="align-middle">
                                    @if ($da->status == 'aktif')
                                        <span class="badge bg-success">{{ $da->status }}</span>
                                    @endif
                                    @if ($da->status == 'tidak aktif')
                                        <span class="badge bg-danger">{{ $da->status }}</span>
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <a href="/Dashboard/{{ $da->id }}" class="btn btn-primary">Detail</a>
                                    @if(auth()->user()->level == 'admin')
                                        <a href="/Dashboard/hapus/{{$da -> id}}}" 
                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger" 
                                        id="liveToastBtn">Hapus</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
