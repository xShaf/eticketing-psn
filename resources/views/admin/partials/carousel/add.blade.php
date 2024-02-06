@extends('layouts.index')

@section('content')
    <style>
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

    <div class="container kotak naik">
        <label for="name" id="name" class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control" required autofocus
            placeholder="Enter carousel name">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <label for="carousel_data" id="name" class="form-label">Images</label>
        <input type="file" id="carousel_data" id="carousel_data" name="carousel_data" class="form-control" required
            placeholder="Seelec carousel image">
        <x-input-error :messages="$errors->get('carousel_data')" class="mt-2" />

        <button type="submit" class="btn btn-primary">
            Save
        </button>

    </div>
@endsection
