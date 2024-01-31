@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">
        <h3 class="fw-bold mb-2">Halaman Dashboard Admin</h3>
        <p>Selamat Datang Di Halaman Dashboard Admin</p>

        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/berita.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blog Berita</h5>
                        <p class="card-text">Berita Seputar Mahasiswa Universitas Dian Nuswantoro</p>
                        <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{ asset('assets/icons/gallery.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Foto Kegiatan BEM KM</h5>
                        <p class="card-text">Atur dan Kelola Kegiatan BEM KM UDINUS</p>
                        <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection