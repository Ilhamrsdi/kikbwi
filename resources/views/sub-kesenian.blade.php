@extends('layout.main')

@section('content')
    <div class="card" style="margin-top: 70px;">
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped table-responsive" style="text-align:center;">
                <a href="/sub-seni-create" class="btn btn-primary btn-sm"
                    style="background-color: #5E72E3; margin-bottom: 20px;">
                    Tambah Sub Kesenian</a>
                <tr>
                    <th>Id</th>
                    <th>Kode Jenis Kesenian</th>
                    <th>Kode Sub Kesenian</th>
                    <th>Sub Kesenian</th>
                    <th>Action</th>
                </tr>

                @foreach ($sub_kesenians as $sk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sk->id_jenis_kesenian }}</td>
                        <td>{{ $sk->id }}</td>
                        <td>{{ $sk->nama_subkesenian }}</td>
                        <td>
                            {{-- <a href="/#" class="btn btn-primary btn-sm" style="background-color: #5E72E3;">Edit</a> --}}
                            <a href="/sub-seni/hapus/{{ $sk->id }}}"
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
