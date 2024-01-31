<!-- Navbar -->
<nav
    class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 {{ Request::segment(1) == '' ? '' : 'bg-white shadow color-black' }}">

    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icons/Logo BEM KM UDINUS.png') }}" height="55" width="55" alt="">
        </a>

        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/icons/Logo BEM Arus Sinergitas.png') }}" height="75" width="75" alt="">
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <i class="fas fa-bars"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kementerian">Kabinet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/foto">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/calendar">Kalender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://linktr.ee/bemkmudinus">Kontak</a>
                </li>
            </ul>


            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control" placeholder="Cari Disini" aria-label="Search" />
                <button data-mdb-ripple-init class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark">
                    Search
                </button>
            </form>
        </div>
    </div>
</nav>
<!-- Navbar -->