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
        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    User Information
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    Update {{ $user->name }} information
                </p>
            </header>
            <form method="post" action="{{ route('user.update', ['user' => $user]) }}" enctype="multipart/form-data"
                class="mt-6 space-y-6">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="patch">

                <div class="mb-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('storage/avatar/' . $user->avatar) }}" alt="Profile Picture"
                            class="rounded-circle border" style="max-width: 300px; max-height: 300px;">

                    </div>
                    <br>
                    <label for="avatar" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                    <input id="avatar" name="avatar" type="file" class="form-control">
                    @error('avatar')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input id="name" name="name" type="text" class="form-control"
                        value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                    @error('name')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" class="form-control"
                        value="{{ old('email', $user->email) }}" required autocomplete="username">
                    @error('email')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div class="mt-2">
                            <p class="text-sm text-gray-800">
                                Your email address is unverified.
                                <button form="send-verification" class="btn btn-link text-sm text-gray-600">
                                    Click here to re-send the verification email.
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-success">
                                    A new verification link has been sent to your email address.
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">
                        <i class="fas fa-user"></i> Roles
                    </label>
                    <select id="role" name="role" class="form-select" required>
                        <option value="" disabled>Select Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                {{ ucfirst($role->name) }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                </div>




                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input id="phone_number" name="phone_number" type="text" class="form-control"
                        value="{{ old('phone_number', $user->phone_number) }}">
                    @error('phone_number')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="birthdate" class="block text-sm font-medium text-gray-700">Birth Date</label>
                    <input id="birthdate" type="date" name="birthdate" class="form-control"
                        value="{{ $user->birthdate ? $user->birthdate->format('Y-m-d') : '' }}">

                    @error('birthdate')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select id="gender" name="gender" class="form-select" placeholder="select gender">
                        <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="address_line" class="block text-sm font-medium text-gray-700">Address</label>
                    <input id="address_line" name="address_line" type="text" class="form-control"
                        value="{{ old('address_line', $user->address_line) }}">
                    @error('address_line')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="postcode" class="block text-sm font-medium text-gray-700">Postcode</label>
                    <input id="postcode" name="postcode" type="text" class="form-control"
                        value="{{ old('postcode', $user->postcode) }}">
                    @error('postcode')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input id="city" name="city" type="text" class="form-control"
                        value="{{ old('city', $user->city) }}">
                    @error('city')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                    <input id="state" name="state" type="text" class="form-control"
                        value="{{ old('state', $user->state) }}">
                    @error('state')
                        <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                    @enderror

                </div>

                <div class="flex items-center gap-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ url('admin/user-list') }}" class="btn btn-secondary">Go Back</a>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-success">Saved.</p>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
                        <script>
                            toastr.success("Your profile has been Updated!")
                        </script>
                    @else
                        <script>
                            toastr.warning("An error has occured")
                        </script>
                    @endif

                </div>
            </form>
        </section>
    </div>
@endsection
