<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link rel="stylesheet" href="{{ url('css/form.css') }}">
    </head>
    <body class="antialiased">
        
        <nav class="bg-white">
            <!-- Shop -->
            <a href="{{ route('home.index') }}" class="lg:p-8">Index</a>
            <a href="{{ route('home.about') }}" class="lg:p-8">About</a>
            <a href="{{ route('home.portfolio') }}" class="lg:p-8">Portfolio</a>
            <a href="{{ route('home.shop') }}" class="lg:p-8">Store</a>
            <a href="{{ route('home.store') }}" class="lg:p-8">Shop</a>
            <!-- Computer -->
            <a href="{{ route('computers.index') }}" class="lg:p-8">Computers</a>
            <a href="{{ route('computers.create') }}" class="lg:p-8">Create Computer</a>
        </nav>


        <div style="flex-wrap: wrap;" class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">  

            @yield('content')
            
        </div>
            

    </body>
</html>