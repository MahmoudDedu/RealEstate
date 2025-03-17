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
                    <!-- صف العنوان والفرز -->
                    <div class="row">
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="active">
                                    <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                        Property Date <i class="fa fa-sort-amount-asc"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                        Property Price <i class="fa fa-sort-numeric-desc"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="items-per-page">
                                <label for="items_per_page"><b>Property per page :</b></label>
                                <div class="sel">
                                    <select id="items_per_page" name="per_page">
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                        <option value="9">9</option>
                                        <option selected="selected" value="12">12</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);">
                                <i class="fa fa-th-list"></i>
                            </a>
                            <a class="layout-grid active" href="javascript:void(0);">
                                <i class="fa fa-th"></i>
                            </a>
                        </div>
                    </div>
                    <!-- صف قائمة العقارات -->
                    <div class="row">
                        <div id="list-type" class="proerty-th">
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html">
                                            <img src="{{ asset('assets/user/img/demo/property-3.jpg') }}" alt="Property Image">
                                        </a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h5>
                                            <a href="property-1.html">Super nice villa</a>
                                        </h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b>Area :</b> 120m</span>
                                        <span class="proerty-price pull-right">$ 300,000</span>
                                        <p style="display: none;">
                                            Suspendisse ultricies nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...
                                        </p>
                                        <div class="property-icon">
                                            <img src="{{ asset('assets/user/img/icon/bed.png') }}" alt="Bed">(5) |
                                            <img src="{{ asset('assets/user/img/icon/shawer.png') }}" alt="Shower">(2) |
                                            <img src="{{ asset('assets/user/img/icon/cars.png') }}" alt="Cars">(1)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- يمكن إضافة المزيد من بطاقات العقارات هنا -->
                        </div>
                    </div>
                    <!-- صف الترقيم -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">
                                <div class="pagination">
                                    <ul>
                                        <li><a href="#">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End properties-page -->
            </div>
        </div>
    </div>

    <!-- End Property Area -->

    <!-- Footer -->
    @include('user.partials.footer')
    <!-- End Footer -->

    <!-- Scripts -->
    @include('user.partials.script')
</body>

</html>
