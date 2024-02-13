<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/login-signup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <title>Log Masuk & Daftar Masuk</title>

    <style>
        a {
            color: cornflowerblue;
        }

        a:link {
            text-decoration: none;
        }

        a:active {
            color: dimgray;
        }

        .eye {
            width: 25px;
            margin-left: 310px;
            margin-top: 45px;
            position: absolute;
            cursor: pointer;
        }

        .eye2 {
            width: 25px;
            margin-left: 310px;
            margin-top: 70px;
            position: absolute;
            cursor: pointer;
        }

        .eye3 {
            width: 25px;
            margin-left: 310px;
            margin-top: 220px;
            position: absolute;
            cursor: pointer;
        }

        .contentin {
            display: flex;
        }

        .contentin2 {
            display: block;
            padding-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">

            <div class="signin-signup">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Log Masuk</h2>
                    <!-- Email Address -->
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 input-field">
                        <i class="fas fa-lock"></i>
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" placeholder="Password" />
                        <img src="assets/images/icons/eyeClose.png" class="eye" id="eyeIcon" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Lupa Kata Laluan?') }}
                            </a>
                        @endif
                    </div>
                    <x-primary-button class="btn ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>

                    <script>
                        let eyeIcon = document.getElementById("eyeIcon");
                        let kata_laluan = document.getElementById("password");

                        eyeIcon.onclick = function() {
                            if (kata_laluan.type == "password") {
                                kata_laluan.type = "text";
                                eyeIcon.src = "assets/images/icons/eyeOpen.png";
                            } else {
                                kata_laluan.type = "password";
                                eyeIcon.src = "assets/images/icons/eyeClose.png";
                            }
                        }
                    </script>
                </form>


                <form action="{{ route('register') }}" method="post" class="sign-up-form" autocomplete="off">

                    <h2 class="title">Daftar Masuk</h2>
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                            autocomplete="name" placeholder="Nama" />
                        <x-input-error :messages="$errors->get('name')" />
                    </div>

                    <div class="input-field mt-4">
                        <i class="fas fa-envelope"></i>
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" placeholder="Email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="input-field mt-4">
                        <i class="fas fa-lock"></i>
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="Password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="input-field mt-4">
                        <i class="fas fa-lock"></i>
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm Password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <x-primary-button class="btn ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <div class="contentin">
                        <a href="/home"><img src="assets/images/logopsn.png" width="250" height="120"
                                alt=""></a>
                        <div class="contentin2">
                            <h3>Baru Disini?</h3>
                            <div>
                                Mari sertai kami terokai alam sains. Daftar Sekarang!
                            </div>
                        </div>
                    </div>
                    <button class="btn transparent" id="sign-up-btn">
                        Daftar Masuk
                    </button>
                </div>
                <img src="assets/images/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <div class="contentin">
                        <a style="margin-top: 15px;" href="/home"><img src="assets/images/logopsn.png"
                                width="250" height="120" alt=""></a>
                        <div class="contentin2">
                            <h3>Sudah sertai kami?</h3>
                            <div style="padding-bottom: 15px;">
                                Teruskan pengembaraan anda bersama kami di Pusat Sains Negara.
                            </div>
                        </div>
                    </div>
                    <button class="btn transparent" id="sign-in-btn">
                        Log Masuk
                    </button>
                </div>
                <img src="assets/images/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="assets/js/login-signup.js"></script>
</body>

</html>
