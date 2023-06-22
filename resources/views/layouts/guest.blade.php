<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.meta')
    @include('includes.styles')
</head>

<body class="font-sans bg-white antialiased">
    <div class="flex flex-wrap h-screen w-full">
        <div
            class="flex h-screen justify-center items-center flex-wrap overflow-hidden p-8 w-full md:w-[40%] 2xl:w-[35%]">
            <div class="w-full">
                <x-application-logo class="h-12 mb-5" />
                <p class="text-xl font-semibold">Sign In</p>
                <p class="mb-8">Silakan masuk ke akun Anda</p>
                {{ $slot }}
            </div>
        </div>
        <div class="w-[60%] 2xl:w-[65%] hidden md:block">
            <img src="{{ asset('assets/img/bg/login.jpg') }}" class="w-full h-screen max-w-full" alt="img" />
        </div>
    </div>

    @include('includes.scripts')
</body>

</html>
