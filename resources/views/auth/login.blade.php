<x-guest-layout title="Login">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <x-form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="example@gmail.com" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>

            <x-form.input-password id="password" type="password" name="password" required
                autocomplete="current-password" placeholder="•••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between">
            <div class="block">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                <label for="remember_me" class="label-checkbox">
                    {{ __('Remember me') }}
                </label>
            </div>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div class="grid mt-4">
            <x-button.submit>
                {{ __('Log in') }}
            </x-button.submit>
        </div>
    </x-form>
</x-guest-layout>
