<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        {{-- <link rel="stylesheet" href="{{ asset('build/assets/app.3a2a293f.css') }}"> --}}
        @vite(['resources/css/app.css'])
    </head>
    <body class="antialiased">
        <h1 class="text-purple-700 font-bold text-4xl px-4 py-3 rounded-full bg-gray-100 max-w-lg text-center mx-auto mt-4">Hello worldd 24</h1>
          
        {{-- <x-torchlight-code language='php'>
            echo "Hello World!";
        </x-torchlight-code> --}}
        
    </body>
</html>
