@extends('layout.main')

@section('content')

<div class="card" style="margin-top: 70px;">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped table-responsive" style="text-align:center;">
            <a href="/kecamatan-create" class="btn btn-primary btn-sm" style="background-color: #5E72E3; margin-bottom: 20px;">
            Tambah Data Kecamatan</a>
            <tr>
                <th>Kode Kecamatan</th>
                <th>Nama Kecamatan</th>
                <th>Action</th>
            </tr>

            @foreach($kecamatans as $kc)
            <tr>
                <td>{{ $kc->kode_kecamatan }}</td>
                <td>{{ $kc->nama_kecamatan }}</td>
                <td>
                    {{-- <a href="/kecamatan-edit/{{ $kc->id }}" class="btn btn-primary btn-sm" style="background-color: #5E72E3;">Edit</a> --}}
                    <a href="/kecamatan/hapus/{{$kc ->id }}" 
                    onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm" 
                    id="liveToastBtn">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>
@endsection