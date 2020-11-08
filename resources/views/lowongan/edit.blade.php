@extends('layouts.master')

@section('content')
@include('layouts.include.nav')

<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.js"></script>

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
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control">
                        @foreach ($data['kategori'] as $key => $kategori)
                        <option value="{{$key}}">{{$kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <h6 class="font-weight-normal"><span class="font-weight-bold mr-2">Diposting Tanggal:</span> Oktober 2,
                    2020
                </h6>
                <hr>
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi"
                    class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus eaque laudantium numquam voluptatem odio. Repudiandae, enim earum amet debitis molestiae veritatis pariatur. Voluptate, sit ipsam.</textarea>
                <p class="font-weight-bold mt-4">
                    Kualifikasi:
                </p>
                <select id="keahlian" multiple>
                    @foreach ($data['keahlian'] as $key => $keahlian)
                    <option value="{{$key}}">{{$keahlian}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="text-right mt-4">
            <button type="submit" class="btn btn-primary">
                <span class="font-weight-bold">
                    SIMPAN
                </span>
            </button>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#deskripsi' ), {
            removePlugins: [ 'BlockQuote', 'MediaEmbed', 'Table', 'ImageUpload', 'tableColumn' ],
            placeholder: "Deskripsi Lowongan...",
            // toolbar: ['Heading', 'Undo', 'Redo', '|', 'Bold', 'Italic', '|', 'bulletedList', 'numberedList', '|', 'Indent', 'Link']
        } )
        .catch( error => {
            console.error( error );
        } );
    
    new SlimSelect({
        select: '#keahlian',
        placeholder: 'Pilih keahlian yang harus dikuasai'
    })

</script>
@endsection