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
    </style>

    <div class="container bg-light kotak" style="background-color:white;">
        <h3 class="mb-4">Pelan bangunan pusat sains negara</h3>
        <div class="row justify-content-center align-item-center g-2">
            <img class="rounded mb-4 col" src="assets/images/info-pelawat/pelan-bangunan/aras 4.png" alt="">
            <img class="rounded mb-4 col" src="assets/images/info-pelawat/pelan-bangunan/aras 3.png" alt="">
            <img class="rounded mb-4 col" src="assets/images/info-pelawat/pelan-bangunan/aras 2.png" alt="">
            <img class="rounded mb-4 col" src="assets/images/info-pelawat/pelan-bangunan/aras 1.png" alt="">
            <img calss="rounded mb-4 col" src="assets/images/info-pelawat/pelan-bangunan/PSN-OUTDOOR-2048x1412.jpg"
                alt="">




        </div>

    </div>
@endsection
