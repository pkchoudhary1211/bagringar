@include('frontend.include.header')
<div class="indx_title_main_wrapper float_left">
        <div class="title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 full_width">
                    <div class="indx_title_left_wrapper">
                        <h2> contact us</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 full_width">
                    <div class="indx_title_right_wrapper">
                        <ul>
                            <li><a href="{{route('home_index')}}">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner Title End -->
    <!-- contact_icon_section start-->
    <div class="contact_icon_section float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="main rotate_blue">
                        <div class="rotate">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h4><a href="#">Address</a></h4>
                        <p>512 - omexcity, California
                            <br> California, omexcity</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="main rotate_purple">
                        <div class="rotate">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h4><a href="#">Email</a></h4>
                        <p><a href="#">hello@example.com
                                        <br>support@example.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="main rotate_green">
                        <div class="rotate">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h4><a href="#">Phone</a></h4>
                        <p>+1-804-548-5214
                            <br> +1-804-548-5215</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 <!-- contact_wrapper start -->
    <div class="contact_wrapper float_left inner_contact_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="ft_left_heading_wraper">
                        <h1>get in touch</h1>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="row">
                        <form>
                            <div class="col-md-12">
                                <div class="form-pos">
                                    <div class="form-group i-name">
                                        <label class="sr-only">Name</label>
                                        <input type="text" class="form-control require" name="full_name" required="" id="namTen-first" placeholder="Your Name*">
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="form-e">
                                    <div class="form-group i-email">
                                        <label class="sr-only">Email </label>
                                        <input type="email" class="form-control require" name="email" required="" id="emailTen" placeholder="Your Email *" data-valid="email" data-error="Email should be valid.">
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="form-s">
                                    <div class="form-group i-subject">
                                        <label class="sr-only">phone</label>
                                        <input type="text" class="form-control" name="Subject" required="" id="subjectTen" placeholder="Your Phone">
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="form-m">
                                    <div class="form-group i-message">
                                        <label class="sr-only">Your Message </label>
                                        <textarea class="form-control require" name="message" required="" rows="4" id="messageTen" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="tb_es_btn_div">
                                    <div class="response"></div>
                                    <div class="tb_es_btn_wrapper">
                                        <button type="button" class="submitForm">send now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact_right_wrapper float_left iner_contact_right_wrapper">
                        <img src="{{asset('frontend/images/inner/news_img.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact_wrapper end -->
    <!-- contact_icon_section end-->
    <!--patner slider Start -->
    <div class="patner_main_section_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="pn_slider_wraper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <img src="images/inner/logo01.png" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <img src="images/inner/logo02.png" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <img src="images/inner/logo03.png" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <img src="images/inner/logo04.png" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="pn_img_wrapper">
                                    <img src="images/inner/logo05.png" alt="patner_img">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@include('frontend.include.footer')