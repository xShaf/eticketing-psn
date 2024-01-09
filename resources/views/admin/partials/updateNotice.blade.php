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
        <h2 class="title">Update Notice Modal</h2>
        <form action="{{ route('notice.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="patch">
            <label for="name" class="form-label mt-4">Name</label>
            <input id="name" type="name" name="name" class="form-control" required autofocus
                placeholder="Enter notice name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <label for="image_data" class="form-label mt-4">Images</label>
            <input type="file" id="image_data" name="image_data" accept="image/*" class="form-control" required autofocus
                placeholder="Select images">
            <x-input-error :messages="$errors->get('image_data')" class="mt-2" />

            <div class="mt-4">
                <label>Current Image Preview:</label>
                @php
                    $latestNoticeImage = app('App\Http\Controllers\NoticeController')->showLatest();
                @endphp

                @if ($latestNoticeImage)
                    <a href="{{ $latestNoticeImage }}" target="_blank">
                        <img src="{{ $latestNoticeImage }}" alt="Latest Notice Image"
                            style="max-width: 100%; max-height: 100%">
                    </a>
                @else
                    <p>No latest notice image available</p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary mt-4">
                Change Notice
            </button>

        </form>
    </div>
@endsection
