<head>
  <link rel="icon" href="{{ asset('icon.png') }}">
</head>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('E-Posta')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Şifre')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <a href="{{ route('register') }}" class="ml-2 text-sm text-gray-600">{{ __('Henüz üye değil misin? Kayıt Ol') }}</a>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-3">
                    {{ __('Giriş Yap') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
