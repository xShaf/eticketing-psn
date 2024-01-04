@extends('layouts.index')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        body {
            background-color: #0D2C54;
        }

        .kotak {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .naik {
            animation: fades-up 0.5s;
        }

        @keyframes fades-up {
            0% {
                opacity: 0;
                transform: translateY(-30px) scale(0.9);
            }

            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
    </style>

    <div class="container gap-4 bg-light kotak naik" style="background-color:white;">
        <h3 class="mb-4">Soalan Lazim</h3>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <span style="color:blue;">Apakah waktu operasi PSN?</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Sabtu hingga Khamis (9:00 pagi – 4:30 petang).<br>
                        Tutup pada hari Jumaat.<br>
                        Kaunter tiket hanya beroperasi sehingga 4:00 petang.<br>
                        Pengumuman penutupan pada hari perayaan akan dimaklumkan dari semasa ke semasa.<br>
                        Sila lihat <a href="/waktu-operasi">Waktu Operasi.</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span style="color:blue;">Adakah PSN dibuka sewaktu musim cuti sekolah dan cuti umum?</span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ya, dan tutup pada Hari Raya Aidilfitri.(*akan berubah dari masa kesemasa.)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span style="color:blue;">Di manakah saya boleh membeli tiket masuk PSN?</span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Tiket boleh dibeli di kaunter tiket yang terletak di pintu masuk bahagian hadapan PSN
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span style="color:blue;">Perlukah pelawat membuat tempahan awal?</span>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ya, hanya bagi rombongan sekolah sahaja.<br>
                        Sila <a href="#">hubungi kami secara terus</a> untuk membuat tempahan awal.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <span style="color:blue;">Adakah bayi dikenakan bayaran masuk?</span>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Tidak.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <span style="color:blue;">Apakah had umur bagi kanak-kanak yang memerlukan
                            penjaga/pengasuh?</span>
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        12 tahun dan ke bawah.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <span style="color:blue;">Adakah tiket masuk sah digunakan berulang kali pada hari lawatan yang
                            sama?</span>
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ya.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        <span style="color:blue;">Apakah tarikan umum PSN?</span>
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Konsep asas sains dalam bentuk interaktif.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        <span style="color:blue;">Apakah aktiviti-aktiviti yang disediakan oleh PSN untuk lawatan sambil
                            belajar?</span>
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Maklumat lanjut sila lihat laman Program.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        <span style="color:blue;">Bagaiman saya boleh mendapatkan maklumat mengenai PSN?</span>
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Sila layari :<br>
                        <a href="http://www.psn.gov.my">http://www.psn.gov.my</a> atau Laman facebook kami di<br>
                        <a href="http://www.facebook.com/PusatSainsNegara">http://www.facebook.com/PusatSainsNegara</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        <span style="color:blue;">Di manakah terletaknya PSN?</span><br>
                    </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Di kaki bukit Bukit Damansara, bersebelahan Bahagian Teknologi Pendidikan (BTP), dan berhadapan
                        bangunan<br>
                        Suruhanjaya Sekuriti.<br>
                        Sila lihat <a href="Peta Lokasi">Peta Lokasi</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                        <span style="color:blue;">Apakah terma dan syarat di dalam bangunan PSN?</span>
                    </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Makanan dan minuman dilarang dibawa masuk ke dalam bangunan. Merokok dan haiwan peliharaan
                        dilarang di semua<br>
                        premis bangunan PSN.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                        <span style="color:blue;">Apakah yang saya akan dapat / peroleh dari PSN?</span>
                    </button>
                </h2>
                <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ilmu pengetahuan dan keseronokan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                        <span style="color:blue;">Apakah kemudahan lain yang disediakan di PSN?</span>
                    </button>
                </h2>
                <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Surau dan cafeteria.<br>
                        Sila lihat <a href="#">Kemudahan</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                        <span style="color:blue;">Di manakah letaknya masjid yang terdekat?</span>
                    </button>
                </h2>
                <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Masjid Saidina Umar Al-Khattab, Bukit Damansara.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                        <span style="color:blue;">Adakah terdapat peta petunjuk di dalam bangunan PSN?</span>
                    </button>
                </h2>
                <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ya.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                        <span style="color:blue;">Adakah warga istimewa dikenakan bayaran?</span>
                    </button>
                </h2>
                <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Tiada bayaran dikenakan.<br>
                        Sila lihat <a id="" href="/bayaran-masuk">Bayaran Masuk</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                        <span style="color:blue;">Berapakah harga tiket untuk pelawat dewasa?</span>
                    </button>
                </h2>
                <div id="collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        RM6.00 setiap seorang. (13 tahun dan ke atas).<br>
                        Sila lihat <a id="" href="/bayaran-masuk">Bayaran Masuk</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                        <span style="color:blue;">Berapakah harga tiket untuk pelawat kanak-kanak?</span>
                    </button>
                </h2>
                <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        RM3.00 setiap seorang. ( 7 tahun – 12 tahun ).<br>
                        Sila lihat <a id="" href="/bayaran-masuk">Bayaran Masuk</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                        <span style="color:blue;">Berapakah harga tiket untuk warga emas?</span>
                    </button>
                </h2>
                <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        RM3.00 setiap seorang. ( 55 tahun dan ke atas ).<br>
                        Sila lihat <a id="" href="/bayaran-masuk">Bayaran Masuk</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwentyOne" aria-expanded="false" aria-controls="collapseTwentyOne">
                        <span style="color:blue;">Berapakah harga tiket untuk pelawat kanak-kanak?</span>
                    </button>
                </h2>
                <div id="collapseTwentyOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        RM3.00 setiap seorang. ( 7 tahun – 12 tahun ).<br>
                        Sila lihat <a id="" href="/bayaran-masuk">Bayaran Masuk</a>.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwentyTwo" aria-expanded="false" aria-controls="collapseTwentyTwo">
                        <span style="color:blue;">Adakah saya boleh menempah tiket secara online? Bagaimana?</span>
                    </button>
                </h2>
                <div id="collapseTwentyTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ya. Sila lengkapkan <a id="" href="/borang-tempahan-maklumbalas">Borang
                            Tempahan Lawatan</a> untuk membuat tempahan.<br>
                        Borang tempahan masih diselengara, untuk maklumat lebih lanjut, sila hubungi kami secara terus
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwentyThree" aria-expanded="false" aria-controls="collapseTwentyThree">
                        <span style="color:blue;"> Bagaimana untuk mendapatkan maklumat lanjut mengenai rombongan
                            lawatan
                            sekolah?</span>
                        < </button>
                </h2>
                <div id="collapseTwentyThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Sila lihat <a href="#">Program Sekolah</a>.
                    </div>
                </div>
            </div>
        </div>
        <br>
        <span style="color:blue;">Tiada soalan anda disini?</span><br>
        <br>
        Sila ajukan soalan anda melalui email webmaster(at.)psn.gov.my
        <br>
    </div>
@endsection
