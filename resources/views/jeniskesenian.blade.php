@extends('layout.main')

@section('content')
    <div class="card" style="margin-top: 70px;">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped table-responsive" style="text-align:center;">
                <a href="/jenis-seni-create" class="btn btn-primary btn-sm"
                    style="background-color: #5E72E3; margin-bottom: 20px;">
                    Tambah Data Seni</a>
                <tr>
                    <th>Id</th>
                    <th>Kode Seni</th>
                    <th>Nama Kesenian</th>
                    <th>Action</th>
                </tr>

                @foreach ($jenis_kesenians as $js)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $js->id }}</td>
                        <td>{{ $js->nama_jnskesenian }}</td>
                        <td>
                            {{-- <a href="/#" class="btn btn-primary btn-sm" style="background-color: #5E72E3;">Edit</a> --}}
                            <a href="/jenis-seni/hapus/{{ $js->id }}}"
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
