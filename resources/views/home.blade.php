@extends('layouts.index')

@section('content')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    .h4-margin {
        margin-top: 20px;
    }

    .naik {
        animation: fade-up 0.5s;
    }

    .fade-up {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1s ease-in-out, transform 1s ease-in-out;
    }

    .fade-up.fade-in {
        opacity: 1;
        transform: translateY(0);
    }
</style>

@include('include.onLoadModal')
@include('include.promote')

<div style="background-image: url('assets/images/home/bg-2.jpg'); background-size: cover;">
    <div class="container-fluid shadow">
        <div class="row align-items-center" style="height: 70px;">
            <div class="col-12 text-center">
                <h1 style="font-weight: 700;">MARI TEROKAI SAINS DI PUSAT SAINS NEGARA!</h1>
            </div>
        </div>
    </div>

    <div class="fade-up my-4 shadow">
        <div class="text-center">
            <img src="assets/images/logopsn.png" alt="logo psn" style="height: 500px; object-fit: cover;">
            <div class="text-center">
                <h5 class="px-2">Menghubungkan sains dengan nilai-nilai keagamaan, alam sekitar, dan aspek-aspek
                    kehidupan, pengetahuan dan penggunaannya di dalam kehidupan seharian.</h5><br>
            </div>
        </div>
    </div>
    <div class="my-4 fade-up">
        <h2 class="text-center mt-4"><strong>PAUTAN PANTAS</strong></h2>
        <div class="container-fluid row justify-content-center ">

            <div class="card mt-2 ms-4 shadow" style="width: 18rem;">
                <img src="assets/images/mengenai-kami/PSN_Bukit_Kiara-300x200.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column align-items-start" style="height: 220px;">

                    <h5 class="card-title">Merancang Lawatan</h5>
                    <p class="card-text">Rancang pergerakkan anda sebelum menerokai Pusat Sains Negara!</p>
                    <a  href="/merancang-lawatan" class="btn btn-primary stretched-link">Klik
                        disini</a>
                </div>
            </div>

            <div class="card mt-2 ms-4 shadow" style="width: 18rem;">
                <img src="assets/images/mengenai-kami/Kaunter_Pertanyaan-300x200.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body d-flex flex-column align-items-start" style="height: 220px;">

                    <h5 class="card-title">Waktu Operasi</h5>
                    <p class="card-text">Ketahui permulaan waktu permulaan dan pengakhiran pengembaraan anda!</p>
                    <a  href="/waktu-operasi" class="btn btn-primary stretched-link">Klik disini</a>
                </div>
            </div>

            <div class="card mt-2 ms-4 shadow" style="width: 18rem;">
                <img src="assets/images/info-pelawat/galeri-dan-pameran/indoor/pcml.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body d-flex flex-column align-items-start" style="height: 220px;">

                    <h5 class="card-title">Bayaran Masuk</h5>
                    <p class="card-text">Semak bayaran masuk bagi setiap pameran Pusat Sains Negara!</p>
                    <a  href="/bayaran-masuk" class="btn btn-primary stretched-link">Klik disini</a>
                </div>
            </div>

            <div class="card mt-2 ms-4 shadow" style="width: 18rem;">
                <img src="assets/images/info-pelawat/galeri-dan-pameran/indoor/kidz.png" class="card-img-top"
                    alt="...">
                <div class="card-body d-flex flex-column align-items-start" style="height: 220px;">

                    <h5 class="card-title">Borang Tempahan & Maklumbalas</h5>
                    <p class="card-text">Pilih dan isi borang tempahan dan maklumbalas disini!</p>
                    <a  href="/borang-tempahan-maklumbalas"
                        class="btn btn-primary stretched-link">Klik
                        disini</a>
                </div>
            </div>

            <div class="card mt-2 ms-4 shadow" style="width: 18rem;">
                <img src="assets/images/mengenai-kami/psn_bkt_kiara-768x431.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column align-items-start" style="height: 220px;">

                    <h5 class="card-title">Beli Tiket Sekarang</h5>
                    <p class="card-text">Tidak perlu tinggu lagi. Apa yang perlu dinantikan? Mari beli sekarang!</p>
                    <a href="belitiket/pilihcawangan.php" class="btn btn-primary stretched-link">Klik disini</a>
                </div>
            </div>

        </div>
    </div>
    <div class="fade-up my-4 shadow-lg">
        <div class="container-fluid">
            <div class="row  my-4 px-4">
                <div class="col d-flex align-items-center justify-content-center shadow-xl">
                    <img src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura-xr/menangkiserangan-768x400.png"
                        class="rounded pl-4" alt="">
                </div>
                <div class="col rounded shadow">
                    <h1><strong>MENGEMBARA DALAM DUNIA REALITI MAYA</strong></h1>
                    <p>Rasai pengalaman baru didalam Obskura XR di Pusat Sains Negara</p>
                    <p>Era baru e-sukan yang dikuasakan oleh teknologi realiti maya (VR). Bersiap sedia dan pakai
                        perisai anda untuk berjuang. Alami perjuangan menembak mengunakan Realiti Maya (VR) yang
                        mengasyikkan. Kumpulkan pasukan anda dan membawa mereka menuju kemenangan. Pastikan bola tenaga
                        anda berputar dan asah kemahiran menembak dan koordinasi mata-tangan anda.</p>
                    <br>
                    <a  href="/obskura-xr" class="btn btn-primary">Terokai Lebih Lagi</a>
                </div>

            </div>
        </div>
    </div>

</div>



<script type="text/javascript">
    $(window).on('load', function () {
        $('#notisPopUp').modal('show');
    });
</script>

@endsection


