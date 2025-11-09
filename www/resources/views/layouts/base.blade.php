<!DOCTYPE html>
<html lang="en" @yield('html-attributes')>

<head>
    @include('layouts.partials.title-meta')

    <!--===== CSS LINK =======-->
    @vite(['resources/scss/main.scss'])

    @yield('css')

</head>

<body @yield('body-attributes')>

    @include('layouts.partials.loader')
    @include('layouts.partials.searchbox')

    @yield('header')

    @yield('content')

    @yield('scripts')

    @vite(['resources/js/main.js'])
</body>

</html>
