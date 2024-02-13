<style>
    * {
        font-family: "Poppins", sans-serif;
    }

    .btn-navigation {
        background-color: white;
        font-size: 14px;
        font-weight: 600;
        text-align: center;
    }

    .btn-navigation:hover {
        background: lightgray;
        transform: translate(5px 4px);
    }

    .navbar {
        font-weight: bold;
        background-color: #FFB400;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        top: 35px;
        background-color: #f9f9f9;
        min-width: 120px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 5%;

    }

    .dropdown-content a {
        color: dimgray;
        padding: 12px 17px;
        text-decoration: none;
        display: block;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:active .dropdown-content {
        display: block;
    }

    .dropdown-content a:hover {
        background-color: lightgray;
        border-radius: 5%;
    }
</style>

<nav class="navbar navbar-expand-sm navbar-light shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarID"
            aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarID">
            @if (request()->is('admin/*') || request()->is('admin'))
                @role('admin')
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                        aria-controls="offcanvasExample">
                        <i class="bi bi-list fs-5"></i>
                    </button>
                @endrole
            @endif
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Mengenai Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile-korporat">Profile
                                Korporat</a>
                        </li>

                        <li><a class="dropdown-item" href="/carta-organisasi">Carta Organisasi</a>
                        </li>
                        <li><a class="dropdown-item" href="/konsep-peranan">Konsep
                                & Peranan</a>
                        </li>
                        <li><a class="dropdown-item" href="/piagam-pelanggan">Piagam Pelanggan</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Info Pelawat
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/merancang-lawatan">Merancang
                                Lawatan</a></li>
                        <li><a class="dropdown-item" href="/waktu-operasi">Waktu
                                Operasi</a></li>
                        <li><a class="dropdown-item" href="/bayaran-masuk">Bayaran
                                Masuk</a></li>
                        <li><a class="dropdown-item" href="/galeri-pameran">Galeri
                                & Pameran</a>
                        </li>
                        <li><a class="dropdown-item" href="/soalan-lazim">Soalan
                                Lazim</a></li>
                        <li><a class="dropdown-item" href="/direktori-pegawai">Direktori
                                Pegawai</a></li>
                        <li><a class="dropdown-item" href="/garis-panduan">Garis
                                Panduan</a></li>
                        <li><a class="dropdown-item" href="/borang-tempahan-maklumbalas">Borang
                                Tempahan & Maklumbalas</a></li>
                        <li><a class="dropdown-item" href="/pelan-pembangunan">Pelan Bangunan Pusat Sains Negara</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Program
                    </a>
                    <ul class="dropdown-menu">
                        <li><a id="" class="dropdown-item" href="#">Program Awam</a></li>
                        <li><a class="dropdown-item" href="#">Program Sekolah</a></li>
                        <li><a class="dropdown-item" href="#">Program Jangkau Luar</a></li>
                        <li><a class="dropdown-item" href="#">Program STI</a></li>
                        <li><a class="dropdown-item" href="#">Program Fasilitator</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hubungi Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Pusat Sains Negara Kuala Lumpur</a></li>
                        <li><a class="dropdown-item" href="#">Pusat Sains Negara Cawangan Wilayah Utara(Kedah)</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/galeri-pameran">Galeri &
                        Pameran</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto gap-3">
                <li class="nav-item">
                    <a name="" id="" class="btn btn-navigation" href="/psn/belitiket/borangTiket.php"
                        href="#" role="button">BELI TIKET</a>
                </li>

                <li class="nav-item dropdown">
                    @if (Route::has('login'))
                        @auth
                            <a class="btn btn-navigation align-content-center" href="#" role="button">
                                <i class="bi bi-person-circle"></i>
                                Hai {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-content">
                                @hasrole('admin')
                                    <a class="dropdown-item" href="{{ route('admin.formTo') }}">Admin</a>
                                @endhasrole
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                                <a href="#" class="dropdown-item"
                                    onclick="document.getElementById('logout-form').submit()">Log Keluar</a>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                </ul>
            @else
                <div class="dropdown">
                    <a name="" id="" class="btn btn-navigation" href="/access" role="button">Log
                        Masuk</a>
                </div>
            @endauth
            @endif
            </li>

            </ul>
        </div>
    </div>
</nav>
