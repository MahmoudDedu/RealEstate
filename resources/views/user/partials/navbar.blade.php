<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="{{asset('assets/user/img/logo.png')}}" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <div class="button navbar-right">
                <a class="navbar-btn nav-button wow bounceInRight login" href="{{route('login')}}" data-wow-delay="0.4s">تسجيل الدخول</a>
                <a class="navbar-btn nav-button wow fadeInRight" href="{{route('register')}}"  data-wow-delay="0.5s">تسجيل</a>
            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="properties.html">الرئيسية</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="properties.html">العقارات</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact.html">تواصل معنا</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="{{route('user.search')}}">بحث عن عقار</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
