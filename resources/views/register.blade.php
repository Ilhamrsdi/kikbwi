@extends('layout.main')

@section('content')
<div class="container fw-bold" style="background-color: #ffff; margin-top: 100px;">
    <div class="col-10 m-auto">
        <form method="post" action="{{ url('do-register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="form-group form-floating mb-3" style="font-size: 16px">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                <label for="floatingEmail">Alamat Email</label>
            </div>
            <div class="form-group form-floating mb-3" style="font-size: 16px">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
                <label for="floatingName">Nama Pengguna</label>
            </div>

            <div class="form-group mb-3">
                <select value="[admin/pemilik_sanggar/kepala_desa]" class="form-control" name="level" id="level">
                    <option value="default">Status Pengguna</option>
                    <option value="admin">Admin Dinas</option>
                    <option value="pemilik_sanggar">Pemilik Sanggar</option>
                    <option value="kepala_desa">Kepala Desa</option>
                </select>
            </div>
            <div class="form-group form-floating mb-3" style="font-size: 16px">
                <input type="password" name="password" class="form-control"/>
                <label for="floatingPassword">Kata Sandi</label>
            </div>
            <div class="form-group form-floating mb-3" style="font-size: 16px">
                <input type="password" name="confirm_password" class="form-control"/>
                <label for="floatingConfirmPassword">Konfirmasi Kata Sandi</label>
            </div> 
            <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color: #5e72e3; font-size: 16px">Tambah Pengguna</button>
        </form>
    </div>
</div>
@endsection