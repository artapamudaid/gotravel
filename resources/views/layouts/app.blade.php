<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.home.meta')

    <title>@yield('title')</title>

    @stack('prepend-style')

    @include('includes.home.style')

    @stack('addons-style')
</head>

<body>

    <!-- CONTENT -->

    @include('includes.home.navbar')

    @yield('content')

    @include('includes.home.footer')

    <!-- SCRIPT -->

    @stack('prepend-script')

    @include('includes.home.script')

    @stack('addons-script')
</body>

</html>