<?php
require $_SERVER['DOCUMENT_ROOT'] . '/psn/config.php';
$resultCwgn = mysqli_query($conn, "SELECT * FROM cawangan ORDER BY id_cawangan DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beli Tiket: Borang Tiket</title>
    <meta name="description" content="">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="/psn/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/psn/assets/css/style.css">
    <link rel="shortcut icon" href="/psn/assets/images/icons/Logo-Pusat-Sains-Negara.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>


    <style>
        .section {
            margin-bottom: 20px;
        }

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
            font-size: 15px;
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

        z .flip-card .card-body {
            height: max-content;
            width: fit-content;
        }

        body {
            background-color: #fff;
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

        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }

        .hotel-booking-form {
            width: 100%;
            height: 100%;
            text-align: left;
            padding: 30px 20px 30px;
            color: #000;
            background: #e3e3e3;
            font-size: 13px;
        }
    </style>

<body>
    <?php
    require $_SERVER['DOCUMENT_ROOT'] . '/psn/include/navbelitiket.php';
    ?>

    <section class="section">
        <div class="shell-wide">
            <div class="range range-30 range-xs-center">
                <div class="cell-lg-7 cell-xl-9">
                    <!-- Classic slider-->
                    <section class="section">
                        <!-- Swiper -->
                        <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="6500" data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-slide-bg="/psn/assets/images/psn-img/psn_bkt_kiara.jpeg">
                                    <div class="swiper-slide-caption">
                                        <div class="shell text-sm-left">
                                            <h1 style="font-size:35px;" data-caption-animate="slideInDown" data-caption-delay="100">Pusat Sains Negara Kuala Lumpur</h1>
                                            <div class="slider-subtitle-group">
                                                <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                                                <h4 style="font-size:18px;" data-caption-animate="slideInLeft" data-caption-delay="700">Pusat Sains Negara
                                                    Kementerian Sains,<br> Teknologi dan Inovasi,
                                                    Persiaran Bukit Kiara<br>
                                                    50662 Bukit Kiara, Kuala Lumpur.</h4>
                                                <h3 style="font-size:18px;" data-caption-animate="slideInLeft" data-caption-delay="800">Tutup Setiap Hari Jumaat!</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-slide-bg="/psn/assets/images/psn-img/20180819_123400.jpg">
                                    <div class="swiper-slide-caption">
                                        <div class="shell text-sm-left">
                                            <h1 style="font-size:35px;" data-caption-animate="slideInDown" data-caption-delay="100">Pusat Sains Negara Cawangan Wilayah Utara</h1>
                                            <div class="slider-subtitle-group">
                                                <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                                                <h4 style="font-size:18px;" data-caption-animate="slideInLeft" data-caption-delay="700">Pusat Sains Negara Cawangan Wilayah Utara
                                                    Kementerian Sains,<br> Teknologi dan Inovasi,
                                                    Gunung Keriang<br>
                                                    06500 Alor Setar, Kedah Darul Aman.</h4>
                                                <h3 style="font-size:18px;" data-caption-animate="slideInLeft" data-caption-delay="800">Tutup Setiap Hari Jumaat!</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </section>
                </div>

                <div class="cell-lg-5 cell-xl-3 reveal-lg-flex">
                    <div class="hotel-booking-form">
                        <h3 style="font-size: 25px;">Tempah tiket anda sekarang</h3>
                        <form id="formTiket" name="formTiket" method="post" action="/psn/belitiket/prosesTiket.php" onsubmit="return validateForm()">
                            <div class="range range-sm-bottom spacing-20">
                                <div class="cell-lg-12 cell-md-4">
                                    <p style="font-size: 15px;" class="text-uppercase">Cawangan</p>
                                    <div class="form-wrap">
                                        <div class="form-wrap form-wrap-validation">
                                            <select id="cawangan" name="cawangan" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="Pilih..." required>
                                                <option value="">Pilih...</option>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($resultCwgn)) {
                                                ?>
                                                    <option value="<?php echo $row['id_cawangan']; ?>"><?php echo $row['nama_cawangan']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-lg-12 cell-md-4">
                                    <p style="font-size: 15px;" class="text-uppercase">Pameran</p>
                                    <div class="form-wrap">
                                        <div class="form-wrap form-wrap-validation">
                                            <select id="pameran" name="pameran" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="Pilih..." required>
                                                <option value="">Pilih...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-lg-12 cell-md-4">
                                    <p style="font-size: 15px;" class="text-uppercase">Tarikh</p>
                                    <div class="form-wrap">
                                        <input id="tarikh" name="tarikh" type="date" class="form-input" placeholder="Pilih..." required>
                                    </div>
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        //---------- Option 1 ----------
                                        //let objDate = new Date();

                                        // let day = objectDate.getDate();
                                        // let month = objectDate.getMonth();
                                        // month = month + 1;
                                        // let year = objectDate.getFullYear();

                                        // if (day < 10) {
                                        //     day = '0' + day;
                                        // }

                                        // if (month < 10) {
                                        //     month = `0${month}`;
                                        // }

                                        // let today = `${year}-${month}-${day}`;

                                        //---------- Option 2 ----------
                                        let today = moment().format('YYYY-MM-DD');
                                        document.getElementById("tarikh").min = today;

                                        var currentDate = moment();
                                        //var currentDate = new Date();
                                        var lastDayOfNextMonth = moment(currentDate).add(1, 'months').endOf('month');
                                        //var lastDayOfNextMonth = new Date(currentDate.getFullYear(), currentDate.getMonth()+2, 0);

                                        var maxDate = lastDayOfNextMonth.format('YYYY-MM-DD');
                                        //var maxDate = lastDayOfNextMonth.format('YYYY-MM-DD');

                                        document.getElementById("tarikh").max = maxDate;

                                        // Get the datepicker input element
                                        var datepickerInput = document.getElementById('tarikh');

                                        // Add an event listener for the input event
                                        datepickerInput.addEventListener('input', function() {
                                            // Get the selected date
                                            var selectedDate = new Date(datepickerInput.value);

                                            // Check if the selected date is a Friday (day number 5)
                                            if (selectedDate.getDay() === 5) {
                                                // Show an alert if it's a Friday
                                                alert("Maaf, kami tutup pada setiap hari Jumaat!");
                                                datepickerInput.value = "";
                                                // You can add further actions or validations here
                                            }
                                        });

                                    })
                                </script>
                                <div class="cell-lg-12 cell-md-4">
                                    <p style="font-size: 15px;" class="text-uppercase">Warganegara</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <select id="warganegara" name="warganegara" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="Pilih..." required>
                                            <option value="">Pilih...</option>
                                            <option value="Warganegara">Warganegara</option>
                                            <option value="Bukan Warganegara">Bukan Warganegara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p style="font-size: 14px;" class="text-uppercase">Kanak-kanak (6 Tahun Kebawah)</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <select id="knk1" name="knk1" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" data-constraints="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p style="font-size: 14px;" class="text-uppercase">Kanak-kanak (7-12 Tahun)</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <select id="knk2" name="knk2" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" data-constraints="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p style="font-size: 14px;" class="text-uppercase">Dewasa (13-54 Tahun)</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <select id="dws3" name="dws3" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" data-constraints="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p style="font-size: 14px;" class="text-uppercase">Warga Emas (Atas 54 Tahun)</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <select id="wms4" name="wms4" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" data-constraints="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-lg-6 cell-md-4 cell-xs-6">
                                    <p style="font-size: 14px;" class="text-uppercase">Orang Kurang Upaya (OKU)</p>
                                    <div class="form-wrap form-wrap-validation">
                                        <select id="oku5" name="oku5" class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" data-constraints="">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="email" id="emel" name="emel" />
                                <div class="cell-lg-12 cell-md-4">
                                    <button class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>Semak</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function validateForm() {
            var knk1 = document.forms["formTiket"]["knk1"].value;
            var knk2 = document.forms["formTiket"]["knk2"].value;
            var dws3 = document.forms["formTiket"]["dws3"].value;
            var wms4 = document.forms["formTiket"]["wms4"].value;
            var oku5 = document.forms["formTiket"]["oku5"].value;
            var emel = document.forms["formTiket"]["emel"].value;

            if (knk1 == 0 && knk2 == 0 && dws3 == 0 && wms4 == 0 && oku5 == 0) {
                window.alert("Kategori tidak dipilih");
                return false;
            }

            // Ask the user for additional input
            var emelF = prompt('Masukkan emel:');

            // Check if the user clicked "Cancel" in the prompt
            if (emelF === null) {
                return false; // Prevent form submission
            } else {
                // Function to validate email format
                function isValidEmail(email) {
                    // Regular expression for basic email validation
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return emailRegex.test(email);
                }

                // Check if the entered email is valid
                if (isValidEmail(emelF)) {
                    document.forms["formTiket"]["emel"].value = emelF;
                    // If the user confirms and the email is valid, allow the form submission
                    return emelF;
                } else {
                    // If the email is not valid, show an alert and prevent form submission
                    alert('Sila masukkan format emel yang sah.');
                    return false;
                }
            }



        }
    </script>

    <!-- Modal Emel -->
    <div style="font-size: 16px; padding-top: 10px;" class="modal fade" id="emelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-decoration: underline;">Emel Diperlukan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formEmel">
                    <div class="modal-body">
                        <label for="reqEmel">Emel</label>
                        <input type="email" id="reqEmel" name="reqEmel" placeholder="Sila masukkan emel" required>
                        <br>
                        <span id="emailError" class="error" style="font-size: small; color: red;"></span>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-secondary" value="OK" onclick="validateEmailOnClick()">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div style="font-size: 16px; padding-top: 10px;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-decoration: underline; color: red;">Maklumat Penting!</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/psn/assets/js/core.min.js"></script>
    <script src="/psn/assets/js/script.js"></script>


    <script>
        //show modal
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        });
    </script>

    <script>
        //get pameran base on cawangan
        $(document).ready(function() {
            $('#cawangan').change(function() {
                $('#pameran').empty();
                var cwngn = $('#cawangan').val();
                $.ajax({
                    type: 'POST',
                    url: '/psn/belitiket/fetch.php',
                    data: {
                        id: cwngn
                    },
                    success: function(data) {
                        $('#pameran').html(data);
                    }
                });
            });
        });
    </script>

</body>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/psn/include/footer.php'; ?>

</html>
