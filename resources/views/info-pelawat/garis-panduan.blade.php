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

    <div class="container bg-light kotak naik" style="background-color:white;">
        <h3 class="mb-4">Garis Panduan</h3>
        <p>Untuk memastikan lawatan anda berjalan dengan lancar dan sempurna, sila baca dan fahami
            garis panduan yang disediakan di bawah :</p>
        <h4>Lawatan</h4>
        <ul>
            <li>PSN menyediakan lebih dari 1,000 bahan pameran bercorak interaktif.</li>
            <li>Bahan pameran ditempatkan di dua belas galeri pameran.</li>
            <li>Bahan pameran telah direkabentuk menggunakan konsep “tertumpu kepada orang yang belajar” dan “belajar
                sendiri”.</li>
            <li>Bahan pameran direkabentuk untuk lawatan berulang.</li>
            <li>Pengalaman adalah berlainan bagi setiap lawatan.</li>
        </ul>

        <h4>Ketibaan</h4>

        <ul>
            <li>Pelawat kanak-kanak dan pelawat lanjut usia dinasihatkan supaya turun dan menaiki kenderaan di depan pintu
                masuk bangunan PSN.</li>
            <li>Pelawat dinasihatkan membaca semua arahan dan panduan yang tersedia di PSN.</li>
            <li>Semua pelawat yang masuk ke kawasan PSN hendaklah sentiasa berhati-hati. PSN tidak akan bertanggungjawab
                jika berlaku sebarang perkara yang tidak diingini.</li>
            <li>Dilarang membawa makanan dan minuman ke dalam bangunan PSN.</li>
            <li>Dilarang merokok di premis PSN.</li>
            <li>Dilarang membawa binatang peliharaan ke premis PSN.</li>
        </ul>

        <h4>Kenderaan Persendirian:</h4>

        <p>PSN terletak di Persiaran Bukit Kiara, Kuala Lumpur. Anda boleh gunakan aplikasi Waze atau Google Maps, taip:
            <strong>Pusat sains Negara</strong>
        </p>

        <h4>Menaiki pengangkutan awam ke PSN Kuala Lumpur</h4>

        <strong>Dari KL Sentral:</strong>
        <ol>
            <li>Naik komuter/LRT/KL Monorel ke KL Sentral.</li>
            <li>Ambil bas Rapid KL bernombor 850 di KL Sentral untuk ke PSN.</li>
        </ol>


        <strong>Dari stesen MRT:</strong>
        <ol>
            <li>Naik Tren MRT dari mana – mana stesen.</li>
            <li>Turun di Stesen <strong> SBK13 Pusat Bandar Damansara.</strong></li>
            <li>Naik bas perantara MRT bernombor <strong>T818</strong> atau <strong>T852.</strong></li>
            <li>Turun di Stesen<strong>Pusat Sains Negara.</strong></li>
        </ol>

        <div class="row justify-content-center align-item-center g-2">
            <img class="rounded mb-4" src="/psn/assets/images/info-pelawat/garis-panduan/Public-Transport-PSN.jpg"
                alt="">

        </div>

    </div>
@endsection
