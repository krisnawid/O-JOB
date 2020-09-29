@extends('layouts.master')

@section('content')
@include('layouts.include.nav')

<div class="bg min-vh-100">
    <div class="container">
        <h2 class="text-center pt-5 font-weight-bolder">Cari Lowongan Pekerjaan</h2>
        <div class="px-5 mt-4">
            <div class="input-group">
                <input type="text" class="form-control form-control-lg" id="search"
                    placeholder="Cari berdasarkan pekerjaan, perusahaan, atau keahlian">
                <div class="input-group-append">
                    <button class="btn btn-info" type="button">Cari</button>
                </div>
            </div>
        </div>
        {{-- <hr> --}}
        <div class="row mt-5">
            @foreach ($pekerjaan as $item)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5>{{$item['judul']}}</h5>
                        <p>{{$item['perusahaan']}}</p>
                        <p>{{$item['alamat']}}</p>
                        <div class="text-right">
                            <a href="#" class="btn btn-light font-weight-bold stretched-link"
                                style="font-size: 0.8rem">LIHAT</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection