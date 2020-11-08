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
                    <button class="btn btn-info" type="button">
                        <h5>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd"
                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </h5>
                    </button>
                </div>
            </div>
        </div>
        {{-- <hr> --}}
        <div class="row mt-5">
            @foreach ($pekerjaan as $item)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-lg">
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