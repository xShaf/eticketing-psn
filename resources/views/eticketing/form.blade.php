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

        /* Add this to your CSS stylesheet or in a <style> tag in your HTML */
        .custom-img {
            object-fit: cover;
            /* Ensures that the image covers the entire container */
            height: 500px;
            /* Adjust the height as needed */
        }

        .title-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-75%, -50%);
            text-align: left;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);

            /* Set the text color */
        }

        .title-overlay h2 {
            font-size: 2rem;
            /* Set the font size for the title */
            margin-bottom: 10px;
            /* Adjust the margin as needed */
        }

        .title-overlay p {
            font-size: 1.2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            /* Set the font size for the description */
        }

        /* Media Query for Small Screens */
        @media (max-width: 576px) {
            .title-overlay h2 {
                font-size: 1.8rem;
            }

            .title-overlay p {
                font-size: 1rem;
            }
        }
    </style>

    <div class="container bg-light kotak naik" style="background-color:white;">

        <h2>Pembelian Tiket</h2>
        <div id="cawangan" class="carousel slide mb-4" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#cawangan" data-bs-slide-to="0" class="active" aria-current="true" aria-label="PSNKL"></li>
                <li data-bs-target="#cawangan" data-bs-slide-to="1" aria-label="PSNCWU"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ url('assets\images\psn-img\psn_bkt_kiara.jpeg') }}"
                        class="d-block w-100 custom-img rounded" alt="PSNKL">
                    <div class="title-overlay">
                        <h2>Pusat Sains Negara Kuala Lumpur</h2>
                        <p>Pusat Sains Negara Kuala Lumpur<br>
                            Kementerian Sains, Teknologi dan Inovasi, <br>
                            Persiaran Bukit Kiara, <br>
                            50662 Bukit Kiara, Kuala Lumpur <br>
                            Tutup setiap Hari <strong>Jumaat</strong></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/images/psn-img/20180819_123400.jpg') }}"
                        class="d-block w-100 custom-img rounded" alt="PSNCWU">
                    <div class="title-overlay">
                        <h2>Pusat Sains Negara Cawangan Wilayah Utara</h2>
                        <p>Pusat Sains Negara <br>
                            Cawangan Wilayah Utara, <br>
                            Jalan Gunung Keriang, <br>
                            06500 Alor Setar, Kedah <br>
                            Tutup setiap hari <strong>Jumaat</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light rounded">
            <h3>Tempah tiket anda sekarang</h3>

            <div class="mb-3">
                <label for="Cawangan" class="form-label">
                    <i class="bi bi-compass"></i> Cawangan
                </label>
                <select id="Cawangan" name="Cawangan" class="form-select" required>
                    <option value="" disabled selected>Pilih...</option>
                    <option value="admin">Pusat Sains Negara Kuala Lumpur</option>
                    <option value="staff">Pusat Sains Negara Cawangan Wilayah Utara</option>
                </select>
                <x-input-error :messages="$errors->get('Cawangan')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input id="date" type="date" name="date" class="form-control"
                    value="{{ $event->first_date ? $event->first_date->format('Y-m-d') : '' }}">

                @error('date')
                    <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            let today = moment().format('YYYY-MM-DD');
            document.getElementById("date").min = today;

            var currentDate = moment();
            //var currentDate = new Date();
            var lastDayOfNextMonth = moment(currentDate).add(1, 'months').endOf('month');
            //var lastDayOfNextMonth = new Date(currentDate.getFullYear(), currentDate.getMonth()+2, 0);

            var maxDate = lastDayOfNextMonth.format('YYYY-MM-DD');
            //var maxDate = lastDayOfNextMonth.format('YYYY-MM-DD');

            document.getElementById("date").max = maxDate;

            // Get the datepicker input element
            var datepickerInput = document.getElementById('date');

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
@endsection
