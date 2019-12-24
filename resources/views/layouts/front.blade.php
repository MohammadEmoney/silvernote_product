<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.front.head')
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        @include('layouts.front.header')

        <!-- box-intro -->
        @yield('intro')
        <!-- end box-intro -->
    </div>

    <!-- portfolio div -->
    @yield('content')
    <!-- end portfolio div -->

    @include('layouts.front.footer')

</body>

</html>
