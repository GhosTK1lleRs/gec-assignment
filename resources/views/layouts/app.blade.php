<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.footer_scripts')
</body>

</html>
