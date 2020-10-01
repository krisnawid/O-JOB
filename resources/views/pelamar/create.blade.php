@extends('layouts.master')

@section('content')
<div class="bg-login vh-100">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
        <h1>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
        </h1>
        <h4 class="mb-4">Daftar Sebagai Pelamar</h4>
        <div class="card w-75 shadow">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6 px-5">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="notelp">No. Telp</label>
                                <input type="text" name="notelp" id="notelp" class="form-control">
                            </div>
                            <img src="{{asset('img/illust_signup.png')}}" alt="Ilustrasi Signup"
                                class="img-fluid px-3 mt-3">
                        </div>
                        <div class="col-6 px-5">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto">
                                    <label class="custom-file-label" for="foto">Pilih File</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-5">
                                <span class="font-weight-bold">
                                    DAFTAR
                                </span>
                            </button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection