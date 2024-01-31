@extends('layouts.layouts')

@section('content')
<section id="hero" class="px-0">
    <div class="container text-center text-white">
        <div class="hero-title">
            <div class="hero-text">Selamat Datang <br> Di Website Resmi</div>
            <h4>Badan Eksekutif Mahasiswa Keluarga Mahasiswa <br>
                Universitas Dian Nuswantoro </h4>
        </div>
    </div>
</section>

<section id="naungan" style="margin-top: -40px;">
    <div class="container col-xxl-12">
        <div class="row justify-content-evenly">
            <div class="col-lg-4 mb-3">
                <div class="bg-white rounded-3 p-3 shadow mb-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h5>Organisasi Mahasiswa <br> Universitas Dian Nuswantoro</h5>
                    </div>
                    <img src="{{ asset('assets/icons/hero-diskusi.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="bg-white rounded-3 p-3 shadow mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Unit Kegiatan Mahasiswa <br> Universitas Dian Nuswantoro</h5>
                    </div>
                    <img src="{{ asset('assets/icons/unit-pembelajaran.png') }}" height="55" width="55" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- berita -->
<section id="berita" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita BEM KM UDINUS</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            @foreach ($artikels as $item)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/artikel/' . $item->image) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="mb-3 text-secondary">{{ $item->created_at }}</p>
                        <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                        <p class="text-secondary">#bemkmudinus</p>
                        <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="footer-berita text-center">
            <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>
<!-- berita -->

<!-- Join -->
<section id="join" class="py-5">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="strip me-2"></div>
                    <h5>Info BEM KM UDINUS</h5>
                </div>
                <h1 class="fw-bold mb-3">BEM KM UDINUS 2023 / 2024
                    Kabinet Arus Sinergitas
                    Selaras Bermakna Nyata</h1>
                <p class="mb-3">BEM KM UDINUS Merupakan
                    Badan Eksekutif Mahasiswa Keluarga Mahasiswa
                    Universitas Dian Nuswantoro Semarang
                    Dan Kabinet Arus Sinergitas Adalah Nama Kabinet
                    Untuk Anggota BEM KM UDINUS Tahun Periode
                    2023 - 2024</p>
                <a class="btn btn-outline-danger" href="https://linktr.ee/bemkmudinus">Info BEM KM</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/Group 1.png') }}" class="img-fluid py-4" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Join -->

<!-- Video -->
<section id="video" class="py-5">
    <div class="container py-5">
        <div class="text-center">
            <iframe width="100%" height="615" src="https://www.youtube.com/embed/rm23e2F4ipI?si=WIKCa6x1Op7WJ0-5"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</section>
<!-- Video -->

<section id="video_youtube" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">After Movie Kegiatan BEM KM UDINUS</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
            <div class="col">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/d-JtqYxYbhQ?si=HnfJIqxHGEsDAPAa"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/jCGNuieB3Qo?si=dFNC5sLiUR0rOppv"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/cytyVQlfkkI?si=evsZocZouniEnQ9p"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="text-center">
            <a href="https://www.youtube.com/@bemkmudinusofficial8044" class="btn btn-outline-danger">Video Lainnya</a>
        </div>
    </div>
</section>

<section id="foto" class="section-foto parallax">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="strip-putih me-2"></div>
                <h3 class="fw-bold text-white">Kegiatan BEM KM UDINUS</h3>
            </div>
            <div class="text-center">
                <a href="/foto" class="btn btn-outline-danger btn-outline-white">View More</a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($photos as $photo)
            <div class="col">
                <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
                    <img src="{{ asset('storage/photo/' . $photo->image) }}" class="image-fluid" alt="">
                </a>
                <p class="mt-3">{{ $photo->judul }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Kementerian -->
<section id="kementerian">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('assets/icons/Logo BEM Arus Sinergitas.png') }}" class="img-fluid " width="100%"
                    height="200px" alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="strip me-2"></div>
                    <h3><b>Kabinet Arus Sinergitas</b></h3>
                </div>

                <h1 class="fw-bold mb-3">Filosofi Warna</h1>
                <h5 class="fw-bold mb-3">Biru</h5>
                <p class="mb-3">Biru Seringkala diasosiasikan dengan suasana yang tenang dan damai. Warna ini dapat
                    menggambarkan kestabilan dan keteduhan, yang merupakan karakteristik yang diinginkan dalam
                    kepengurusan BEM KM Universitas Dian Nuswantoro Kabinet Arus SInergitas Periode 2023 / 2024</p>

                <h5 class="fw-bold mb-3">Emas</h5>
                <p class="mb-3">Emas dapat menggambarkan kombinasi antara prestise, tindakan nyata, keberanian, dan
                    dampak positif. Ini bisa menjadi pesan kuat yang menggambarkan semangat dan komitmen kabinet Arus
                    Sinergitas BEM KM Universitas Dian Nuswantoro untuk membuat perbedaan yang positif dalam lingkup
                    Keluarga Mahasiswa Universitas Dian Nuswantoro</p>

                <h1 class="fw-bold mb-3">Makna Logo</h1>
                <h5 class="fw-bold mb-3">Trisula</h5>
                <p class="mb-3">Menggambarkan visi BEM KM UDINUS untuk menjadi agen perubahan yang aktif dalam
                    menerapkan prinsip - prinsip tridharma perguruan tinggi dengan kekuatan, komitmen, dan semangat yang
                    kuat untuk meningkatkan kualitas pendidikan, penelitian, dan pengabdian kepada masyarakat di
                    lingkungan kampus</p>

                <h5 class="fw-bold mb-3">Ombak</h5>
                <p class="mb-3">Menggambarkan bahwa perubahan positif menuju sinergitas membutuhkan kesadaran terhadap
                    perubahan, kemauan untuk berkembang, serta juga kemampuan untuk berkolaborasi dengan orang lain.
                    Suatu pesan positif yang memotivasi individu dan organisasi untuk merangkul perubahan, menuju
                    sinergi, dan mencapai tujuan yang lebih besar bersama- sama</p>
            </div>
        </div>

        <div class="text-center py-5">
            <h2 class="fw-bold">Struktur Organisasi <br> BEM KM UDINUS</h2>
        </div>
        <img src="{{ asset('assets/images/Group 2 (5).png') }}" class="img-fluid mb-8" width="100%" height="500px"
            alt="">

        <h2 class="text-center fw-bold">Kementerian Kabinet <br> BEM KM UDINUS</h2>

        <img src="{{ asset('assets/logo/Group 2 (1).png') }}" class="img-fluid" width="100%" height="500px" alt="">
    </div>

</section>
@endsection