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
    <h3 class="mb-4">Waktu Operasi</h3>
    <p>
        <strong>Pusat Sains Negara Kuala Lumpur</strong><br>
        Sabtu sehingga Khamis (9:00 am - 5:00pm).<br>
        Ditutup pada hari Jumaat<br>
        Kaunter tiket ditutup pada jam 4:00 petang.
    </p>
    <p>
        <strong>Pusat Sains Negara Cawangan Wilayah Utara (PSNCWU)</strong><br>
        Sabtu sehingga Khamis (9:00 am - 5:00pm).<br>
        Ditutup pada hari Jumaat<br>
        Kaunter tiket ditutup pada jam 4:00 petang.
        <br>
    </p>
</div>>


@endsection
