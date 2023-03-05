@extends('layout.main')

@section('content')

<div class="card" style="margin-top: 70px;">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped table-responsive" style="text-align:center;">
            @if(auth()->user()->level == 'kepala_desa')
            <a href="/pengajuan" class="btn btn-primary btn-sm" style="background-color: #5E72E3; margin-bottom: 20px;">
            Tambah Data Pengajuan</a>
            @endif
            <tr>
                <th>No</th>
                @if(auth()->user()->level == 'admin')
                <th>Action</th>
                @endif
                <th>Tanggal</th>
                <th>Nama</th>
                <th>No Induk Sanggar</th>
                <th>Desa/Kelurahan</th>
                <th>Kecamatan</th>
                <th>Pembinaan Seni</th>
                <th>Status Kepemilikan</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            @foreach($sanggar as $ds)
            <tr>
                <td>{{ $loop->iteration }}</td>
                @if(auth()->user()->level == 'admin')
                <td>
                    <form action="{{ route('updateStatus', $ds->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        @if ($ds->status == 'aktif')
                        <input class="btn btn-danger btn-sm" type="submit" value="Tidak Aktif" name="status">
                        @endif

                        @if ($ds->status == 'tidak aktif')
                        <input class="btn btn-success btn-sm" type="submit" value="Aktif" name="status">
                        @endif

                        @if ($ds->status == 'menunggu')
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
                <td>{{ $ds->created_at}}</td>
                <td>{{ $ds->nama }}</td>
                <td>{{ $ds->no_induk_sanggar }}</td>
                <td>{{ $ds->desa}}</td>
                <td>{{ $ds->kecamatan}}</td>
                <td>{{ $ds->pembinaan_seni}}</td>
                <td>{{ $ds->status_kepemilikan}}</td>
                <td>
                    @if ($ds->status == 'aktif')
                    <span class="badge bg-success">{{ $ds->status }}</span>
                    @endif
                    @if ($ds->status == 'tidak aktif')
                    <span class="badge bg-danger">{{ $ds->status }}</span>
                    @endif
                    @if ($ds->status == 'menunggu')
                    <span class="badge bg-warning">{{ $ds->status }}</span>
                    @endif
                </td>
                <td>
                    <a href="/Dashboard/{{ $ds->id }}" class="btn btn-primary btn-sm" style="background-color: #5E72E3;">Detail</a>
                    <br>
                    <br>
                    @if(auth()->user()->level == 'admin')
                    <a href="/Dashboard/hapus/{{$ds -> id}}}" 
                    onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm" 
                    id="liveToastBtn">Hapus</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
        {{ $sanggar->links('pagination::bootstrap-4')}}
    </div>
</div>
</div>
@endsection