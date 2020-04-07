<?php include('php/conactmail.php');
?>
<!DOCTYPE html>
<!--
Project:  Typhoon - Solar Energy HTML Template
Version:  1.0.0
Author:   Webstrot
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--[endif]-->


<!-- Mirrored from webstrot.com/html/typhoon/typhoon_html/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Mar 2020 20:26:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Amesproject</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="smart pest" />
    <meta name="keywords" content="solar system /sun & wind" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="venobox/css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/camera.css">
    <link rel="stylesheet" type="text/css" href="css/style_2.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive_2.css" />
	<link href='../../../../api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.png" />
    <script>
        $(document).ready(function(e) {
            $("#contactform").on('submit', (function(e) {
                e.preventDefault();
                $("#mail-status").hide();
                $('#send-message').hide();
                $('#loader-icon').show();
                $("#contactform").show();
                $.ajax({
                    url: "./php/conactmail.php",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        "name": $('input[name="name"]').val(),
                        "email": $('input[name="email"]').val(),
                        "phone": $('input[name="phone"]').val(),
                        "comments": $('textarea[name="comments"]').val(),
                        "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                    },
                    success: function(response) {
                        $("#mail-status").show();
                        $('#loader-icon').hide();
                        if (response.type == "error") {
                            $('#send-message').show();
                            $("#mail-status").attr("class", "error");
                        } else if (response.type == "message") {
                            $('#send-message').hide();
                            $("#mail-status").attr("class", "success");
                        }
                        $("#mail-status").html(response.text);
                    },
                    error: function() {}
                });
            }));
        });
    </script>
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="images/preloader.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!--sw header wrapper start-->

    <div class="transparent-menu header-area hidden-menu-bar stick">

        <div class="container">

            <div class="bt_main_menu_wrapper">
                <div class="main-menu-wrapper clear-fix">

                    <div class="logo float-left">
                        <a href="index.html"><img src="images/logon.jpg" class="img-responsive" alt="logo" style="width: 100px; height: 50px;"></a>
                        <!-- <a href="index.html"><img src="images/log1.jpg " class="img-responsive" alt="logo"></a> -->
                    </div>

                </div>
                <div class="sc_navigation hidden-sm hidden-xs">
                    <nav id="primary-nav" class="dropdown nav_left_margin">
                        <ul class="dropdown menu navigation cart_dropdown_wrapper">
                            <li><a href="index.html" title="">Home</a>
								 <!--ul>
                                     <li class="dropdown_hover"><a href="index.html" title=""> home 1</a></li>
                                      <li class="dropdown_hover"><a href="index_2.html" title=""> home 2</a></li>
                                      <li class="dropdown_hover"><a href="index_3.html" title=""> home 3</a></li>
                                      <li class="dropdown_hover"><a href="index_4.html" title=""> home 4</a></li>
                                      <li class="dropdown_hover"><a href="index_5.html" title=""> home 5</a></li>
								</ul-->
                                </li>
                                <li><a href="about_us.html" title="">about us</a>
                                </li>
                                <li><a href="services.html" title="">services</a>
                                </li>
                                <li><a href="gallery.html" title="">Gallery</a>
								 <!--ul>
                                        <li class="dropdown_hover"><a href="project_2.html" title=""> project 2</a></li>
                                        <li class="dropdown_hover"><a href="project_3.html" title=""> project 3</a></li>
                                        <li class="dropdown_hover"><a href="project_4.html" title=""> project 4</a></li>
                                        <li class="dropdown_hover"><a href="project_fullwidth.html" title="">project fullwidth</a></li>
                                        <li class="dropdown_hover"><a href="project_single.html" title=""> project single</a></li>

                                    </ul-->
                                </li>
                                <!--li><a href="team.html" title="">team</a>
                                    <ul>
                                        <li class="dropdown_hover"><a href="team.html" title=""> team</a></li>
                                        <li class="dropdown_hover"><a href="team_details.html" title="">team details</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog_single.html" title="">blog</a>
                                    <ul>
                                        <li class="dropdown_hover"><a href="blog_categories.html" title=""> blog categories</a></li>
                                        <li class="dropdown_hover"><a href="blog_category.html" title=""> blog category</a></li>
                                        <li class="dropdown_hover"><a href="blog_single.html" title=""> blog single</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop_sidebar.html" title="">shop</a>
                                    <ul>
                                        <li class="dropdown_hover"><a href="shop_sidebar.html" title="">shop sidebar</a></li>
                                        <li class="dropdown_hover"><a href="shop_fullwidth.html" title=""> shop fullwidth</a></li>
                                        <li class="dropdown_hover"><a href="shop_single.html" title=""> shop single</a></li>
                                    </ul>
                                </li-->
                                <li><a href="contact_us.html" title="">Contact us</a>
								 <!--ul>
                                      <li class="dropdown_hover"><a href="contact_us.html" title="">contact us</a></li>
                                      <li class="dropdown_hover"><a href="error.html" title=""> 404 error</a></li>
                                </ul-->
                                </li>
                            <!--li class="caret_btn">
                                <a href="#"><i class="fa fa-shopping-basket"></i><span>2</span></a>
                                <ul>
                                    <li>
                                        <div class="cc_cart_wrapper1 menu-button">
                                            <div class="cc_cart_img_wrapper">
                                                <img src="images/cart_1.png" alt="cart_img" />
                                            </div>
                                            <div class="cc_cart_cont_wrapper">
                                                <h4><a href="#">put a title here</a></h4>
                                                <p>1 <span> $145 </span> </p>
                                                <h5><i class="fa fa-times"></i></h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cc_cart_wrapper1 menu-button">
                                            <div class="cc_cart_img_wrapper">
                                                <img src="images/cart_2.png" alt="cart_img" />
                                            </div>
                                            <div class="cc_cart_cont_wrapper">
                                                <h4><a href="#">put a title here</a></h4>
                                                <p>1 <span> $145 </span></p>
                                                <h5><i class="fa fa-times"></i></h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cc_cart_wrapper1 menu-button">
                                            <div class="cc_cart_img_wrapper">
                                                <img src="images/cart_3.png" alt="cart_img" />
                                            </div>
                                            <div class="cc_cart_cont_wrapper">
                                                <h4><a href="#">put a title here</a></h4>
                                                <p>1 <span> $145 </span></p>
                                                <h5><i class="fa fa-times"></i></h5>
                                            </div>
                                        </div>
                                        <div class="btm_cart_wrapper">
                                            <h5>$450.00</h5>
                                            <p>3 items</p>
                                        </div>
                                        <div class="cart_checkout_btn">

                                            <a href="#!" class="waves-effect waves-light waves-ripple">checkout</a>

                                        </div>
                                    </li>

                                </ul>
                            </li-->

                            <!-- Menu -->
                            <!--search -->
                        </ul>
                        <div class="header_right_inner_page">
                            <!--div class="search-wrapper">
                                <div class="et_navbar_search_wrapper hidden-xs">
                                    <div class="et_search_bar" id="search_button">
                                        <a href="#"><i class="fa fa-search waves-effect waves-light" aria-hidden="true"></i></a>
                                    </div>
                                    <div id="search_open" class="et_search_box">
                                        <input type="text" placeholder="Search text...">
                                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sw_icon_bar">
                                <ul class="tc_login_btn_wrapper">
                                    <li class="dropdown tc_login_btn">
                                        <a class="dropdown-toggle hvr-float-shadow active waves-effect waves-light" data-toggle="dropdown" href="#"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu tc_menu_fixed_border">
                                            <li class="dropdown_hover"><a href="#">FAQ's</a></li>
                                            <li class="dropdown_hover"><a href="#">Track Order</a></li>
                                            <li class="dropdown_hover"><a href="#">Register</a></li>
                                            <li class="dropdown_hover"><a href="#">Login</a></li>
                                            <li class="dropdown_hover hidden-lg"><a href="#">Free Quote</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div-->

                        </div>

                    </nav>
                </div>
                <!-- /.main-menu-wrapper -->
                <!-- mobile menu area start -->
                <div class="mobile-menu-area visible-sm visible-xs">
                    <div class="container header_container">
                        <div class="row">

                            <div class="col-xs-12 cc_menu_top_margin">
                                <!-- mobile menu start -->
                                <div class="mobile-menu">
                                    <nav>
                                        <ul class="nav">
                                            <li><a href="index.html">Home</a>
												 <!--ul>
													 <li><a href="index.html" title=""> home 1</a></li>
													  <li><a href="index_2.html" title=""> home 2</a></li>
													  <li><a href="index_3.html" title=""> home 3</a></li>
													  <li><a href="index_4.html" title=""> home 4</a></li>
													  <li><a href="index_5.html" title=""> home 5</a></li>
												</ul-->
                                                </li>
                                                <li><a href="about_us.html">about us</a>
                                                </li>
                                                <li><a href="services.html">services</a>
                                                </li>
                                                <li><a href="gallery.html">Gallery</a>
												 <!--ul>
													<li><a href="project_2.html" title=""> project 2</a></li>
													<li><a href="project_3.html" title=""> project 3</a></li>
													<li><a href="project_4.html" title=""> project 4</a></li>
													<li><a href="project_fullwidth.html" title="">project fullwidth</a></li>
													<li><a href="project_single.html" title=""> project single</a></li>

												</ul-->
                                                </li>
                                                <!--li><a href="team.html">team</a>
                                                    <ul>
														<li><a href="team.html" title=""> team</a></li>
														<li><a href="team_details.html" title="">team details</a></li>
													</ul>
                                                </li>
                                                <li><a href="blog_single.html" title="">blog</a>
                                                     <ul>
														<li><a href="blog_categories.html" title=""> blog categories</a></li>
														<li><a href="blog_category.html" title=""> blog category</a></li>
														<li><a href="blog_single.html" title=""> blog single</a></li>
													</ul>
                                                </li>
                                                <li><a href="shop_sidebar.html" title="">shop</a>
                                                   <ul>
														<li><a href="shop_sidebar.html" title="">shop sidebar</a></li>
														<li><a href="shop_fullwidth.html" title=""> shop fullwidth</a></li>
														<li><a href="shop_single.html" title=""> shop single</a></li>
													</ul>
                                                </li-->
                                                <li><a href="contact_us.html"> contact us</a>
												 <!--ul>
													  <li><a href="contact_us.html" title="">contact us</a></li>
													  <li><a href="error.html" title=""> 404 error</a></li>
												</ul-->
                                                </li>
                                            <!--li class="caret_btn">
                                                <a href="#"><i class="fa fa-shopping-basket"></i><span>2</span></a>
                                                <ul>
                                                    <li>
                                                        <div class="cc_cart_wrapper1 menu-button">
                                                            <div class="cc_cart_img_wrapper">
                                                                <img src="images/cart_1.png" alt="cart_img" />
                                                            </div>
                                                            <div class="cc_cart_cont_wrapper">
                                                                <h4><a href="#">put a title here</a></h4>
                                                                <p>1 <span> $145 </span> </p>
                                                                <h5><i class="fa fa-times"></i></h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cc_cart_wrapper1 menu-button">
                                                            <div class="cc_cart_img_wrapper">
                                                                <img src="images/cart_2.png" alt="cart_img" />
                                                            </div>
                                                            <div class="cc_cart_cont_wrapper">
                                                                <h4><a href="#">put a title here</a></h4>
                                                                <p>1 <span> $145 </span></p>
                                                                <h5><i class="fa fa-times"></i></h5>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cc_cart_wrapper1 menu-button">
                                                            <div class="cc_cart_img_wrapper">
                                                                <img src="images/cart_3.png" alt="cart_img" />
                                                            </div>
                                                            <div class="cc_cart_cont_wrapper">
                                                                <h4><a href="#">put a title here</a></h4>
                                                                <p>1 <span> $145 </span></p>
                                                                <h5><i class="fa fa-times"></i></h5>
                                                            </div>
                                                        </div>
                                                        <div class="btm_cart_wrapper">
                                                            <h5>$450.00</h5>
                                                            <p>3 items</p>
                                                        </div>
                                                        <div class="cart_checkout_btn">

                                                            <a href="#!" class="waves-effect waves-light waves-ripple">checkout</a>

                                                        </div>
                                                    </li>

                                                </ul>
                                            </li-->

                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile menu area end -->

                <!-- /.main-menu-wrapper -->
            </div>
        </div>

        <!--div class="header_btn">
            <ul>
                <li>
                    <a href="#!" class="waves-effect waves-light waves-ripple">free quote</a>
                </li>
            </ul>
        </div-->
    </div>
    <!--sw header wrapper end-->
    <!-- page_title_section start -->
    <div class="page_title_section">
        <div class="page_header">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li><a href="index.html"> Home </a></li>
                                <li> Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_title_section end -->
    <!--sw about us top start-->
    <div class="sw_about_top_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_abot_top_txt_wrapper">

                        <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                            <h1>contact us for queries</h1>
                            <img src="images/hd_line_dark.png" alt="title">
                            <!-- <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimnim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_about_top_img">
                        <img src="images/iner_contactt.png" alt="img">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw about us top end-->
    <!-- Google Map start-->
   <div id='map'>
	</div>
    <!-- Google Map end-->
    <!-- contact us section start -->
    <div class="contact-section">
        <div class="container">
            <div class="holder">
                <div class=" row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <form method="POST" novalidate="novalidate" action="" name="contactform" id="contactform">
                            <div class="cont_main_section">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="contect_form1">
                                        <input type="text" name="name" placeholder="Name*" class="require">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="contect_form1">
                                        <input type="email" name="email" placeholder="Email*" class="require"
                                            data-valid="email" data-error="Email should be valid.">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="contect_form1">
                                        <input type="text" name="phone" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="contect_form4">
                                        <textarea rows="5" name="comments" placeholder="Message"
                                            class="require"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="g-recaptcha" data-sitekey="6Le667QUAAAAAMkL14M8MFJ6SJ3XkebLXfARGcS3"></div>
                                    <div class="response" id="mail-status"></div>
                                    <div class="cntct_2_btn_wrapper">
                                        <button type="submit"
                                            class="submitForm waves-effect waves-light waves-ripple" id="send-message" style="clear:both;" value="SEND MESSAGE" >send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="loader-icon" style="display:none;"><img src="images/LoaderIcon.gif" /></div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                        <div class="contact-box">
                            <div class="wrapper_second_useful_2">
                                <div class="sw_left_heading_wraper sw_dark_heading_wraper ppp">
                                    <h1>contact info</h1>
                                    <img src="images/hd_line_dark.png" alt="title">
                                    <!-- <p>Donec quis amet risus vulputate maximus eget eget arcu.</p> -->
                                </div>
                               <ul>
                                   <li>
                                        <h6>+2348063400669</h6>
                                        <h6>+23230515350</h6>
                                        <h6>+2349067782414</h6>
                                        <!-- <li> -->
                                        <!-- <h1>+800 568 322</h1></li> --> 
                                   </li>
                                
                                   <li><i class="flaticon-new-email-outline"></i>amesprojectltd@gmail.com
                                   </li>
                                   <!--li><i class="flaticon-internet"></i>www.example.com
                                   </li-->

                                   <li><i class="flaticon-placeholder"></i>5 Beach Road, Lumley, Freetown Sierra Leone
                                   </li>
                                   <li><i class="flaticon-placeholder"></i>Umuosoko, Awomukwu, Ikwuano LGA Abia State,
                                       Nigeria
                                   </li>                                                                    
                                </ul>
                            </div>
                            <div class="abotus_content">

                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="hidden-xs"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact wrapper end-->
    <!--sw our newsletter wrapper start-->
    <!--div class="sw_our_newsletter_wrapper">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="sw_nl_heading_wrapper sw_our_news_txt">
                        <i class="flaticon-rocket"></i>
                        <h2>Subscribe Our Newsletter</h2>
                        <h6>Get the latest News & Offers..</h6>

                        <div class="prs_newsletter_field">
                            <input type="text" placeholder="Email*">
                            <button type="submit" class="waves-effect waves-light waves-ripple">Submit</button>
                        </div>
                        <!-- <p>True environmental protection lies in loving the mountains, the oceans and in cher>
                            <!-- <br> all creation.</p> >

                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="sw_letter_img_wrapper">
                        <img src="images/fav.jpg" alt="img"
                            style="border-radius: 10rem; width: 60%; margin-bottom: 5rem;">

                        <!-- <img src="images/abt_ltr_img.png" alt="img"> >

                    </div>
                </div>
            </div>
        </div>

    </div-->
    <!-- sw our newsletter section end-->
    <!-- sw footer section start-->
    <div class="sw_footer_main_wrapper">

        <div class="circle_btm">
            <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i></a>
        </div>
        <div class="footer_wrapper">

            <div class="container">

                <div class="row">
                    <div class="foter_padder">
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div class="wrapper_second_about">
                                <div class="wrapper_first_image">
                                    <a href="index.html"><img src="images/logon.jpg" class="img-responsive" alt="logo" style="width: 100px; height: 50px;"></a>
                                    <!-- <a href="index.html"><img src="images/logon.jpg" class="img-responsive" alt="logo" /></a> -->
                                </div>
                                <div class="abotus_content">
                                    <p>AMESPROJECT is a company dedicated towards sustainable agriculture, recycling
                                        of all kinds wastes, as well as promoting sustainable environment.</p>
                                    <!-- <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis aks nostrud exercitation ullamco.</p> -->
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
                            <div class="wrapper_second_useful">
                                <h4>useful links </h4>
                                <img src="images/hd_line_dark.png" alt="title" class="pd_btm_3">
                                <ul>
                                    <li><a href="about_us.html"><i class="fa fa-angle-right"></i>About us</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Faq </a>
                                    </li>
                                    <li><a href="contact_us.html"><i class="fa fa-angle-right"></i>contact Us </a>
                                    </li>
                                    <li><a href="services.html"><i class="fa fa-angle-right"></i>Services</a>
                                    </li>
                                    <li><a href="gallery.html"><i class="fa fa-angle-right"></i>Gallery</a> </li>
                                </ul>

                            </div>
                        </div>
                        <!-- <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
                            <div class="wrapper_second_useful wrapper_second_links">

                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>sitemap</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>FAQ </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>awards </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>tstimonials</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>career</a> </li>
                                </ul>

                            </div>
                        </div> -->

                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div class="wrapper_second_useful wrapper_second_useful_2">
                                <h4>contact us</h4>
                                <img src="images/hd_line_dark.png" alt="title" class="pd_btm_3">
                                <ul>
                                    <li>
                                        <h4>+2348063400669</h4>
                                        <h4>+23230515350</h4>
                                        <h4>+2349067782414</h4>
                                    </li>
                                    <li><i class="flaticon-new-email-outline"></i>amesprojectltd@gmail.com
                                    </li>
                                    <!--li><i class="flaticon-internet"></i>www.example.com
                                    </li-->

                                    <li><i class="flaticon-placeholder"></i>5 Beach Road, Lumley, Freetown Sierra Leone
                                    </li>
                                    <li><i class="flaticon-placeholder"></i>Umuosoko, Awomukwu, Ikwuano LGA Abia State,
                                        Nigeria
                                    </li>
                                </ul>
                            </div>
                        </div>                   </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="section3_copyright">
                        <p>Copyright 2018&copy; AMESPROJECT</a>
                        <!-- <p>Copyright 2018 <a href="index.html"> sun & wind energy</a>. all right reserved - design by <a href="index.html">webstrot</a></p> -->
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- sw footer section end-->
    <!--main js files-->

    <script src="js/jquery_min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jqu_menu.js"></script>
    <script src="js/jqu_slickmenu.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="venobox/js/venobox.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.min.js"></script>
    <script src="js/custom_2.js"></script>
   <script src='../../../../api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
    <!--main js file end-->
	<script>
			mapboxgl.accessToken = 'pk.eyJ1IjoiYWtzaGF5aGFuZGdlIiwiYSI6InI2bzhEcUUifQ.8r-lNnjAuIZUk8pjhtxlFw';
			var map = new mapboxgl.Map({
			container: 'map', // container id
			style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
			center: [-74.50, 40], // starting position [lng, lat]
			zoom: 10 // starting zoom
			});
	</script>

</body>


<!-- Mirrored from webstrot.com/html/typhoon/typhoon_html/contact_us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Mar 2020 20:26:06 GMT -->
</html>