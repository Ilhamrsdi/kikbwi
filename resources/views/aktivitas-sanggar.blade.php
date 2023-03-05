@extends('layout.main')

@section('content')

<div class="container pt-3" style="background-color: #ffff; margin-top: 70px;">
    @if(auth()->user()->level == 'pemilik_sanggar')
    <div class="my-3">
        <a href="aktivitas-sanggar-create" class="btn btn-primary btn-sm" style="background-color: #5E72E3;">Tambah Aktivitas</a>
    </div>
    @endif
    <div class="col-12">
        <div class="row">
            @foreach ($aktivitassanggars as $item)
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-3">
                <div class="card" style="height: 25rem;">
                    <img src="{{asset(''.$item->photo)}}" class="card-img-top" height="180px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $item->nm_sanggar }}</h5>
                        <p class="card-text" style="text-align: justify;">{{ substr($item->kegiatan, 0, 100) }}</p>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                            <a><i class="bi bi-calendar2-check mt-4"></i>
                                </i> {{ $item->tanggal }}</a>
                        </small>
                    </div>
                </div>
                <br>
            </div>

            @endforeach
        </div>
    </div>
</div>


@endsection