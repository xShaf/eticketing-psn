@extends('index')

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
    </style>

    <div class="container bg-light kotak" style="background-color:white;">
        <h3 class="mb-4">PAMERAN OBSKURA XR</h3>
        <strong>Mari terokai dunia realiti maya dan teknologinya. Imersikan diri anda dalam dunia di mana sains
            adalah magik.</strong><br><br>
        <strong><u>TAMAN DIGITAL</u></strong><br>
        <br>
        <strong>1. Luncur Pelangi</strong>
        <div class="row justify-content-center align-items-center g-2 text-center">

            <img class="rounded mb-4"
                src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura-xr/tamandigital-1024x595.jpg">
            <p>Menggelongsor sambil bermandikan cahaya. Imej pada slide tersebut akan bertukar apabila pengunjung
                menuruni gelongsor.<br>
                Aktiviti ini dapat meransang deria, meningkatkan kemahiran motor dan mencetus kreativiti melalui
                aktiviti fizikal yang interaktif dan imersif.</p>
        </div>
        <strong>2. JELAJAH BIRU</strong>
        <div class="row justify-content-center align-items-center g-2 text-center">

            <img class="rounded mb-4"
                src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura-xr/jelajahbiru-1536x881.jpg">
            <p>Menjelajah ke dasar lautan bersama hidupan laut dan pelajari ekosistem melalui paparan digital 360°.
                Rasai pengalaman menyelam bersama hidupan laut seperti ikan paus, penyu dan pelbagai hidupan yang
                menarik dan unik.</p>
        </div>
        <strong>3. METRO TEKNO</strong>
        <div class="row justify-content-center align-items-center g-2 text-center">

            <img class="rounded mb-4"
                src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura-xr/metrotekno-1536x844.jpg">
            <p>Serlahkan kreativiti & imaginasi dengan belajar sambil mewarna pelbagai jenis kenderaan darat, udara dan
                air. Imbas dan perhatikan imej 3D kenderaan anda akan muncul dan bergerak di dalam dunia bandar
                digital.<br>
                Permainan ini akan mencetuskan kreativiti dan merangsang daya imaginasi dalam berkarya.</p>
        </div>
        <strong><u>DUNIA FANTASI</u></strong><br><br>
        <strong>1. Portal Poligon</strong>
        <div class="row justify-content-center align-items-center g-2 text-center">
            <img class="rounded mb-4"
                src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura-xr/portalpoligon-1024x559.jpg">
            <p>Portal infiniti yang dilengkapi dengan `magical landscape flora and fauna’ berbentuk polygon dan berakhir
                dengan suasana hujan yang memberi pengalaman imersif kepada pengunjung.<br>
                Aktifkan suasana magis dengan lontarkan suara anda.</p>
        </div>
        <strong>2. Menangkis Serangan</strong>
        <div class="row justify-content-center align-items-center g-2 text-center">
            <img class="rounded mb-4"
                src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura-xr/menangkiserangan-768x400.png">
            <p>Era baru e-sukan yang dikuasakan oleh teknologi realiti maya (VR). Bersiap sedia dan pakai perisai anda
                untuk berjuang. Alami perjuangan menembak mengunakan Realiti Maya (VR) yang mengasyikkan. Kumpulkan
                pasukan anda dan membawa mereka menuju kemenangan.
                Pastikan bola tenaga anda berputar dan asah kemahiran menembak dan koordinasi mata-tangan anda.</p>
        </div>
        <strong>Maklumat Penting</strong>
        <p style="color:red;">Keperluan Ketinggian: 150cm dan ke atas</p>
        <strong>3. Riak Rimba</strong>
        <div class="row justify-content-center align-items-center g-2 text-center">
            <img class="rounded mb-4" src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura-xr/riakramba.jpg">
            <p>Pernahkah anda berpeluang menyaksikan bagaimana rantai makanan dalam ekosistem kita berlaku? Interaksi
                antara pelbagai hidupan yang membentuk ekosistem seimbang.
                Terokai dan pelajari tentang flora dan fauna ekosistem dengan memijak bulatan interaktif di atas lantai.
            </p>
        </div>
        <strong>4. Cabaran Mendaki</strong>
        <div class="row justify-content-center align-items-center g-2 text-center">
            <img class="rounded mb-4"
                src="assets/images/info-pelawat/galeri-dan-pameran/theme/obskura-xr/cabaranmendaki-1024x479.jpg">
            <p>Serlahkan deria labah-labah dalaman anda dan panjat ke puncak. Ini bukan pengembaraan memanjat batu
                biasa. Dinding ini menggabungkan teknologi Augmented Reality (AR) dengan pelbagai misi untuk
                dipilih.<br>
                Kemahiran pembelajaran kinestetik badan yang digunakan dalam aktiviti ini boleh meningkatkan penggunaan
                seluruh anggota badan kita untuk menyelesaikan misi.
            </p>
        </div>
        <p>
            <strong><u>Waktu Lawatan</u></strong><br>
            Waktu operasi: 9.00 pagi - 5.00 petang<br>
            Sabtu sehingga Khamis<br>
            Tutup pada hari Jumaat.
        </p>
        <div class="table-responsive-sm rounded border-dark">
            <strong><u>BAYARAN MASUK</u></strong>
            <table class="table table-light">
                <tbody>
                    <tr class="">
                        <td scope="row"><strong>Kategori</strong></td>
                        <td><strong>Harga (RM)</strong></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Dewasa (13 tahun ke atas)</td>
                        <td>RM 8.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (4-12 tahun)</td>
                        <td>RM6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Rombongan Sekolah Menengah (termasuk guru)</td>
                        <td>RM6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Rombongan Sekolah Rendah/ Prasekolah (termasuk guru)</td>
                        <td>RM6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Warga Emas (55 tahun & ke atas)</td>
                        <td>RM6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (3 tahun & ke bawah)</td>
                        <td>RM6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Orang kelainan Upaya (OKU)</td>
                        <td>RM6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (4-12 tahun)</td>
                        <td>RM6.00</td>
                    </tr>
                </tbody>
            </table>
            <p><span style="color:red;">*</span>Bayaran masuk galeri ini tidak termasuk caj tiket kemasukan ke Pusat
                Sains Negara.</p>
        </div>
    </div>
@endsection
