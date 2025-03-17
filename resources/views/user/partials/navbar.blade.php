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
            <a class="navbar-brand" href="index.html"><img src="{{asset('assets/user')}}/img/logo.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <div class="button navbar-right">
                <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('register.html')" data-wow-delay="0.4s">Login</button>
                <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" data-wow-delay="0.5s">Submit</button>
            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                    <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home <b class="caret"></b></a>
                    <ul class="dropdown-menu navbar-nav">
                        <li>
                            <a href="index-2.html">Home Style 2</a>
                        </li>
                    </ul>
                </li>

                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="properties.html">Properties</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="property.html">Property</a></li>
                <li class="dropdown yamm-fw" data-wow-delay="0.1s">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Home pages</h5>
                                        <ul>
                                            <li>
                                                <a href="index.html">Home Style 1</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href="blog.html">Blog listing</a>  </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Property</h5>
                                        <ul>
                                            <li><a href="property-1.html">Property pages style (1)</a> </li>

                                        </ul>

                                        <h5>Properties list</h5>
                                        <ul>
                                            <li><a href="properties.html">Properties list style (1)</a> </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Property process</h5>
                                        <ul>
                                            <li><a href="submit-property.html">Submit - step 1</a> </li>

                                        </ul>
                                        <h5>User account</h5>
                                        <ul>
                                            <li><a href="register.html">Register / login</a>   </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact.html">Contact</a></li>

                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact.html">Search</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
