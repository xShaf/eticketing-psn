@extends('layouts.index')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    body {
        background-color: #0D2C54;
    }

    .kotak {
        border-radius: 10px;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .gallery {
        display: flex;
        flex-direction: row;
        /* Default: Side by side */
        align-items: center;
    }

    .image-container {
        flex: auto;
        width: 100px;
        /* Set the desired width */
        height: 400px;
        /* Set the desired height */
        margin-right: 20px;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: scale-down;
        border-radius: 10px;
        /* Rounded corners for the images */
    }

    .text-container {
        flex: 1;
    }

    @media (max-width: 767px) {


        .gallery {
            flex-direction: column;
        }

        .image-container {
            width: 100%;
            height: auto;
            margin-right: 0;
            margin-bottom: 20px;
        }
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
<script src="assets/js/test-script.js"></script>
<div class="container bg-light kotak naik">
    <h3 class="mb-4 text-center"><strong>Merancang Lawatan</strong></h3>
    <h4>Pusat Sains Negara Kuala Lumpur</h4>
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="mb-4">Waktu Operasi</h3>
            <p>
                Sabtu sehingga Khamis (9:00 am - 5:00 pm).<br>
                Ditutup pada hari Jumaat.<br>
                Kaunter tiket ditutup pada jam 4:00 petang.
            </p>
        </div>
    </div>

    <div class="gallery bg-white rounded p-3">
        <div class="image-container">
            <img class="rounded mb-4" src="assets/images/info-pelawat/merancang-lawatan/FILE-1.jpg" alt="">
        </div>
        <div class="text-container">
            <p>
                Pusat Sains Negara (PSN) adalah sebuah institusi pendidikan tidak formal dengan menyediakan dua aras
                <a href="/galeri-pameran">Galeri dan Pameran</a> serta sebuah taman
                pendidikan yang dinamakan <a href="#">Science
                    Wonderland</a>. Bahan pameran dan aktiviti yang
                disediakan adalah direka untuk setiap lapisan umur dan latar belakang sama ada individu mahupun
                lawatan
                berkumpulan.
            </p>
        </div>
    </div>

    <div class="gallery bg-white rounded p-3">
        <div class="image-container">
            <img class="rounded mb-4" src="assets/images/info-pelawat/merancang-lawatan/Nature-Secret1.jpg" alt="">
        </div>

        <div class="text-container">
            <p>
                Sekiranya anda merupakan peminat sains dan teknologi, anda akan rasa satu hari adalah tidak cukup
                untuk anda
                memahami dan membelajari semua bahan pameran di sini. Sekiranya anda hanya bersantai bersama dengan
                keluarga
                atau rakan, masa minimum yang diperlukan adalah dua jam untuk melawat semua galeri di PSN. Anda
                dapat juga
                menyaksikan pertunjukkan sains serta beberapa aktiviti sains yang ditetapkan oleh PSN semasa lawatan
                anda.
            </p>
        </div>
    </div>

    <div class="gallery bg-white rounded p-3">
        <div class="image-container">
            <img class="rounded mb-4" src="assets/images/info-pelawat/merancang-lawatan/Pertunjukan-Sains-2.jpg"
                alt="">
        </div>

        <div class="text-container">
            <p>
                Untuk makluman anda, bayaran masuk hanya untuk pameran tetap di PSN sahaja. Sekiranya terdapat
                pameran
                bertema, wujudnya bayaran tambahan terhadap bayaran masuk yang tertakluk kepada pameran bertema
                tersebut.
            </p>
        </div>
    </div>

    <div class="gallery bg-white rounded p-3">
        <div class="image-container">
            <img class="rounded mb-4" src="assets/images/info-pelawat/merancang-lawatan/Program-Saintis-Tunas.jpg"
                alt="">
        </div>

        <div class="text-container">
            <p>
                Sekiranya anda memerlukan aktiviti sains yang disediakan khas oleh pegawai PSN, anda boleh menempah
                <a href="#">Program
                    Sekolah</a> untuk lawatan anda. Untuk makluman anda, program sekolah hanya dijalankan pada hari
                bekerja,
                iaitu
                Isnin hingga Khamis. Lawatan berbentuk sebegini dinamakan Lawatan Berprogram. Tempahan boleh
                dilakukan
                dengan menghubungi kami sekurang-kurangnya dalam tempoh dua minggu sebelum lawatan untuk pihak PSN
                memproses
                permohonan tersebut.
            </p>
        </div>
    </div>

    <p>
        Bayaran Lawatan Berprogram adalah termasuk dalam harga tiket lawatan ke galeri pameran tetap PSN. Untuk
        maklumat lanjutan dalam merancang lawatan anda ke PSN, sila klik menu <a href="/garis-panduan">Garis Panduan</a>. Jika
        anda memerlukan
        penerangan lanjutan sila hubungi:
    </p>
    <p>
        <strong>Pertanyaan Am</strong><br>
        Encik Uwais Qarni <br>
        uwais@psn.gov.my <br>
        Tel: 03-2089 3400 <br>
        Fax: 03-2089 3401 <br>
    </p>
    <hr class="hr" />
    <br>
    <p>
        <strong>Pusat Sains Negara Cawangan Wilayah Utara (PSNCWU)</strong><br>

    <div class="card mb-4">
        <div class="card-body">
            <h3 class="mb-4">Waktu Operasi</h3>
            <p>
                Sabtu sehingga Khamis (9:00 am - 5:00 pm).<br>
                Ditutup pada hari Jumaat.<br>
                Kaunter tiket ditutup pada jam 4:00 petang.
            </p>
        </div>
    </div>

    Pusat Sains Negara Cawangan Wilayah Utara (PSNCWU) adalah cawangan yang pertama ditubuhkan bagi memenuhi
    keperluan tarbiyah ilmu sains, teknologi dan inovasi bagi penduduk di kawasan Wilayah Utara (Kedah, Perlis,
    Pulau Pinang dan Per

    ak Utara). PSNCWU menyediakan sebuah galeri pameran sains yang mengandungi beberapa
    seksyen di dalamnya seperti Science Mall, Fascinating Tunnel, Sudut Islam dan Sains dan banyak lagi. Di
    samping itu, PSNCWU juga menyediakan sebuah taman pendidikan iaitu Taman Pendidikan Oryza.

    <br><br>
    Anda bolehlah meluangkan masa semaksima yang mungkin di sini kerana tiada had masa yang ditetapkan bagi
    lawatan galeri. Di sini anda boleh meneroka dan menimba ilmu yang terdapat dalam dunia sains dan teknologi.
    <br><br>
    Sekiranya anda ingin menyertai aktiviti sains yang disediakan khas oleh pegawai PSNCWU, anda boleh menempah
    aktiviti yang terdapat dalam Program Sekolah. Program sekolah hanya dijalankan pada hari bekerja iaitu Ahad
    hingga Khamis. Tempahan bolehlah dibuat dengan mengisi Borang Tempahan Program, sekurang-kurangnya dua
    minggu sebelum tarikh lawatan yang anda rancang. Jika anda memerlukan penerangan lanjutan sila hubungi:
    </p>
    <p>
        <strong>Pertanyaan Am</strong><br>
        Encik Uwais Qarni <br>
        uwais@psn.gov.my <br>
        Tel: 03-2089 3400 <br>
        Fax: 03-2089 3401 <br>
    </p>
</div>

@endsection
