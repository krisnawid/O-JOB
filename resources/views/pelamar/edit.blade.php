@extends('layouts.master')
@include('layouts.include.nav')

@section('content')
<div class="bg-profile min-vh-100">
    <div class="container py-5">
        <form action="#" class="mb-0">
            <div class="row align-items-stretch">
                <div class="col-3">
                    <div class="text-center">
                        <img src="https://www.iconfinder.com/data/icons/linecon/512/photo-512.png" alt="foto profil"
                            height="150">
                    </div>
                    <hr>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Pilih Foto</label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-lg shadow mb-3">
                        <div class="card-body pb-4">
                            <h4>Edit Profil</h4>
                            <hr>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="John Doe">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="email@email.com
                                    ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="notelp">No. Telp</label>
                                        <input type="text" class="form-control" id="notelp" name="website"
                                            value="08123456789">
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="form-group">
                                <label for="deskripsi">Tentang Saya</label>
                                <textarea class="form-control" id="deskripsi" rows="3"
                                    name="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit consequatur alias porro. Quas veritatis sed provident, rerum non consectetur nam dolor nostrum atque dicta minima fugiat accusantium odio? Ipsam, molestiae.</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-lg shadow">
                        <div class="card-body pb-4">
                            <h6>Keamanan Akun</h6>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="email@email.com">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="passwordlama">Password Lama</label>
                                        <input type="passwordlama" class="form-control" id="passwordlama"
                                            name="passwordlama">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="passwordbaru">Password Baru</label>
                                        <input type="passwordbaru" class="form-control" id="passwordbaru"
                                            name="passwordbaru">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="konfirmasiPassword">Konfirmasi Password</label>
                                        <input type="konfirmasiPassword" class="form-control" id="konfirmasiPassword"
                                            name="konfirmasiPassword">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-light mr-4">Batal</button>
                        <button type="submit" class="btn btn-lg btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection