<!DOCTYPE html>
<html lang="ar">
@include('user.page.partials.head')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Header Connect -->
    @include('user.page.partials.header')
    <!-- End Header Connect -->

    <!-- Navbar -->
    @include('user.page.partials.navbar')
    <!-- End Navbar -->

    <!-- Slider Area -->
    @include('user.page.partials.slider')
    <!-- End Slider Area -->

    <!-- content Area -->
    @yield('content')
    <!-- End content Area -->

    <!-- Footer -->
    @include('user.page.partials.footer')
    <!-- End Footer -->

    <!-- Scripts -->
    @include('user.page.partials.script')
</body>

</html>
