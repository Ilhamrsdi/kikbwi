@extends('layout.main')

@section('content')

<div class="card" style="margin-top: 70px;">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped table-responsive" 
        style="text-align:center;">
            <a href="/Register" class="btn btn-primary btn-sm" style="background-color: #5E72E3; margin-bottom: 20px;">
            Tambah Pengguna</a>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
            </tr>

            @foreach($users as $us)
            <tr style="text-align: center;">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $us->name }}</td>
                <td>{{ $us->email }}</td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>
</div>
@endsection