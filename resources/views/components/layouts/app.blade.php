<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head> @include('components.layouts.app.head') </head>

<body>

    @include('components.layouts.app.navbar')

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <!-- Nav tabs -->
                <div class="position-sticky pt-3 sidebar-sticky">
                    @include('components.layouts.app.navigation')
                </div>
            </nav>
            <!--Container Main start-->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <br>
                <!-- Main Alert -->
                @session('alert-message')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Wichtig!</strong> {{ Session::get('alert-message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession
                <!-- Main Header -->
                @if (isset($header))
                    {{ $header }}
                @endif
                <!-- Main Content -->
                {{ $slot }}
                <!-- Main Footer -->
                @if (isset($footer))
                    {{ $footer }}
                @else
                    @include('components.layouts.app.footer')
                @endif
            </main>
            <!--Container Main end-->
        </div>
    </div>

    @include('components.layouts.app.script')

</body>

</html>
