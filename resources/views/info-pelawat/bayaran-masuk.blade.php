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
        <h3 class="mb-4">Bayaran Masuk</h3>
        <div class="table-responsive-sm rounded border-dark">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h4><strong>Pusat Sains Negara Kuala Lumpur</strong></h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row"><strong>Kategori</strong></td>
                        <td><strong>Harga (RM)</strong></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Dewasa (13-54 tahun)</td>
                        <td>6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (7-12 tahun)</td>
                        <td>3.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Warga Emas (55 tahun keatas)</td>
                        <td>3.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kump. Prasekolah (Temasuk Guru)</td>
                        <td><span style="color:red;">*</span></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kump. Sek. Rendah (Termasuk Guru)</td>
                        <td><span style="color:red;">*</span></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kump. Sek. Menengah (Termasuk Guru)</td>
                        <td><span style="color:red;">*</span></td>
                    </tr>
                </tbody>
            </table>
            <p>
                <strong><span style="color:red;">* Untuk rombongan sekolah sahaja</span></strong><br>
                <br>
                1. Dokumen perlu dibawa bersama untuk mendapatkan tiket percuma di kaunter tiket <span
                    style="color:red;">(Untuk rombongan sekolah sahaja !)</span><br>
                2. Maklumat tempahan anda (akan dihantar ke email anda <a href="#">setelah mengisi borang</a>) (<a
                    href="#">Lihat Contoh</a>)<br>
                3. Surat permohonan rasmi dari sekolah anda ( <a href="#">Lihat Contoh</a> )
            </p>
        </div>
        <div class="table-responsive-sm rounded border-dark">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h4><strong>Pameran Obskura XR (PSN Kuala Lumpur sahaja)<span style="color:red;">*</span></h4>
                            </strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row"><strong>Kategori</strong></td>
                        <td><strong>Harga (RM)</strong></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Dewasa</td>
                        <td>8.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (4-12 Tahun)</td>
                        <td>6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (3 Tahun Kebawah)</td>
                        <td>3.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Warga Emas (55 Tahun Ke atas)</td>
                        <td>0.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">OKU</td>
                        <td>0.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kump. Prasekolah (Termasuk Guru)</td>
                        <td>3.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kump. Sek. Rendah (Termasuk Guru)</td>
                        <td>3.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kump. Sek. Menengah (Termasuk Guru)</td>
                        <td>3.00</td>
                    </tr>
                    <tr class="">
                        <td colspan="2" scope="row"><span style="color:red;"><strong>Setiap tiket sah untuk satu
                                    kemasukan sahaja</strong></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive-sm rounded border-dark">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th colspan="2">
                            <h4><strong>Pameran ‘Dinasour Encounter’ (PSN Kuala Lumpur sahaja)<span
                                        style="color:red;">*</span></strong></h4>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row"><strong>Kategori</strong></td>
                        <td><strong>Harga (RM)</strong></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Dewasa (13-54)</td>
                        <td>15.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (4-12 Tahun)</td>
                        <td>12.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Warga Emas (55 tahun & keatas)</td>
                        <td>5.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kumpulan Sekolah Menengah (termasuk guru)</td>
                        <td>8.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kumpulan Sekolah Rendah/ Prasekolah (termasuk guru)</td>
                        <td>6.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (3 tahun ke bawah) & Orang Kelainan Upay</td>
                        <td>Percuma</td>
                    </tr>

                    <tr class="">
                        <td colspan="2" scope="row"><span style="color:red;"><strong>* Setiap tiket sah untuk satu
                                    kemasukan
                                    sahaja</strong></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive-sm rounded border-dark">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th colspan="3"><strong>Pusat Sains Negara Kuala Lumpur</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row"><strong>Kategori</strong></td>
                        <td><strong>Harga (RM)</strong></td>
                        <td><strong>Pameran Bertema</strong></td>
                    </tr>
                    <tr class="">
                        <td scope="row">Dewasa (13 tahun ke atas)</td>
                        <td>RM1.00</td>
                        <td>RM2.00</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Kanak-kanak (7-12 tahun)</td>
                        <td>RM0.50</td>
                        <td>RM1.00</td>
                </tbody>
            </table>
        </div>
    </div>
@endsection
