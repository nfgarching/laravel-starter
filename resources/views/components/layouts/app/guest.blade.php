<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>

    {{ $slot }}

    @include('layouts.script')

</body>

</html>
