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

    <!-- categories Area -->
    <div class="content-area recent-property padding-top-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="row">
                        <!--Catigories-->

                        @include('user.partials.catigories')

                        <!--End Catigories-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Catigories Area -->

    <!-- Property Area -->
    <div class="content-area recent-property">
        <div class="container">
            <div class="row">
                <div id="list-type" class="proerty-th">

                    <!--card-->
                    @include('user.partials.card')
                    @include('user.partials.card')
                    @include('user.partials.card')
                    @include('user.partials.card')
                    <!--End card-->

                </div>
            </div>

            <!--paginate-->
            @include('user.components.pagination')
            <!--End paginate-->
        </div>

                <!--customer-side -->
            @include('user.partials.customer-side')
                <!-- End customer-side -->

                <!-- Count area -->
                @include('user.partials.count-area')
                <!-- End Count area -->

                <!-- boy-sale area -->
                @include('user.partials.bo-sale-area')
                <!-- End boy-sale area -->

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
