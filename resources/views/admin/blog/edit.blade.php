@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8 py-5">
        <!-- Navigasi -->
        <div class="d-flex">
            <a href="{{ route('blog') }}">Blog Berita</a>
            <div class="mx-1"> . </div>
            <a href="">Edit Berita</a>
        </div>

        <h4 class="fw-bold mb-2">Halaman Edit Blog</h4>

        <form action="{{ route('blog.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="">Masukkan Judul Kegiatan</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ old('judul', $artikel->judul) }}">

                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="form-group mb-4">
                <label for="">Pilih Foto Kegiatan</label>
                <input type="hidden" name="old_image" value="{{ $artikel->image }}">
                <div><img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="col-lg-4" alt=""></div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="form-group mb-4">
                <label for="">Artikel Berita</label>'
                <textarea name="desc" id="summernote">
                    {!! $artikel->desc !!}
                </textarea>

                @error('desc')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
        
    </div>
</section>
@endsection