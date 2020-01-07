<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.front.head')
    @yield('style')
</head>

<body>

    @include('layouts.front.header')

    <!-- box-intro -->
    @yield('intro')
    <!-- end box-intro -->

    <!-- portfolio div -->
    @yield('content')
    <!-- end portfolio div -->

    @include('layouts.front.footer')
    @yield('scripts')

</body>

</html>
