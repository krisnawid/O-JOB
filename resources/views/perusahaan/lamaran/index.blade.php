@extends('layouts.master')

@section('content')
@include('layouts.include.nav')
<div class="bg-lamaran-perusahaan min-vh-100">
    <div class="container py-5">
        <h3 class="text-center mb-5">List Lamaran Perusahaan</h3>
        @foreach ($pelamar as $item)
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5>{{$item['nama']}}</h5>
                <hr>
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-light btn-lg font-weight-bold" style="font-size: 0.8rem">
                        LIHAT PROFIL
                    </a>
                    <div>
                        <button class="btn btn-success btn-lg font-weight-bold mr-3"
                            style="font-size: 0.8rem">TERIMA</button>
                        <button class="btn btn-danger btn-lg font-weight-bold" style="font-size: 0.8rem">TOLAK</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection