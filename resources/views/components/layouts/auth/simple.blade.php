<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
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
                    <!-- <span class="flex h-9 w-9 mb-1 items-center justify-center rounded-md">
                        <x-app-logo-icon class="size-9 fill-current text-black dark:text-white" />
                    </span> -->
                    <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                </a>
            </h1>

            <hr>
            
            {{ $slot }}

        </div>
    </div>

</body>

</html>
