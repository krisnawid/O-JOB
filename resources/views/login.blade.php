@extends('layouts.master')

@section('content')
<div class="bg-login vh-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center h-100">
                <img src="{{asset('img/illust_login.png')}}" alt="Ilustrasi Login" class="img-fluid px-3">
            </div>
            <div class="col-md-6 col-sm-12 px-5 d-flex justify-content-center align-items-center h-100">
                <div class="w-100">
                    <h1 class="text-center font-weight-bolder mb-3">
                        <img src="{{asset('img/logo.png')}}" alt="Logo" width="50">
                        <span class="ml-2">O-Job</span>
                    </h1>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" class="px-5 py-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="font-weight-bold">
                                            LOGIN
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <img src="{{ asset('img/abu2.png') }}" alt="wow"> --}}
@endsection