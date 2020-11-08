@extends('layouts.master')
@include('layouts.include.nav')
@section('content')
<div class="bg-profile min-vh-100">
    <div class="container pt-5">
        <div class="row align-items-stretch">
            <div class="col-3">
                <div class="text-center">
                    <img src="https://2.bp.blogspot.com/-47EoU2cz1cg/UNSDP2ESFEI/AAAAAAAAISU/xwkN6d7TWHo/s320/LOGO+POLITEKNIK+NEGERI+MALANG.png"
                        alt="logo perusahaan" height="150">
                </div>
                <h5 class="mt-4 mb-3">PT Politeknik Negeri Malang</h5>
                <hr>
                <p class="d-flex align-items-center">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                    <span class="ml-2">Jl. Raya Raya Hayo Dimana</span>
                </p>
                <p class="d-flex align-items-center">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4H2.255a7.025 7.025 0 0 1 3.072-2.472 6.7 6.7 0 0 0-.597.933c-.247.464-.462.98-.64 1.539zm-.582 3.5h-2.49c.062-.89.291-1.733.656-2.5H3.82a13.652 13.652 0 0 0-.312 2.5zM4.847 5H7.5v2.5H4.51A12.5 12.5 0 0 1 4.846 5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5H7.5V11H4.847a12.5 12.5 0 0 1-.338-2.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12H7.5v2.923c-.67-.204-1.335-.82-1.887-1.855A7.97 7.97 0 0 1 5.145 12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11H1.674a6.958 6.958 0 0 1-.656-2.5h2.49c.03.877.138 1.718.312 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12h2.355a7.967 7.967 0 0 1-.468 1.068c-.552 1.035-1.218 1.65-1.887 1.855V12zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5h-2.49A13.65 13.65 0 0 0 12.18 5h2.146c.365.767.594 1.61.656 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z" />
                    </svg>
                    <span class="ml-2">alamat web</span>
                </p>
            </div>
            <div class="col">
                <div class="card rounded-lg shadow">
                    <div class="card-body pb-4">
                        <h6>Deskripsi Perusahaan</h6>
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
                <h4 class="mt-5 mb-4">Lowongan</h4>
                <div class="row">
                    @foreach ($pekerjaan as $item)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card rounded-lg">
                            <div class="card-body">
                                <h5>{{$item['judul']}}</h5>
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
                {{-- <div class="small text-muted text-center">Belum ada lowongan.</div> --}}
            </div>
        </div>
    </div>
</div>
@endsection