@extends('user.layout')
@section('content')
<div class="container slider-content">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <h2>اصبح  البحث عن العقارات سهلا للغاية</h2>
            <p>يمكنك تجربة البحث بسهولة</p>
            <div class="search-form wow pulse" data-wow-delay="0.8s">
                <form action="" class="form-inline">
                    <button class="btn toggle-btn" type="button">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="الك">
                    </div>
                    <div class="form-group">
                        <select id="lunchBegins" class="selectpicker" data-live-search="true"
                            data-live-search-style="begins" title="حدد المدينة ">
                            <option>حلب</option>
                            <option>حمص</option>
                            <option>حماة</option>
                            <option>دمشق</option>
                            <option>اللاذقية</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="basic" class="selectpicker show-tick form-control">
                            <option>الحي</option>
                            <option>Rent</option>
                            <option>Buy</option>
                            <option>Used</option>
                        </select>
                    </div>
                    <button class="btn search-btn" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <div style="display: none;" class="search-toggle">
                        <div class="search-row">
                            <div class="form-group mar-r-20">
                                <label for="price-range">السعر ($):</label>
                                <input type="text" class="span2" value="" data-slider-min="0"
                                    data-slider-max="600" data-slider-step="5" data-slider-value="[0,450]"
                                    id="price-range">
                                <br>
                                <b class="pull-left color">2000$</b>
                                <b class="pull-right color">100000$</b>
                            </div>
                            <div class="form-group mar-l-20">
                                <label for="property-geo">المساحة (m2):</label>
                                <input type="text" class="span2" value="" data-slider-min="0"
                                    data-slider-max="600" data-slider-step="5" data-slider-value="[50,450]"
                                    id="property-geo">
                                <br>
                                <b class="pull-left color">40m</b>
                                <b class="pull-right color">12000m</b>
                            </div>
                        </div>
                        <div class="search-row">
                            <div class="form-group mar-r-20">
                                <label for="min-baths">الحمامات:</label>
                                <input type="text" class="span2" value="" data-slider-min="0"
                                    data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]"
                                    id="min-baths">
                                <br>
                                <b class="pull-left color">1</b>
                                <b class="pull-right color">10</b>
                            </div>
                            <div class="form-group mar-l-20">
                                <label for="min-bed">عدد الغروف:</label>
                                <input type="text" class="span2" value="" data-slider-min="0"
                                    data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]"
                                    id="min-bed">
                                <br>
                                <b class="pull-left color">1</b>
                                <b class="pull-right color">10</b>
                            </div>
                        </div>
                        <br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
