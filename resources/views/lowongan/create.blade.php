@extends('layouts.master')

@section('content')
@include('layouts.include.nav')

<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.js"></script>

<div class="bg vh-100">
    <div class="container">
        <h2 class="pt-4">Buat Lowongan</h2>
        <form class="mt-5 px-5" method="POST">
            <div class="form-row">
                <div class="col-8">
                    <label for="judul">Judul</label>
                    <input id="judul" type="text" class="form-control" placeholder="Judul Lowongan">
                </div>
                <div class="col">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" class="form-control">
                        <option selected>Pilih...</option>
                        @foreach ($data['kategori'] as $key => $kategori)
                        <option value="{{$key}}">{{$kategori}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <label for="deskripsi" class="mt-4">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>

            <label for="keahlian" class="mt-4">Keahlian</label>
            <select id="keahlian" multiple>
                @foreach ($data['keahlian'] as $key => $keahlian)
                <option value="{{$key}}">{{$keahlian}}</option>
                @endforeach
            </select>

            <div class="text-right mt-4">
                <button type="submit" class="btn btn-primary">
                    <span class="font-weight-bold">
                        SIMPAN
                    </span>
                </button>
            </div>
        </form>
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