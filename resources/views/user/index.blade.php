<!DOCTYPE html>
<html lang="ar">
@include('user.partials.head')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Header Connect -->
    @include('user.partials.header')
    <!-- End Header Connect -->

    <!-- Navbar -->
    @include('user.partials.navbar')
    <!-- End Navbar -->

    <!-- Slider Area -->
    @include('user.partials.slider')
    <!-- End Slider Area -->

    <!-- Property Area -->
    <div class="content-area recent-property" style="padding-bottom: 60px; background-color: rgb(252, 252, 252);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padding-top-40 properties-page">
                    <div class="row">
                        <!--Catigories-->

                        @include('user.partials.catigories')

                        <!--End Catigories-->

                        <!--Style view-->
                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);">
                                <i class="fa fa-th-list"></i>
                            </a>
                            <a class="layout-grid active" href="javascript:void(0);">
                                <i class="fa fa-th"></i>
                            </a>
                        </div>
                        <!--End Style view-->
                    </div>
                    <div class="row">
                        <div id="list-type" class="proerty-th">

                            <!--card-->
                            @include('user.partials.card')
                            <!--End card-->

                        </div>
                    </div>

                    <!--paginate-->

                    @include('user.components.pagination')

                    <!--End paginate-->

                </div>
            </div>
        </div>
    </div>

    <!-- End Property Area -->

    <!-- Footer -->
    @include('user.partials.footer')
    <!-- End Footer -->

    <!-- Scripts -->
    @include('user.partials.script')
    <!--End Scripts -->
</body>

</html>
