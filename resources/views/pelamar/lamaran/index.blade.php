@extends('layouts.master')

@section('content')
@include('layouts.include.nav')
<div class="bg-lamaran-perusahaan min-vh-100">
    <div class="container py-5">
        <h3 class="text-center mb-5">List Lamaran Pelamar</h3>
        @foreach ($lamaran as $item)
        <div class="card shadow-sm mb-4 @if (strtolower($item['status']) == 'pending')
                border-warning
            @elseif(strtolower($item['status']) == 'diterima')
                border-success
            @else
                border-danger
            @endif">
            <div class=" card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>{{$item['judul']}}</h5>
                    <h6>Status: {{$item['status']}}</h6>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="font-weight-normal">{{$item['perusahaan']}}</h5>
                    <button class="btn btn-light btn-lg font-weight-bold" style="font-size: 0.8rem">
                        DETAIL
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection