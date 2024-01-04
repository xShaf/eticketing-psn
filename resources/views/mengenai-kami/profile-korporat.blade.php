@extends('layouts.index')

@section('content')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    body {
        background-color: #0D2C54;
    }

    .kotak {
        background-color: #f8f8f8;
        display: flex;
        align-items: center;
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

    .image {
        flex: 1;
        text-align: center;
    }

    .image img {
        max-width: 100%;
        /* Display the image at its original size */
        height: auto;
        /* Maintain aspect ratio */
    }

    .text {
        flex: 2;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
    }

    h3 {
        color: #333;
        text-align: center;
    }

    @media (max-width: 768px) {
        .kotak {
            flex-direction: column;
            /* Stack content vertically on mobile */
        }

        .image,
        .text {
            flex: auto;
            /* Reset the flex values for mobile layout */
        }
    }
</style>

<div class="container kotak naik">
    <div class="image">
        <img class="rounded mb-4" src="assets/images/mengenai-kami/Selamat_Datang-300x200.jpg"
            alt="Selamat Datang">
    </div>
    <div class="text">
        <h3 class="mb-4">Profil Korporat</h3>
        <p>
            Sejajar dengan wawasan kerajaan untuk melahirkan generasi penyumbang dalam bidang sains dan teknologi,
            Pusat Sains Negara telah diberi mandat untuk membina suatu masyarakat yang berbudaya sains.
            <br><br>
            Cadangan penubuhan Pusat Sains Negara adalah bertitik tolak daripada salah satu cabaran strategik yang
            disenaraikan oleh Tun Dr. Mahathir Mohamad di dalam kertas kerja beliau bertajuk Malaysia-The Way
            Forward yang dirangka pada tahun 1992 berbunyi:
            <br><br>
            “The sixth is the challenge of establishing a scientific and progressive society, a society that is
            innovative and forward-looking, one that is not only a consumer of technology but also a contributor to
            the scientific and technological civilization of the future.”
            <br><br>
            Bagi merealisasikan cabaran ini, Pusat Sains Negara telah merangka beberapa strategi bertujuan untuk
            memupuk kesedaran, kefahaman dan penghargaan orang ramai terhadap sains dan teknologi:
        <ul>
            <li>Mewujudkan persekitaran serta kemudahan pengajaran dan pembelajaran sains yang menyeronokkan.</li>
            <li>Menyedia dan membangunkan bahan pameran sains interaktif.</li>
            <li>Menyedia dan melaksanakan program dan aktiviti sains yang menarik.</li>
            <li>Memudahcara penyampaian sains dan teknologi.</li>
            <li>Menerbitkan bahan literasi sains dan teknologi.</li>
            <li>Memberi khidmat nasihat pendidikan sains tidak formal.</li>
        </ul>
        </p>
    </div>
</div>
@endsection
