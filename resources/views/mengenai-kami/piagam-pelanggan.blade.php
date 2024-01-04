@extends('layouts.index')
@section('content')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    body {
        background-color: #0D2C54;
    }

    .kotak {
        background-color: #f8f8f8;
        border-radius: 10px;
        display: flex;
        flex-direction: row;
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .kotak img {
        max-width: 100%;
        height: auto;
        /* Prevent image stretching */
        border-radius: 10px 0 0 10px;
        margin: 20px 0;
        /* Add space on top and bottom */
    }

    .kotak-text {
        padding: 20px;
        border-radius: 0 10px 10px 0;
    }

    h3 {
        color: #333;
        text-align: center;
    }

    ul {
        padding-left: 20px;
    }

    @media (max-width: 768px) {
        .kotak {
            flex-direction: column;
        }

        .kotak img {
            border-radius: 10px 10px 0 0;
            margin: 0;
        }

        .kotak-text {
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
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


<div class="container kotak naik">
    <img class="rounded" src="assets/images/mengenai-kami/Kaunter_Pertanyaan-300x200.jpg" alt="Kaunter">
    <div class="kotak-text">
        <h3 class="mb-4">Piagam Pelanggan</h3>
        <p>
            Kami warga Pusat Sains Negara berjanji:
        </p>
        <ul>
            <li>
                Memberi layanan yang mesra, cekap dan penuh hormat kepada semua pelanggan.
            </li>
            <li>
                Setiap tempahan program dan aktiviti pendidikan dan lawatan akan disahkan tidak melebihi tempoh tiga
                (3)
                hari bekerja dari tarikh tempahan dibuat.
            </li>
            <li>
                Galeri-galeri pameran berada dalam keadaan penyelenggaraan yang baik dan selamat.
            </li>
            <li>
                Sekurang-kurangnya 85% bahan-bahan pameran interaktif berfungsi pada setiap masa.
            </li>
            <li>
                Semua aduan mengenai perkhidmatan dan kemudahan akan dikendalikan dan diambil tindakan dalam tempoh
                satu
                (1) minggu.
            </li>
            <li>Demi mempertingkatkan kualiti perkhidmatan kepada pelanggan, kami sedia menerima sebarang teguran,
                pandangan dan idea-idea.</li>
        </ul>
        <p>
            Sekiranya ada kemusykilan atau pertanyaan lanjut, <a href="/psn/hubungi-kami.php">sila hubungi kami</a>.
        </p>
    </div>
</div>

@endsection
