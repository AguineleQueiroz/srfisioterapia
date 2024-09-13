<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!--Styles-->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-row sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 space-x-12">

            <div class="min-w-[40%] sm:max-w-md bg-white shadow-md overflow-hidden sm:rounded-lg mt-6">
                <div class="flex justify-center items-center py-3 border-b border-gray-100">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>
                <div class="px-6 py-4 ">
                    {{ $slot }}
                </div>
            </div>

            <div class="w-[48%] flex justify-center items-center py-3 border-b border-gray-100 px-0 m-0">
                <img src="{{ mix('img/home-img.svg') }}" alt="Home image" width="100%">
            </div>

        </div>
    </body>
</html>
