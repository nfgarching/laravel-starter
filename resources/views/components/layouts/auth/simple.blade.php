<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('components.layouts.app.head')
</head>

<style>
    body {
        height: 100vh;
    }

    .container {
        height: 100%;
    }
</style>

<body>

    <div class="container d-flex align-items-center justify-content-center">
        <div>
            <h1>
                <a href="{{ route('home') }}" wire:navigate>
                    <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                </a>
            </h1>

            <hr>
            
            {{ $slot }}

        </div>
    </div>

</body>

</html>
