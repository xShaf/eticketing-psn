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

    <div class="container d-flex flex-column min-vh-100 bg-light kotak naik" style="background-color:white;">
        <h3 class="mb-4">Galeri & Pameran</h3>
        <p>Alamilah pengalaman interaktif sains dan teknologi anda semasa ketika melawati galeri dan pameran di Pusat
            Sains Negara. Mulakan penerokaan anda di sini!</p>
        <div class="accordion" id="">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Galeri Permainan Dalaman (Indoor)
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body text-center">
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4"
                                src="assets/images/info-pelawat/galeri-dan-pameran/indoor/marine-300x225.jpg"
                                alt="">
                            <p><strong>Akuarium Hidupan marin</strong></p>
                        </div>
                        <p>Pelbagai hidupan marin berwarna warini mengalu-alukan kedatangan pelawat ke diunia sains
                            Pusat Sains Negara. Lihat sendiri pelbagai jenis ikan an batu karang di dalam satu ekosistem
                            terumbu karang yang unik.</p>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/indoor/marine2.jpg"
                                alt="">
                            <p><strong>Akuarium Ikan Air Tawar</strong></p>
                            <p>Pemandangan hidupan ikan air tawar tropika menanti anda di dalam akuarium terowong ikan
                                air
                                tawar pertama di Malaysia. Selami keunikan diorama tasik air tawar dan sungai.</p>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4"
                                src="assets/images/info-pelawat/galeri-dan-pameran/indoor/wonderspark.png" alt="">
                            <p><strong>Galeri Wonderspark</strong></p>
                            <p>Belajar tentang sains disebalik fenomena semulajadi berkenaan Akua, Cahaya dan Angin
                                serta bagaimana elemen-elemen ini membantu mengemudi teknologi hijau masa hadapan.</p>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/indoor/eureka.jpg"
                                alt="">
                            <p><strong>Galeri Eureka</strong></p>
                            <p>Cabar minda anda untuk berfikir secara kreatif dan inovatif! Bersedia untuk menjerit
                                “Eureka!” apabila anda berjaya menyelesaikan kesemua cabaran di dalam zon Challenge Your
                                Mind, Colour and Sound, Illusion dan All About Numbers</p>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/indoor/kdp-1.jpg"
                                alt="">
                            <p><strong>Kids' Discovery Place</strong></p>
                            <p>Sebuah galeri yang berkonsepkan bermain dan meneroka sambil belajar dalam persekitaran
                                yang berinteraktif, hands-on, ceria, selesa dan mengujakan kanak-kanak berumur 4 hingga
                                6 tahun</p>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/indoor/pcml.jpg"
                                alt="">
                            <p><strong>Peneroka comel</strong></p>
                            <p>Aplikasi konsep bermain dan meneroka sambil belajar. Galeri ini melibatkan kemahiran
                                pergerakan motor dan minda khususnya bagi kanak-kanak berumur 2 hingga 4 tahun</p>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/indoor/kidz.png"
                                alt="">
                            <p><strong>Kid's World</strong></p>
                            <p>Zon interaktif Istimewanya Saya, Kreativiti, Bunyi & Muzik serta Mesin yang mengujakan
                                minda kanak-kanak berumur 7 hingga 12 tahun</p>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/indoor/lkas.jpg"
                                alt="">
                            <p><strong>laluan ke Alam Sains</strong></p>
                            <p>Fahami prinsip asas sains dalam bidang biologi, fizik, kimia, sains tanah dan terokai
                                dunia mikro dan makro dalam galeri penuh penerokaan ini</p>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/indoor/irays.jpg"
                                alt="">
                            <p><strong>I-Rays</strong></p>
                            <p>Selami dunia sinaran dalam 3 bahagian pameran; pengenalan kepada sinaran, tokoh dalam
                                teknologi sinaran dan kegunaan sinaran dalam perubatan, kajian sains dan pertanian</p>
                        </div>
                        <div class="row justify-content-center align-items-center g-2">
                            <img class="rounded mb-4"
                                src="assets/images/info-pelawat/galeri-dan-pameran/indoor/penerbangan.jpg" alt="">
                            <p><strong>Galeri Penerbangan</strong></p>
                            <p>Menekankan kepada sejarah dan prinsip asas penerbangan iaitu prinsip Bernoulli,
                                aerodinamik dan bagaimana prinsip ini dapat diaplikasikan dalam kehidupan seharian
                                manusia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Pameran Bertema
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body text-center  ">
                        <div class="row justify-content-center align-items-center g-2">
                            <a href="/dinosaur-encounter"><img class="rounded mb-4"
                                    src="assets/images/info-pelawat/galeri-dan-pameran/theme/dino-web-1.png"
                                    alt=""><br>
                                Galeri Dinosaur Encounter</a>
                        </div>
                        <a href="/obskura-xr">
                            <div class="row justify-content-center align-items-center g-2">
                                <img class="rounded mb-4"
                                    src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura.jpg"
                                    alt=""><br>
                                Galeri Obskura XR
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Zon Pameran Outdoor
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body text-center">
                    <div class="row justify-content-center align-item-center g-2">
                        <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/outdoor/waterplaze.png"
                            alt="">
                        <P><strong>Water Plaza</strong></P>
                    </div>
                    <p>Sebuah kawasan rekreasi yang menempatkan beberapa bahan pameran berunsurkan air yang mengajak
                        pengunjung memahami
                        konsep fizik seperti tekanan permukaan dan tenaga kinetik</P>
                    <div class="row justify-content-center align-item-center g-2">
                        <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/outdoor/herbs.jpg"
                            alt="">
                        <p><strong>Taman Herba</strong></p>
                        <p>Taman ini menempatkan pelbagai spesis tumbuhan herba dan rempah yang mempunyai nilai
                            perubatan dan komersial</p>
                        <div class="row justify-content-center align-item-center g-2">
                            <img class="rounded mb-4"
                                src="assets/images/info-pelawat/galeri-dan-pameran/outdoor/Zon-Interaktif-1.png"
                                alt="">
                            <p><strong>Zon Interaktif</strong></p>
                            <p>Beberapa bahan pameran gergasi dan peralatan senaman yang menepati ciri-ciri perkembangan
                                fizikal serta psikologi manusia yang gemarkan sesuatu peralatan berbentuk permainan
                                tetapi mempunyai konsep sains yang tersirat</p>
                            <div class="row justify-content-center align-item-center g-2">
                                <img class="rounded mb-4"
                                    src="assets/images/info-pelawat/galeri-dan-pameran/outdoor/pgarden.png"
                                    alt="">
                                <p><strong>Pocket Garden</strong></p>
                                <p>Hiasan landskap berteraskan sains</p>
                                <div class="row justify-content-center align-item-center g-2">
                                    <img class="rounded mb-4"
                                        src="assets/images/info-pelawat/galeri-dan-pameran/outdoor/focal-768x576.png"
                                        alt="">
                                    <p><strong>Focal Point</strong></p>
                                    <p>Hiasan landskap berteraskan sains</p>
                                    <div class="row justify-content-center align-item-center g-2">
                                        <img class="rounded mb-4"
                                            src="assets/images/info-pelawat/galeri-dan-pameran/outdoor/gon.jpg"
                                            alt="">
                                        <p><strong>Garden of Nature</strong></p>
                                        <p>Taman ini menawarkan pendekatan pembelajaran biologi dan biodiversiti dalam
                                            ekosistem tropika. Pemilihan bahan pameran, flora dan fauna
                                            yang ditempatkan di kawasan ini adalah sealiran dengan program pendidikan
                                            yang bersesuaian dengan kumpulan sasaran tertentu terutamanya pelajar
                                            sekolah dan keluarga</p>
                                        <div class="row justify-content-center align-item-center g-2">
                                            <img class="rounded mb-4"
                                                src="assets/images/info-pelawat/galeri-dan-pameran/outdoor/Taman-Prasejarah.jpg"
                                                alt="">
                                            <p><strong>Taman Prasejarah</strong></p>
                                            <p>Taman ini membawa anda ke zaman prasejarah melalui beberapa replika
                                                dinosaur yang hidup pada zaman tersebut seperti T-rex dan Triceratops
                                            </p>
                                            <div class="row justify-content-center align-item-center g-2">
                                                <img class="rounded mb-4"
                                                    src="assets/images/info-pelawat/galeri-dan-pameran/outdoor/ll.jpg"
                                                    alt="">
                                                <p><strong>Laluan Interaktif</strong></p>
                                                <p>Laluan interaktif ini merupakan salah satu laluan alternatif kepada
                                                    pengunjung yang gemarkan cabaran</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
