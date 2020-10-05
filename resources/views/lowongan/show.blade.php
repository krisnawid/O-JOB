@extends('layouts.master')

@section('content')
@include('layouts.include.nav')
<div class="bg min-vh-100">
    <div class="container py-5">
        <div class="card shadow mb-5">
            <div class="card-body px-5 py-4">
                <h3 class="mb-4">Frontend Engineer PT. Indofood, Pasuruan</h3>
                <div class="row">
                    <div class="col">
                        <p class="d-flex align-items-center">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-house-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                            <span class="ml-3">PT. Indofood CBP Sukses Makmur Tbk</span>
                        </p>
                    </div>
                    <div class="col">
                        <p class="d-flex align-items-center">
                            <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            <span class="ml-3">Kabupaten Pasuruan</span>
                        </p>
                    </div>
                </div>
                <p class="d-flex align-items-center">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-folder-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                    </svg>
                    <span class="ml-3">Informatika</span>
                </p>
                <div class="text-right">
                    <button class="btn btn-primary font-weight-bold">LAMAR PEKERJAAN</button>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <h6 class="font-weight-normal"><span class="font-weight-bold mr-2">Diposting Tanggal:</span> Oktober 2,
                    2020
                </h6>
                <hr>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis culpa ratione, quia ipsam
                    repellendus voluptatibus ullam quas eius voluptatum pariatur! Sit sapiente dolorum rem, beatae
                    optio, libero fugit tenetur repellat porro ex atque praesentium nobis illo vel. Sunt, commodi. Eaque
                    rerum dolorem laudantium, ipsum dolorum tempore consequatur ex pariatur officiis culpa voluptates
                    illum nostrum, ea fugiat reiciendis maxime voluptate omnis laborum sapiente voluptas veritatis iure
                    expedita. Vel veritatis similique vero nisi dolore dicta, dolorum modi alias. Animi incidunt
                    consectetur harum.
                </p>
                <p class="font-weight-bold">
                    Kualifikasi:
                </p>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection