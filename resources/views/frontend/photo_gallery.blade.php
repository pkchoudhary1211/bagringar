@include('frontend.include.header')
<!-- inner Title Start -->
<div class="indx_title_main_wrapper float_left">
        <div class="title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 full_width">
                    <div class="indx_title_left_wrapper">
                        <h2>Photo Gallary</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <li><a href="{{route('home_index')}}">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Photo Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->
	<!--gallery wrapper start-->
    <div class="portfolio_gridIII float_left">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ft_left_heading_wraper left_gallery_heading">
                        <h1>media gallery</h1>

                    </div>

                     <ul class="protfoli_filter III_filter">
                        <li class="active" data-filter="*"><a href="#"> all</a></li>

                        <li data-filter=".website"><a href="#">shoes</a></li>
                        <li data-filter=".design"><a href="#">player</a></li>
                        <li data-filter=".ux_ui"><a href="#">stadium</a></li>
                    </ul>
                </div>
            </div>
        <div class="row portfoli_inner">
            <!-- Items -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website ux_ui">
                <div class="portfolio_item">
                    <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="{{asset('frontend/images/inner/pic1.jpg')}}"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Items -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website ux_ui">
                <div class="portfolio_item">
                <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="images/inner/pic2.jpg"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Items -->
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website design *">
                <div class="portfolio_item">
                <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="images/inner/pic3.jpg"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Items -->
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 * design">
                <div class="portfolio_item">
                <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="images/inner/pic4.jpg"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Items -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website design">
                <div class="portfolio_item">
                <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="images/inner/pic5.jpg"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Items -->
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 * ux_ui">
                <div class="portfolio_item">
                <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="images/inner/pic6.jpg"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Items -->
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 website *">
                <div class="portfolio_item">
                <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="images/inner/pic7.jpg"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
			  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 *">
                <div class="portfolio_item">
                <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="images/inner/pic2.jpg"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Items -->
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ux_ui design">
                <div class="portfolio_item">
                <img src="{{asset('frontend/images/inner/pic1.jpg')}}" alt="">
                    <div class="portfolio_hover">
                        <a href="#">the  final championship</a>
                        <div class="zoom_popup">
                            <a class="img-link" href="images/inner/pic8.jpg"> <i class="flaticon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
			<div class="hs_btn_wrapper match_btn gallery_Btn">
                   <ul>
                        <li><a href="#">load more</a></li>
                    </ul>
           </div>
        </div>
    </div>
    </div>

@include('frontend.include.footer')