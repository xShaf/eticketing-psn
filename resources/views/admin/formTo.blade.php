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
    <div class="container kotak naik" style="background-color: whitel">
        @can('add-user')
            <div class="bg-light m-4 p-4 rounded border border-secondary shadow">
                <a name="" id="" class="btn btn-primary" href="{{ route('admin.add') }}" role="button">Add new
                    user</a>
            </div>
        @endcan

        @can('read-user')
            <div class="bg-light m-4 p-4 rounded border border-secondary shadow">
                <a name="" id="" class="btn btn-primary" href="{{{ route('admin.display') }}}" role="button">User list</a>
            </div>
        @endcan

    </div>
@endsection
