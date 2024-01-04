@extends('layouts.index')

@section('content')



<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    body {
        background-color: #0D2C54;
    }

    a {
        text-decoration: none;
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
    <h3 class="mb-4">Borang Tempahan & Maklumbalas</h3>
    <p>Berikut adalah pautan borang-borang yang ada di dalam laman sesawang ini, untuk kegunaan anda.</p>


    <p><a href="#" target="_blank">● Borang tempahan Lawatan Sekolah</a>
    <p>
    <p>Borang ini disediakan untuk rombongan sekolah sekiranya membuat lawatan biasa (eksplorasi bebas) tanpa modul
        pengajaran tertentu.</p>
    <p><a href="#" target="_blank">● Borang Tempahan Program Sekolah</a> </p>
    <p>Disediakan untuk diisi oleh rombongan sekolah yang bercadang untuk menjalankan program-program khas yang
        disediakan</p>
    <p><a href="#" target="_blank">● Tempahan Program Jangkau Luar</a> </p>
    <p>Gunakan borang ini untuk menjemput pasukan outreach Pusat Sains Negara, untuk turut sama di dalam program-program
        yang anda anjurkan ataupun Program Jangkau Luar PSN</p>
    <p><a href="#" target="_blank">● Borang Permohonan Program Fasilitator</a></p>
    <p>Borang ini untuk anda memohon untuk turut sama sebagai fasilitator PSN</p>
    <p><a href="#" target="_blank">● Borang Maklumbalas</a> </p>
    <p>Disediakan untuk orang awam untuk menyampaikan Cadangan, pendapat, aduan dan apa-apa perkara berkenaan Pusat
        Sains Negara</p>


</div>

@endsection
