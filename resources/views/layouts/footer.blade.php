@include('layouts.footer-modals')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

<style>
    li::marker {
        font-size: 0;
    }

    footer {
        background-image: url('assets/images/footer/footer.jpg');
        background-size: cover;
        color: white;
        padding-top: 20px;
    }

    .btn-link {
        color: white;
        font-size: 15px;
        text-decoration: none;
        font-weight: bold;
    }

    .footer-content {
        padding-top: 20px;
    }

    .footer-links {
        display: flex;
        justify-content: space-between;
    }

    .footer-links ul {
        list-style: none;
        padding: 0;
    }

    .footer-links ul li {
        margin-bottom: 10px;
    }

    .socials {
        display: flex;
        list-style: none;
        gap: 2.0rem;
        height: 15vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .item a {
        text-decoration: none;
        width: 3.5rem;
        height: 3.5rem;
        background-color: hsl(203, 92%, 97%);
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        z-index: 1;
        border: 3px solid hsl(203, 92%, 97%);
        overflow: hidden;
    }

    .item a::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: var(--bg-color);
        z-index: 0;
        scale: 1 0;
        transform-origin: bottom;
        transition: scale 0.5s ease;
    }

    .item:hover a::before {
        scale: 1 1;
    }

    .icon {
        font-size: 2rem;
        color: hsl(203, 92%, 8%);
        transition: 0.5s ease;
        z-index: 2;
    }

    .item a:hover .icon {
        color: #fff;
        transform: rotateY(360deg);
    }

    .item:nth-child(1) {
        --bg-color: #0077b5;
    }

    .item:nth-child(2) {
        --bg-color: linear-gradient(to bottom right, #f9ce34, #ee2a7b, #6228d7);
    }

    .item:nth-child(3) {
        --bg-color: #000;
    }

    .item:nth-child(4) {
        --bg-color: #ff0000;
    }
</style>

<footer class="container-fluid mt-auto">
    <div class="container-xl footer-content">
        <h4><strong>Hubungi Kami</strong></h4>
        <div class="footer-links row">
            <div class="col-6">
                <p>Pusat Sains Negara Kuala Lumpur<br>
                    Kementerian Sains, Teknologi dan Inovasi, <br>
                    Persiaran Bukit Kiara, <br>
                    50662 Bukit Kiara, Kuala Lumpur <br>
                    <br>
                    Tel: +603-2089 3400 <br>
                    Fax: +603-2089 3401 <br>
                    Bantuan Website: webmaster@psn.gov.my <br>
                    Tempahan: tempahan@psn.gov.my

                <div class="mt-4"
                    style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:650px;height:200px;">
                    <div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe
                            style="height:100%;width:100%;border:0;" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=Pusat+Sains+Negara+Kuala+Lumpur,+Persiaran+Bukit+Kiara,+Bukit+Damansara,+Kuala+Lumpur,+Federal+Territory+of+Kuala+Lumpur,+Malaysia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                    <style>
                        #embedded-map-display img {
                            max-height: none;
                            max-width: none !important;
                            background: none !important;
                        }
                    </style>
                </div>
                </p>

            </div>
            <div class="col-6">
                Pusat Sains Negara <br>
                Cawangan Wilayah Utara, <br>
                Jalan Gunung Keriang, <br>
                06500 Alor Setar, Kedah <br>
                <br>
                Tel: +604-720 7700 <br>
                Fax: +604-720 7701 <br>
                Bantuan Website: webmaster@psn.gov.my <br>
                Tempahan: tempahanpsncwu@psn.gov.my <br>

                <div class="mt-4"
                    style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:650px;height:200px;">
                    <div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;"><iframe
                            style="height:100%;width:100%;border:0;" frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=PUSAT+SAINS+NEGARA+CAWANGAN+WILAYAH+UTARA+(PSNCWU),+Jalan+Gunung+Keriang,+Alor+Setar,+Kedah,+Malaysia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                    <style>
                        #embedded-map-display img {
                            max-height: none;
                            max-width: none !important;
                            background: none !important;
                        }
                    </style>
                </div>
            </div>
            <br>
            <div class="text-center">
                <ul class="socials">
                    <li class="item">
                        <a href="https://www.facebook.com/PusatSainsNegara/?locale=ms_MY" target="_blank">
                            <i class="fa-brands fa-facebook icon"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.instagram.com/pusatsainsnegara/?hl=en" target="_blank">
                            <i class="fa-brands fa-instagram icon"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://twitter.com/mysciencecentre?lang=en" target="_blank">
                            <i class="fa-brands fa-x-twitter icon"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a href="https://www.youtube.com/channel/UC3wMWmbjKwhJIzKiVXCnfbA" target="_blank">
                            <i class="fa-brands fa-youtube icon"></i>
                        </a>
                    </li>
                </ul>
                <button class="btn btn-link" data-bs-toggle="modal"
                    data-bs-target="#modalPenafian">Penafian</button>|<button class="btn btn-link"
                    data-bs-toggle="modal" data-bs-target="#modalPrivasi">Dasar
                    Privasi</button>|<button class="btn btn-link" data-bs-toggle="modal"
                    data-bs-target="#modalKeselamatan">Dasar Keselamatan</button>
                <p>Hak Cipta Terpelihara © Pusat Sains Negara, 2023</p>
            </div>
        </div>
    </div>
</footer>
