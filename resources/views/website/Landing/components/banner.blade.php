<div class="banner">
    <div class="w3l_banner_nav">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Make your <span>food</span> with Spicy.</h3>
                            <div class="more">
                                <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3>Make your <span>food</span> with Spicy.</h3>
                            <div class="more">
                                <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>upto <i>50%</i> off.</h3>
                            <div class="more">
                                <a href="#" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="{{asset('landing/css/flexslider.css')}}" type="text/css" media="screen" property="" />
        <script defer src="{{asset('landing/js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->

<div class="banner_bottom">
        <div class="col-md-4 wthree_banner_bottom_left" style="padding-left: 30px">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{asset('landing/images/4.jpg')}}" alt=" " class="img-responsive" />
                <div class="wthree_banner_bottom_left_grid_pos">
                    <h4>Discount Offer <span>25%</span></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left" style="padding-left: 30px">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{asset('landing/images/5.jpg')}}" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos">
                    <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left" style="padding-left: 30px">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{asset('landing/images/6.jpg')}}" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos1">
                    <h3>Save <span>Upto</span> ৳100</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    <div class="clearfix"> </div>
</div>