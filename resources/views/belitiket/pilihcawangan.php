<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Tiket: Pilih Cawangan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/icons/Logo-Pusat-Sains-Negara.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/psn/assets/css/flipcard.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        .kotak {
            background-color: #f8f8f8;
            border-radius: 10px;
            display: block;
            flex-direction: row;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .kotak2 {
            display: flex;
            justify-content: space-around;
        }

        .flip-card {
            height: 330px;
            width: 45%;
        }

        .card {
            /* background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%); */
            background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .flip-card img {
            height: 100%;
            width: 100%;
        }

        .flip-card .card-body {
            height: max-content;
            width: fit-content;
        }

        body {
            background-color: #0D2C54;
        }

        .card-body {
            display: grid;
        }

        @media (max-width: 767px) {

            .kotak2 {
                display: block;
                flex-direction: row;
            }

            .flip-card {
                height: 330px;
                width: 100%;
            }

            .card-body {
                margin-top: 0;
            }
        }

        @media (max-width: 450px) {
            .kotak2 {
                display: block;
                flex-direction: row;
            }

            .flip-card {
                height: 370px;
                width: 100%;
            }

            .card-body {
                margin-top: 0;
            }
        }
    </style>

<body>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/psn/include/navbelitiket.php';
    ?>

    <div class="container kotak">
        <h3 align="center">#1 Pilih Cawangan Pusat Sains Negara</h3>
        <div class="kotak2">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/psn/assets/images/psn-img/psn_bkt_kiara.jpeg" class="card-img-top" alt="...">
                    </div>
                    <div class="flip-card-back">
                        <div class="card w-100 h-100">
                            <div class="card-body">
                                <h5 class="card-title">A. Pusat Sains Negara Kuala Lumpur (PSNKL)</h5>
                                <p class="card-text">
                                <div>Pusat Sains Negara</div>
                                <div>Kementerian Sains, Teknologi dan Inovasi,</div>
                                <div>Persiaran Bukit Kiara</div>
                                <div>50662 Bukit Kiara, Kuala Lumpur.</div>
                                <small class="">🕘 9.00 Pagi - 🕔 5.00 Petang</small>
                                <br>
                                <small style="color: red;">📅 TUTUP SETIAP HARI JUMAAT</small>
                                </p>
                                <a href="#" class="btn btn-primary">Pilih</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="/psn/assets/images/psn-img/20180819_123400.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="flip-card-back">
                        <div class="card w-100 h-100">
                            <div class="card-body">
                                <h5 class="card-title">B. Pusat Sains Negara Cawangan Wilayah Utara (PSNCWU)</h5>
                                <p class="card-text">
                                <div>Pusat Sains Negara Cawangan Wilayah Utara</div>
                                <div>Kementerian Sains, Teknologi dan Inovasi,</div>
                                <div>Gunung Keriang</div>
                                <div>06500 Alor Setar, Kedah Darul Aman.</div>
                                <small class="">🕘 9.00 Pagi - 🕔 5.00 Petang</small>
                                <br>
                                <small style="color: red;">📅 TUTUP SETIAP HARI JUMAAT</small>
                                </p>
                                <a href="#" class="btn btn-primary">Pilih</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h4 style="text-decoration: underline; color: red;">Maklumat Penting!</h4>
        <p>
        <ul>
            <li>● Waktu Lawatan ke Pusat Sains Negara (PSN) adalah dari 9.00 am - 5.00 pm, setiap hari kecuali hari Jumaat. Notis penutupan akan dimaklumkan melalui Laman Sesawang PSN sekiranya terdapat penutupan luar jangka.</li>
        </ul>
        </p>
        <p>
        <ul>
            <li>● Bagi kumpulan lawatan sekolah untuk Kategori Pra-Sekolah, Sekolah Rendah dan Sekolah Menengah, tempahan perlu dibuat melalui Sistem Tempahan Lawatan di <a href="#">https://www.psn.gov.my/borang-tempahan-lawatan-sekolah/</a> Pada tarikh lawatan, Penyelaras Sekolah perlu mengemukakan Surat Rasmi Permohonan Lawatan Sambil Belajar daripada pihak sekolah dan Slip Tempahan kepada petugas kaunter tiket.</li>
        </ul>
        </p>
        <p>
        <ul>
            <li>● Pembelian tiket secara atas talian bagi hari yang sama adalah selewat-lewatnya jam 4.00 pm. Selepas tempoh tersebut, pembelian tiket perlu dibuat di Kaunter Tiket PSN.</li>
        </ul>
        </p>
        <p>
        <ul>
            <li>● Dokumen Pengenalan Diri (MyKad/MyKid/Passport) adalah WAJIB dipamer semasa kemasukan. Pelawat perlu membayar perbezaan sekiranya dokumen pengenalan diri atau jenis/harga tiket yang dibeli adalah berbeza daripada yang dikemukakan semasa semakan.</li>
        </ul>
        </p>
        <p>
        <ul>
            <li>● Kod QR pada e-Tiket perlu dipamer semasa kemasukan ke PSN dan Galeri Pameran Bertema.</li>
        </ul>
        </p>
        <p>
        <ul>
            <li>● Untuk sebarang pertanyaan, sila hubungi Pegawai Khidmat Pelanggan PSN di <a href="#">eticketing@psn.gov.my<a> / 03-2089 3400. Tempoh operasi panggilan adalah dari 9.00 pagi – 5.00 petang.</li>
        </ul>
        </p>
    </div>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/psn/include/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>