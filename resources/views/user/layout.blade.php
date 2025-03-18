<!DOCTYPE html>
<html lang="ar">
@include('user.partials.head')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Navbar -->
    @include('user.partials.navbar')
    <!-- End Navbar -->

    <!-- Slider Area -->
    @include('user.partials.slider')
    <!-- End Slider Area -->

    <!-- content Area -->
    @yield('content')
    <!-- End content Area -->

    <!-- Footer -->
    @include('user.partials.footer')
    <!-- End Footer -->

    <!-- Scripts -->
    @include('user.partials.script')
</body>

</html>
