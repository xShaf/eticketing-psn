@extends('layouts.index')

@section('content')
    <style>
        /* Custom CSS for improved readability and attractiveness */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

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

        h3 {
            color: #333;
            text-align: center;
        }

        .row.left-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .row.left-image img {
            max-width: 100%;
            border-radius: 10px;
        }

        .row.left-image .text {
            padding: 20px;
            /* Adjust the padding as needed */
            background-color: #fff;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .row.left-image {
                flex-direction: column;
            }

            .row.left-image img {
                order: 2;
            }

            .row.left-image .text {
                order: 1;
            }
        }

        .naik {
            animation: fade-up 0.5s;
        }

        @keyframes fade-up {
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

    <body>
        <div class="container kotak naik">
            <h3 class="mb-4">Konsep dan Peranan</h3>
            <div class="row left-image justify-content-center align-items-center g-2">
                <img src="assets/images/mengenai-kami/PSN_Bukit_Kiara-300x200.jpg" class="rounded mb-4" alt="Bukit Kiara">
                <div class="text">
                    <p> Pusat Sains Negara telah dibuka secara rasminya pada 29hb November 1996 oleh Perdana Menteri
                        Malaysia
                        ketika
                        itu, Y.A.B Tun Dr. Mahathir bin Mohamad.
                        <br><br>
                        Lokasinya terletak di sebuah kawasan yang aman, harmoni dan di kelilingi kehijauan semulajadi di
                        Bukit
                        Kiara, Kuala Lumpur. Bangunan Pusat Sains Negara merupakan sebuah mercu tanda kebangsaan melalui
                        rekabentuknya yang unik dan saintifk. Bangunannya menyerupai sebuah kon yang terpotong di
                        kemuncaknya
                        dan
                        ditutupi dengan sebuah kubah geodesi.
                    </p>
                </div>
            </div>
            <div class="row left-image justify-content-center align-items-center g-2">
                <div class="text">
                    <p>
                        Sebagai sebuah institusi pembelajaran tidak formal, institusi ini diharap dapat meningkatkan minat,
                        penghargaan dan kefahaman orang ramai terhadap Sains dan Teknologi demi peningkatan ilmiah rakyat
                        Malaysia.
                        <br><br>
                        Bahan pameran yang terdapat di Pusat Sains Negara terdiri daripada pelbagai tema yang dibahagikan
                        mengikut kategori tertentu. Terdapat dua bahagian utama iaitu Sains Asas dan Teknologi.
                        <br><br>
                        Konsep keseluruhan pusat ini adalah untuk menghubungkan sains dengan nilai-nilai keagamaan, alam
                        sekitar, dan aspek-aspek kehidupan, pengetahuan dan penggunaannya di dalam kehidupan seharian.
                        <br><br>
                        Pada tahun 2006, Pusat Sains Negara telah melakar satu sejarah baru dengan penubuhan cawangan
                        pertamanya
                        di Wilayah Utara. Projek pembinaan Pusat Sains Negara Cawangan Wilayah Utara telah bermula pada
                        Februari
                        2005 di tapak berkeluasan 5 ekar di daerah Gunung Keriang, Alor Setar, Kedah.
                    </p>
                </div>
            </div>
            <div class="row left-image justify-content-center align-items-center g-2">
                <img src="assets/images/mengenai-kami/psn_bkt_kiara-768x431.jpg" class="rounded mb-4"
                    alt="Bukit Kiara">
                <div class="text">
                    <p>
                        Bangunannya direkabentuk berteraskan konsep jimat tenaga, mesra alam serta ruangan pameran yang
                        dinamik.
                        Hampir kesemua kerja-kerja susun atur persekitaran dan galeri pameran interaktif yang disediakan di
                        bangunan ini difabrikasikan sendiri oleh kakitangan Pusat Sains Negara.
                        <br><br>
                        Dengan wujudnya kedua-dua pusat sains ini, lebih banyak bahan pameran dapat direka dan dikongsi
                        untuk
                        menarik, merangsang dan mendorong para pelawat untuk menanam minat aktif terhadap sains dan
                        teknologi.
                    </p>
                </div>
            </div>
        </div>
@endsection
