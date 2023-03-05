@extends('layout.Login.login-lay');

@section('content')
<form class="container py-4 h-100 shadow" style="background-color: #ffff; border-radius: 20px" method="post" action="{{ url('do-login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <img class="mb-4 mt-4" src="{{ asset('images/logodinas.png') }}" alt="logo" width="150" height="100">

    <h1 class="h3 mb-3 fw-normal fw-bold" style="font-size: 16px">MASUK</h1>

    @include('layout.Login.massages')

    <div class="form-group form-floating mb-3 mr-2" style="font-size: 16px;">
        <input type="email" name="email" value="{{old('email')}}" class="form-control" />
        <label for="floatingName">Masukan Email</label>
    </div>

    <div class="form-group form-floating mb-3" style="font-size: 16px;">
        <input type="password" name="password" class="form-control" />
        <label for="floatingPassword">Masukan Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color: #5e72e3; font-size: 16px;">Masuk</button>
</form>
@endsection
