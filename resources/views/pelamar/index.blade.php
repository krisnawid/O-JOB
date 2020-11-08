@extends('layouts.master')
@include('layouts.include.nav')

@section('content')
<div class="bg-profile min-vh-100 pb-5">
    <div class="container pt-5">
        <div class="row align-items-stretch">
            <div class="col-3">
                <div class="text-center">
                    <img src="https://www.iconfinder.com/data/icons/linecon/512/photo-512.png" alt="foto profil"
                        height="150">

                </div>
                <h5 class="mt-4 mb-3">John Doe</h5>
                <hr>
                <p class="d-flex align-items-center">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mailbox2" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12 3H4a4 4 0 0 0-4 4v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7a4 4 0 0 0-4-4zM8 7a3.99 3.99 0 0 0-1.354-3H12a3 3 0 0 1 3 3v6H8V7zm1 1.5h2.793l.853.854A.5.5 0 0 0 13 9.5h1a.5.5 0 0 0 .5-.5V8a.5.5 0 0 0-.5-.5H9v1zM4.585 7.157C4.836 7.264 5 7.334 5 7a1 1 0 0 0-2 0c0 .334.164.264.415.157C3.58 7.087 3.782 7 4 7c.218 0 .42.086.585.157z" />
                    </svg>
                    <span class="ml-2">email@email.com</span>
                </p>
                <p class="d-flex align-items-center">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                    </svg>
                    <span class="ml-2">08123456789</span>
                </p>
            </div>
            <div class="col">
                <div class="card rounded-lg shadow">
                    <div class="card-body pb-4">
                        <h6>Tentang Saya</h6>
                        <hr>
                        <p>
                            Saya perusahaan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis
                            consectetur culpa voluptates sequi, excepturi iusto sint ea alias? Obcaecati sed possimus
                            unde excepturi labore voluptatem iure, nostrum ducimus adipisci eveniet? Cum laboriosam
                            magni fuga culpa cupiditate dignissimos, excepturi atque, obcaecati fugit incidunt quidem
                            perspiciatis iure delectus, veniam rem accusamus eaque.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
                    <h4>Keahlian</h4>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                        data-target="#addKeahlian">
                        <h4 class="mb-0">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                        </h4>
                    </button>
                    <div class="modal fade" id="addKeahlian" tabindex="-1" aria-labelledby="addKeahlian"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addKeahlian">Tambah Keahlian</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="keahlian">Nama Keahlian</label>
                                            <select name="keahlian" id="keahlian" class="form-control">

                                                @foreach ($data['keahlian'] as $keahlian)
                                                <option>{{$keahlian}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <ul class="list-group list-group-flush">
                        @foreach ($data['keahlian'] as $keahlian)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0">{{$keahlian}}</p>
                                <button type="button" class="btn btn-outline-danger btn-sm">
                                    <h6 class="mb-0">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </h6>
                                </button>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
                    <h4>Portofolio</h4>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                        data-target="#addPortofolio">
                        <h4 class="mb-0">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                        </h4>
                    </button>
                    <div class="modal fade" id="addPortofolio" tabindex="-1" aria-labelledby="addPortofolio"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addPortofolio">Tambah Portofolio</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="judul">Judul Portofolio</label>
                                            <input type="text" name="judul" id="judul" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="web">Alamat URL</label>
                                            <input type="text" name="web" id="web" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi Portofolio</label>
                                            <textarea type="text" name="deskripsi" id="deskripsi"
                                                class="form-control"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <ul class="list-group list-group-flush">
                        @foreach ($data['portofolio'] as $portofolio)
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5>{{$portofolio['judul']}}</h5>
                                <button type="button" class="btn btn-outline-danger btn-sm">
                                    <h6 class="mb-0">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </h6>
                                </button>
                            </div>
                            <a href="#" class="text-muted small">{{$portofolio['web']}}</a>
                            <p class="mt-3">
                                {{$portofolio['deskripsi']}}
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
                {{-- <div class="small text-muted text-center">Belum ada lowongan.</div> --}}
            </div>
        </div>
    </div>
</div>
@endsection