@extends('admin.layouts.index')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        body {
            background-color: #0D2C54;
        }

        .kotak {
            background-color: #f8adf8f8;
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



    <div class="container kotak naik" style="background-color:white;">
        <form action="{{ route('user.add') }}" method="post" class="sign-up-form" autocomplete="off">
            @csrf

            <h2 class="title">Add User</h2>

            <div class="mb-3">
                <label for="name" class="form-label">
                    <i class="fas fa-user"></i> Name
                </label>
                <x-text-input id="name" type="text" name="name" :value="old('name')" class="form-control" required
                    autofocus autocomplete="name" placeholder="Name" />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">
                    <i class="fas fa-envelope"></i> Email
                </label>
                <x-text-input id="email" type="email" name="email" :value="old('email')" class="form-control" required
                    autocomplete="email" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">
                    <i class="fas fa-lock"></i> Password
                </label>
                <x-text-input id="password" type="password" name="password" class="form-control" required
                    autocomplete="new-password" placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">
                    <i class="fas fa-lock"></i> Confirm Password
                </label>
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                    required autocomplete="new-password" placeholder="Confirm Password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            {{-- Add a role selection dropdown --}}
            <div class="mb-3">
                <label for="role" class="form-label">
                    <i class="fas fa-user"></i> Roles
                </label>
                <select id="role" name="role" class="form-select" required>
                    <option value="" disabled selected>Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="customer">Customer</option>
                </select>
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <x-primary-button class="btn btn-primary">
                <i class="bi bi-person-plus"></i></i> Add User
            </x-primary-button>

            @if (session('status') === 'user-added')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-success">
                    The user has been added</p>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
                <script>
                    toastr.success("A new user has been added")
                </script>
            @else
                <script>
                    toastr.warning("An error has occured")
                </script>
            @endif
        </form>


    </div>
@endsection
