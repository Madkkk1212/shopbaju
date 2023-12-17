{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 m-3" href="{{ route('register') }}">
                    {{ __('sign up') }}
                </a>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }} 
            </x-primary-button>

            
        </div>
    </form>
</x-guest-layout> --}}

<html>

<head>
    <title>Cara Membuat Form Login Keren Pure CSS + HTML</title>
</head>
<link rel="stylesheet" type="text/css" href="/css/style123.css">

<body>
    <div class="container">
        <h1></h1>
        <div class="login-body">

            <div class="top-login">
                <div class="title">
                    Login Form
                </div>
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-11"></div>
                <div class="line-22"></div>
                <div class="line-33"></div>
                <div class="line-111"></div>
                <div class="line-222"></div>
                <div class="line-333"></div>
            </div>
            <div class="character-circel">
                <div class="character-body">
                    <div class="head"></div>
                    <div class="hair1"></div>
                    <div class="hair2"></div>
                </div>
            </div>
            <div class="character-bacground"></div>
            <div class="character-bacground2"></div>
            <div class="character-bacground3"></div>
            <div class="character-circle1"></div>
            <div class="character-circle2"></div>

            <div class="login-box">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="morab31"></div>
                <div class="morab32"></div>
                <div class="morab33"></div>
                <div class="morab34"></div>
                
                <!-- Email Address -->
                <form action="{{route('login')}}" method="POST">
                @csrf
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" />
                    
                    </div>
                    
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                        
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <button type="submit" class="button">LOGIN</button>
                    </form>
                        
                        <div class="last-info">
                            
                            <div class="two">
                                <a href="/register">Create Account</a>
                            </div>
                            
                </div>
            </div>
            <div class="down-login">
            </div>
        </div>
    </div>
 </body>

</html>