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
    <h1>All Carousel List</h1>
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Images</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( as )

                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
