<head>
    <link rel="stylesheet" href="{{ url('assets/css/header.css') }}">
    <link href="{{ url('assets/css/fontawesome-free-6.5.1-web/css/all.min.css') }}" crossorigin="anonymous"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<div class="container-fluid"
    style="background-image: url('{{ url('assets/images/header-bg.jpg') }}') ;
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center justify-items-center">
            <div class="col-md-4 col-12 text-center">
                <a href="/home"><img src="{{ url('assets/images/logopsn.png') }}" width="350" height="150"
                        alt=""></a>
            </div>
            <div class="col-md-4 col-12 p-2 text-center" style="color:white;">
                <h2><strong>Pusat Sains Negara</strong></h2>
                <h6><strong>Laman Portal Rasmi</strong></h6>
                <h6><strong>Kementerian, Sains, Teknologi dan Inovasi</strong></h6>
            </div>
            <div class="col-md-4 col-12 text-center">
                <form>
                    <div class="search-container">
                        <input type="text" name="search" placeholder="Cari..." class="search-input">
                        <a href="#" class="search-btn">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
