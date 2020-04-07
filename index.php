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
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from webstrot.com/html/typhoon/typhoon_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Mar 2020 20:09:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

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
    <link rel="stylesheet" type="text/css" href="css/meanmenu.css" />
    <link rel="stylesheet" type="text/css" href="css/slicknav.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="venobox/css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/camera.css">
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/layers.css" />
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/navigation.css" />
    <link rel="stylesheet" type="text/css" href="js/plugin/rs_slider/settings.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
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
    <div data-scroll='0' class="full_width">
        <div class="transparent-menu header-area hidden-menu-bar stick">

            <div class="container-fluid">

                <div class="bt_main_menu_wrapper">
                    <div class="main-menu-wrapper clear-fix">

                        <div class="logo float-left">
                            <a href="index.html"><img src="images/logon.jpg" class="img-responsive" alt="logo" style="width: 100px; height: 50px;"></a>
                            <!-- <a href="index.html"><img src="images/logon.jpg" class="img-responsive" alt="logo"></a> -->
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
                                </li>

                                <!-- Menu -->
                                <!--search -->
                            </ul>
                            <div class="header_right_main_wrapper">
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
                                </div>
                                <div class="header_btn">
                                    <ul>
                                        <li>
                                            <a href="#!" class="waves-effect waves-light waves-ripple">free quote</a>
                                        </li>
                                    </ul>
                                </div-->
                            </div>

                        </nav>
                    </div>
                    <!-- /.main-menu-wrapper -->
                    <!-- mobile menu area start -->
                    <div class="mobile-menu-area visible-sm visible-xs">
                        <div class="container-fluid header_container">
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
        </div>

        <!--sw header wrapper end-->
        <!--sw slider wrapper start-->
        <div class="slider_main_wrapper">
            <div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                data-alias="webproduct-light" data-source="gallery" style="background-color:#000;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_1050_1" class="rev_slider fullscreenbanner" style="display:none;"
                    data-version="5.4.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-2938" data-transition="slidevertical" data-slotamount="1"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="1500" data-thumb="" data-rotate="0"
                            data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                            data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/background-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme sec_off_img hidden-xs" id="slide-2938-layer-2"
                                data-x="['left','left','center','center']" data-hoffset="['728','465','570','60']"
                                data-y="['top','top','top','bottom']" data-voffset="['70','0','0','0']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-margintop="[0,-150,-100,-100]"
                                data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                style="z-index:6;border-width:0px;"><img src="images/vi.gif" alt=""
                                    data-ww="['653px','653px','330px','230px']"
                                    data-hh="['908px','908px','906px','944px']" data-no-retina> </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme sec_off_heading_background"
                                id="slide-2938-layer-3" data-x="['left','left','center','center']"
                                data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']"
                                data-voffset="['-50','-180','130','200']" data-fontsize="['60','60','40','30']"
                                data-lineheight="['75','75','75','60']" data-width="100%" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 11; white-space: nowrap;text-transform:capitalize; color:#ffffff; font-weight:400; font-family: 'Montserrat', sans-serif; letter-spacing:1px;">
                                Wide Range of
                                <br> Quality Products
                                <!-- <br> Solutions -->
                            </div>

                            <!-- LAYER NR. 10 -->
                            <!-- <div class="tp-caption rev-btn rev-btn waves-effect waves-light waves-ripple slider_btn_boxshdw" id="slide-2938-layer-5" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['150','20','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#1d3571;bg:#fff;bw:2px 2px 2px 2px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[25,25,25,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[25,25,25,25]" style="z-index: 1000; white-space: nowrap; font-size: 16px;font-weight: 600; color: #1d3571;font-family: 'Montserrat', sans-serif;background-color:#fff;display:inline-block; border-radius:100px;text-align:center;"><a href="#">Read More </a></div> -->

                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-67-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 1;background-color:rgba(65, 151, 211, 0.9);"> </div>

                            <!-- LAYER NR. 10 -->
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2939" data-transition="slidevertical" data-slotamount="1"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="1500" data-thumb="" data-rotate="0"
                            data-saveperformance="off" data-title="Examples" data-param1="" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/background-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme sec_off_img hidden-xs" id="slide-2938-layer-7"
                                data-x="['left','left','center','center']" data-hoffset="['728','465','570','60']"
                                data-y="['top','top','top','bottom']" data-voffset="['70','0','0','0']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-margintop="[0,-150,-100,-100]"
                                data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                style="z-index:6;border-width:0px;"><img src="images/vi_1.gif" alt=""
                                    data-ww="['653px','653px','330px','230px']"
                                    data-hh="['908px','908px','906px','944px']" data-no-retina> </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme sec_off_heading_background"
                                id="slide-2938-layer-8" data-x="['left','left','center','center']"
                                data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']"
                                data-voffset="['-50','-180','130','200']" data-fontsize="['60','60','40','30']"
                                data-lineheight="['75','75','75','60']" data-width="100%" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 11; white-space: nowrap;text-transform:capitalize; color:#ffffff; font-weight:400; font-family: 'Montserrat', sans-serif; letter-spacing:1px;">
                                Wide Range of
                                <br> Quality Products
                                <!-- <br> Solutions -->
                            </div>

                            <!-- LAYER NR. 10 -->
                            <!-- <div class="tp-caption rev-btn rev-btn waves-effect waves-light waves-ripple slider_btn_boxshdw" id="slide-2938-layer-10" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['150','20','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#1d3571;bg:#fff;bw:2px 2px 2px 2px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[25,25,25,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[25,25,25,25]" style="z-index: 1000; white-space: nowrap; font-size: 16px;font-weight: 600; color: #1d3571;font-family: 'Montserrat', sans-serif;background-color:#fff;display:inline-block; border-radius:100px;text-align:center;"><a href="#">Read More </a></div> -->
                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-67-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 1;background-color:rgba(65, 151, 211, 0.9);"> </div>

                            <!-- LAYER NR. 10 -->

                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2940" data-transition="slidevertical" data-slotamount="1"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="1500" data-thumb="" data-rotate="0"
                            data-saveperformance="off" data-title="Easy to Use" data-param1="" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/background-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme sec_off_img hidden-xs" id="slide-2938-layer-12"
                                data-x="['left','left','center','center']" data-hoffset="['728','465','570','60']"
                                data-y="['top','top','top','bottom']" data-voffset="['70','0','0','0']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"from":"z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-margintop="[0,-150,-100,-100]"
                                data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                style="z-index:6;border-width:0px;"><img src="images/leads.gif" alt=""
                                    data-ww="['653px','653px','330px','230px']"
                                    data-hh="['908px','908px','906px','944px']" data-no-retina> </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme sec_off_heading_background"
                                id="slide-2938-layer-13" data-x="['left','left','center','center']"
                                data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']"
                                data-voffset="['-50','-180','130','200']" data-fontsize="['60','60','40','30']"
                                data-lineheight="['75','75','75','60']" data-width="100%" data-height="none"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 11; white-space: nowrap;text-transform:capitalize; color:#ffffff; font-weight:400; font-family: 'Montserrat', sans-serif; letter-spacing:1px;">
                                Wide Range of
                                <br> Quality Products
                                <br> Solutions
                            </div>

                            <!-- LAYER NR. 10 -->
                            <!-- <div class="tp-caption rev-btn rev-btn waves-effect waves-light waves-ripple slider_btn_boxshdw" id="slide-2938-layer-15" data-x="['left','left','center','center']" data-hoffset="['105','90','0','0']" data-y="['middle','middle','top','top']" data-voffset="['150','20','400','420']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1750,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#1d3571;bg:#fff;bw:2px 2px 2px 2px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[25,25,25,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[25,25,25,25]" style="z-index: 1000; white-space: nowrap; font-size: 16px;font-weight: 600; color: #1d3571;font-family: 'Montserrat', sans-serif;background-color:#fff;display:inline-block; border-radius:100px;text-align:center;"><a href="#">Read More </a></div> -->
                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-67-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                data-frames='[{"delay":10,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 1;background-color:rgba(65, 151, 211, 0.9);"> </div>

                            <!-- LAYER NR. 10 -->
                        </li>
                        <!-- SLIDE  -->
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <div class="sw_spectrum_wrapper_shape">
                <div id="section10" class="section1_bottom_scroll">
                    <div class="circle"><a href="1.html"><span></span></a></div>
                </div>
                <div class="sw_banner_top_shap_img_wrapper">
                    <img src="images/image.png" alt="shape">
                </div>
            </div>
        </div>
    </div>
    <!-- sw slider section end-->
    <!-- sw spectrum section start-->
    <div data-scroll='1' class="full_width">
        <div class="sw_spectrum_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="sw_left_heading_wraper">
                            <h1>We Cover the Whole Spectrum</h1>
                            <img src="images/heading_line.png" alt="title">
                        </div>
                    </div>

                    <!-- slider start -->
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                        <div class="spectrum_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="spectrum_slider_cntnt">
                                        <div class="spectrum_slider_shadow">
                                            <img src="images/manufacturer.png" alt="title" class="img-responsive">
                                            <h2>Fertilizer Manufacturers</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="spectrum_slider_cntnt">
                                        <div class="spectrum_slider_shadow">
                                            <img src="images/nurseries.png" alt="title">
                                            <h2>Nurseries</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="spectrum_slider_cntnt">
                                        <div class="spectrum_slider_shadow">
                                            <img src="images/landscapers.png" alt="title" class="img-responsive">
                                            <h2>Landscapers</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="spectrum_slider_cntnt">
                                        <div class="spectrum_slider_shadow">
                                            <img src="images/farmers.png" alt="title" class="img-responsive">
                                            <h2>Farmers</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="spectrum_slider_cntnt">
                                        <div class="spectrum_slider_shadow">
                                            <img src="images/government.png" alt="title" class="img-responsive">
                                            <h2>Government Agencies</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="spectrum_slider_cntnt">
                                        <div class="spectrum_slider_shadow">
                                            <img src="images/golf.png" alt="title" class="img-responsive">
                                            <h2>Golf Courses</h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--sw spectrum wrapper end-->
    <!--sw discover wrapper start-->
    <div class="sw_discver_wrapper">
        <div class="discover_overlay"></div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/image11.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_disc_txt_wrapper">

                        <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                            <h1>Discover Our Services</h1>
                            <img src="images/hd_line_dark.png" alt="title">
                            <!-- <p>Donec quis magna sit amet risus vulputate maximus eget eget arcu. Praesent sed molestie tortor. </p> -->
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <!-- <i class="flaticon-garbage"></i> -->
                            </div>
                            <div class="sw_disc_head_text">
                                <h5>Waste Collection</h5>
                                <p>We provide municipalities with an economic alternative for the disposal of human,
                                    industral, construction, demolition generated and agricultural waste.</p>
                            </div>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <!-- <i class="flaticon-wind-turbine"></i> -->
                            </div>
                            <div class="sw_disc_head_text">
                                <h5>Compostion Of Waste</h5>
                                <p>Our potential customers will benefit from numerous compost soil enhancing
                                    characteristics.</p>
                            </div>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <!-- <i class="flaticon-power"></i> -->
                            </div>
                            <div class="sw_disc_head_text">
                                <h5>Recycling Of Waste</h5>
                                <p>Our recycled waste will be targeted towards fertilizer manufacturers, nurseries,
                                    landscapers, farmers, government agencies, golf courses, etc.</p>
                            </div>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <!-- <i class="flaticon-power"></i> -->
                            </div>
                            <div class="sw_disc_head_text">
                                <h5>Marketing Of Waste</h5>
                                <p>We market waste from municipalities for use as consumer goods and meet the growing
                                    demand for organic soil enhancer and fertilizer.</p>
                            </div>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <!-- <i class="flaticon-power"></i> -->
                            </div>
                            <div class="sw_disc_head_text">
                                <h5>Processing Of Waste</h5>
                                <p> We accept human waste sludge at nominal charge process it into a useful product to
                                    achieve waste to wealth.</p>
                            </div>
                        </div>
                        <div class="sw_desc_btm_txt">
                            <div class="sw_disc_image">
                                <!-- <i class="flaticon-power"></i> -->
                            </div>
                            <div class="sw_disc_head_text">
                                <h5>Mining Of Solid Minerals</h5>
                                <p> We mine and deal on solid minerals like: gold, diamond, copper, etc from Sierra
                                    Leone.</p>
                            </div>
                        </div>

                        <!--div class="disc_btn">
                            <ul>
                                <li>
                                    <a href="#!" class="waves-effect waves-light waves-ripple">view all</a>
                                </li>
                            </ul>

                        </div-->

                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 col-sm-12 col-xs-12 clm_img">
                    <div class="sw_right_img_wrapper">
                        <div class="sw_disc_img_overlay"></div>
                        <img src="images/recycle2.jpg" alt="About" class="img-responsive sw_right_img_div">

                        <div class="sw_disc_img_btm">
                            <img src="images/recycle3.jpg" alt="About" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/image.png" alt="shape">
        </div>
    </div>
    <!-- sw discover section end-->
    <!-- sw project section start-->
    <div class="sw_project_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_center_heading_wrapper">
                        <h1>Our Gallery</h1>
                        <img src="images/heading_line.png" alt="title">
                        <!-- <p>Donec quis magna sit amet risus vulputate maximus eget eget arcu. Praesent sed molestie tortor. </p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-area">

            <div class="row">
                <div id="gallery">
                    <!--div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="filter filter-demo portfolio-nav galery_2_wraper my_slide_filter">
                            <ul>
                                <li class="button galery_hover_div is-checked waves-effect waves-light waves-ripple" data-filter="*">
                                    all
                                </li>
                                <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".branding">
                                    household
                                </li>

                                <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".ux">
                                    organization</li>
                                <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".rresentation">
                                    research</li>

                                <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".web">
                                    solar pannels</li>

                                <li class="button galery_hover_div waves-effect waves-light waves-ripple" data-filter=".photoshop">
                                    wind energy</li>
                            </ul>
                        </div>
                    </div-->

                    <div class="grid galler_2_btm_section">

                        <div class="grid-item rresentation branding * pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/project1.jpg" alt="" class="img-responsive" />

                                    <div class="tab_img_overlay">
                                        <a href="images/project1.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="grid-item ux * photoshop pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/project2.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/project2.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="grid-item ux branding photoshop pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/project3.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/project3.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="grid-item rresentation web branding * pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/project4.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/project4.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->
                                    </div>

                                </div>
                            </div>
                        </div>
							<div class="grid-item rresentation web * pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/project5.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/project5.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->
                                    </div>

                                </div>
                            </div>
                        </div>
						<div class="grid-item rresentation web branding * pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/project6.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/project6.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="grid-item rresentation photoshop branding pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over ">

                                    <img src="images/project7.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/project7.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="grid-item web branding pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/project8.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/project8.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="grid-item web rresentation pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/project9.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/project9.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <!-- <h1>project title here</h1> -->
                                        <!-- <p>(solar pannels)</p> -->
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="grid-item web photoshop pd_2">
                            <div class="gallery-list img-effect zoom-slow">
                                <div class="sp_img_box_overlay"></div>
                                <div class="over">

                                    <img src="images/pj_8.jpg" alt="" class="img-responsive" />
                                    <div class="tab_img_overlay">

                                        <a href="images/pj_8.jpg" class="venobox info" data-title="PROJECT TITTLE" data-gall="gall12">
                                            <i class="fa fa-arrows-alt"></i> </a>
                                        <h1>project title here</h1>
                                        <p>(solar pannels)</p>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- sw project section end-->
    <!--sw newsletter wrapper start-->
    <!--div class="sw_news_letter_wrapper">
        <div class="container">
            <div class="sw_nl_heading_wrapper">
                <i class="flaticon-rocket"></i>
                <h2>Get Free Consultancy About Your Project</h2>

            </div>

            <div class="sw_nl_form_wrapper">

                <div class="disc_btn ltr_btn">
                    <ul>
                        <li>
                            <a href="#!" class="waves-effect waves-light waves-ripple">ask a question</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div-->
    <!--sw newsletter wrapper end-->
    <!-- sw choose service wrapper start-->
    <div class="sw_chose_service_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_center_heading_wrapper">
                        <h1>Why Choose Our Quality Product </h1>
                        <img src="images/heading_line.png" alt="title">
                        <!-- <p>Donec quis magna sit amet risus vulputate maximus eget eget arcu. Praesent sed molestie tortor. </p> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="chose_text_wrapper_left">
                        <div class="chose_icon_wrapper_list">

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_1.png" alt="title">
                            </div>

                            <div class="chose_icon_content_left">
                                <h4>Made in Africa</h4>
                                <!-- <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p> -->
                            </div>

                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_2.png" alt="title">
                            </div>

                            <div class="chose_icon_content_left">
                                <h4>Quality Product</h4>
                                <!-- <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p> -->
                            </div>

                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_6.png" alt="title">
                            </div>

                            <div class="chose_icon_content_left">
                                <h4>Products Can Be Reused</h4>
                                <!-- <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 hidden-sm hidden-xs wow  bounceIn animated"
                    data-wow-duration="1.3s"
                    style="visibility: visible; animation-duration: 1.3s; animation-name: bounceIn;">
                    <div class="section2_img_wrapper">
                        <!-- <img class="img-responsive" src="images/waste3.jpg" alt="img"> -->
                        <img class="img-responsive" src="images/waste3.jpg" alt="img" style="border-radius: 5rem;">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 hidden-sm hidden-xs">
                    <div class="chose_text_wrapper_right">
                        <div class="chose_icon_wrapper_list">
                            <div class="icon_content_right">
                                <h4>Used for Many Purposes</h4>
                                <!-- <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p> -->
                            </div>

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_3.png" alt="title">
                            </div>

                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="icon_content_right">
                                <h4>Low Costs</h4>
                                <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p>
                            </div>

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_4.png" alt="title">
                            </div>

                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="icon_content_right">
                                <h4>Easy To Us</h4>
                                <!-- <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p> -->
                            </div>

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_5.png" alt="title">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 visible-sm visible-xs">
                    <div class="chose_text_wrapper_right">
                        <div class="chose_icon_wrapper_list">
                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_3.png" alt="title">
                            </div>
                            <div class="icon_content_right">
                                <h4>Used for Many Purposes</h4>
                                <!-- <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p> -->
                            </div>
                        </div>
                        <div class="chose_icon_wrapper_list">

                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_4.png" alt="title">
                            </div>

                            <div class="icon_content_right">
                                <h4>Low Costs</h4>
                                <!-- <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p> -->
                            </div>
                        </div>
                        <div class="chose_icon_wrapper_list">
                            <div class="chose_icon_img_list">
                                <img src="images/ser_img_5.png" alt="title">

                            </div>
                            <div class="icon_content_right">
                                <h4>Easy To Us</h4>
                                <!-- <p>Quisque ut nunc elit. Lorem ipsum dolor Sit amet consectetur.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 visible-sm visible-xs">
                    <div class="section2_img_wrapper wow  bounceIn animated" data-wow-duration="1.3s"
                        style="visibility: visible; animation-duration: 1.3s; animation-name: bounceIn;">
                        <!-- <img class="img-responsive" src="images/waste3.jpg" alt="img"> -->
                        <img class="img-responsive" src="images/waste3.jpg" alt="img" style="border-radius: 5rem;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sw choose service wrapper end-->
    <!--sw testimonial wrapper start-->
    <!--div class="sw_testimonial_wrapper">
        <div class="discover_overlay"></div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/shape.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_dark_heading_wraper dark_heading_center">
                        <h1>Why Choose Us solar Energy</h1>
                        <img src="images/hd_line_dark.png" alt="title">
                        <p>Donec quis magna sit amet risus vulputate maximus eget eget arcu. Praesent sed molestie tortor. </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sw_testimonials_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="sw_testimonials_slider_box">
                                            <img src="images/testi_2.png" alt="Testimonial">
                                            <div class="sw_testimonials_slider_box_text">
                                                <p>Donec quis magna sit amet risus vulputate set eget arcu Praesent sed molestie tortor ed ulla suscipit lectus. Lorem ipsum dolor sit amet.</p>
                                                <h4>Ajay S.</h4>
                                                <h6>(CEO Webstrot Pvt Ltd.)</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                        <div class="sw_testimonials_slider_box">
                                            <img src="images/testi_1.png" alt="Testimonial">
                                            <div class="sw_testimonials_slider_box_text">
                                                <p>Donec quis magna sit amet risus vulputate set eget arcu Praesent sed molestie tortor ed ulla suscipit lectus. Lorem ipsum dolor sit amet.</p>
                                                <h4>Akshay H.</h4>
                                                <h6>(COO Webstrot Pvt Ltd.)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                        <div class="sw_testimonials_slider_box">
                                            <img src="images/testi_2.png" alt="Testimonial">
                                            <div class="sw_testimonials_slider_box_text">
                                                <p>Donec quis magna sit amet risus vulputate set eget arcu Praesent sed molestie tortor ed ulla suscipit lectus. Lorem ipsum dolor sit amet.</p>
                                                <h4>Ajay S.</h4>
                                                <h6>(CEO Webstrot Pvt Ltd.)</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="sw_testimonials_slider_box">
                                            <img src="images/testi_1.png" alt="Testimonial">
                                            <div class="sw_testimonials_slider_box_text">
                                                <p>Donec quis magna sit amet risus vulputate set eget arcu Praesent sed molestie tortor ed ulla suscipit lectus. Lorem ipsum dolor sit amet.</p>
                                                <h4>Akshay H.</h4>
                                                <h6>(COO Webstrot Pvt Ltd.)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs">
                                        <div class="sw_testimonials_slider_box">
                                            <img src="images/testi_2.png" alt="Testimonial">
                                            <div class="sw_testimonials_slider_box_text">
                                                <p>Donec quis magna sit amet risus vulputate set eget arcu Praesent sed molestie tortor ed ulla suscipit lectus. Lorem ipsum dolor sit amet.</p>
                                                <h4>Ajay S.</h4>
                                                <h6>(CEO Webstrot Pvt Ltd.)</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="sw_testimonials_slider_box">
                                            <img src="images/testi_1.png" alt="Testimonial">
                                            <div class="sw_testimonials_slider_box_text">
                                                <p>Donec quis magna sit amet risus vulputate set eget arcu Praesent sed molestie tortor ed ulla suscipit lectus. Lorem ipsum dolor sit amet.</p>
                                                <h4>Akshay H.</h4>
                                                <h6>(COO Webstrot Pvt Ltd.)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/shape_2.png" alt="shape">
        </div>
    </div-->

    <!--sw testimonial wrapper end-->
    <!--sw best product wrapper start-->
    <!--div class="sw_best_product_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sw_left_heading_wraper">
                        <h1>Our Best Rated Products</h1>
                        <img src="images/heading_line.png" alt="title">
                    </div>
                </div>

                slider start
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                    <div class="best_product_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_1.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>$  156</h5>
                                        <h1><a href="#">AIR 30 Turbine</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_2.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>$  156</h5>
                                        <h1><a href="#">canadian 30 Turbine</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_3.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>$  156</h5>
                                        <h1><a href="#">AIR Turbine 40</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_4.png" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>$  156</h5>
                                        <h1><a href="#">Canadian Solar 255</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sw_product_box_wrapper">
                                    <div class="sw_product_indx_img_wrapper">

                                        <img src="images/prdct_2.jpg" alt="shop_img" class="img-responsive" />
                                    </div>

                                    <div class="sw_product_indx_img_cont_wrapper">
                                        <div class="sw_pdct_img">
                                            <img src="images/line.png" alt="img" />
                                        </div>
                                        <h5>$  156</h5>
                                        <h1><a href="#">SolarWorld 280</a></h1>

                                        <div class="cc_li_cont_wrapper">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="cc_li_img_overlay">
                                            <div class="cc_li_img_text">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                                    <li><a href="#"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <!--sw best product wrapper end-->
    <!--sw leads wrapper start-->
    <div class="sw_leads_wrapper">
        <div class="discover_overlay"></div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/image11.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_disc_txt_wrapper">

                        <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                            <h1>Got Any Question?</h1>
                            <img src="images/hd_line_dark.png" alt="title">
                            <!-- <p>Donec quis magna sit amet risus vulputate maximus eget eget arcu. Praesent sed molestie tortor. </p> -->
                        </div>

                        <div class="sw_leads_accordian">
                            <div class="panel-group" id="accordionFifteenLeft" role="tablist">
                                <div class="panel panel-default">
                                    <div class="panel-heading desktop">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordionFifteenLeft"
                                                href="#collapseFifteenLeftone" aria-expanded="true">Where or when was AMES PROJECT founded? </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftone" class="panel-collapse collapse in"
                                        aria-expanded="true" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>AMES PROJECT is a Limited liability company, and in partnership for marketing and trade in precious metals and diamonds as well as recycled waste product. We trade in gold, silver, platinum, palladium, rhodium and polished and loose diamonds. We are founded in 2017 in Sierra Leone, Nigeria, as Limited Partnership. Our operation is not based in Nigeria though, we are an investment service with operations on other continents and currently we maintain gold mining projects in Sierra Leone.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading horn">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftTwo"
                                                aria-expanded="false">Do you buy gold? </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftTwo" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Yes, we do buy gold.

                                                    Currently we buy only that gold which is brought to us or one of our partner companies, either in Sierra Leone, Ghana, South Africa, or Tanzania to our assigned broker.
                                                    
                                                    We do not travel to other countries to purchase gold/diamond.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel-default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftThree"
                                                aria-expanded="false">Do you sell any gold/diamond?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftThree" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Yes, we do sell gold/diamond. However, we never sell scrap gold or raw gold from our gold mines to new clients. We have established network of buyers in Europe, Hong Kong, Dubai, South Africa and Tanzania, and we are also searching for new "buyers".

                                                    If you wish to purchase gold/diamond from us, kindly contact us.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFour"
                                                aria-expanded="false">Do you sell gold nuggets, gold dust?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftFour" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>No! Professional gold sales almost never consist of sales of gold dust or gold nuggets. In Africa, gold is mostly sold locally, and local miners so often use mercury, that you can hardly find "dust" or "nuggets". Prior to any local purchase, gold is smelted down, so there is no dust or nuggets any more, one get small bars and they are sold to large companies.<br>If you are searching for gold dust or gold nuggets, most probably you are not in the right field and you will be prone to fraud.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFive"
                                                aria-expanded="false">Do you sell gold C.I.F. or on the basis of Cost, Insurance and Freight?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftFive" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Yes, we do sell gold C.I.F. However, only to our long-term contracted buyers, located in Europe, Hong Kong or Dubai. New buyers; we deal on the basis of Cost, Insurance, and Freight. 

                                                    Raw gold or scrap gold, we never sell to new clients. It can only be; if a proper negotiation is made..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftSix"
                                                aria-expanded="false">Do you sell rough diamonds or polished diamonds?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftSix" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>We sell both, rough and polished diamonds. Rough diamonds are sold in Sierra Leone, and they may be exported. However, we require clients to visit us at our offices and finish preliminary meetings and contracts. Polished diamonds we sell through network of partner companies in Europe/Asia/Middleeast. In any case, you will be required to visit some of our or partner's offices.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftSeven"
                                                aria-expanded="false">I have end buyers in Dubai, can you send gold on C.I.F. basis to Dubai, and we will pay after assay?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftSeven" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Such inquiries come from people who do not trade directly in gold. We are gold mining and gold trade company, well established, with many partners, suppliers and buyers. We do not need an indirect purchases of gold. Finally, you dare ask for gold without money? Without ever having scheduled a meeting with us. Recheck your business skills, or get schooled.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftEight"
                                                aria-expanded="false">We are interested in buying gold C.I.F. Dubai. Can you sell gold nuggets, gold dust or gold bars to us? We will pay you after assay.</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftEight" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>No! We sell raw gold and scrap gold only to our well established buyers in Europe/Hong kong. If you think anyone will send you C.I.F. gold to Dubai, you are dead wrong.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftNine"
                                                aria-expanded="false">Do you buy gold dust, gold bars, gold nuggets from Ghana, Mali, Tanzania? We have affordable prices.</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftNine" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Yes, we do buy gold dust, gold bars or gold nuggets, but if you are approaching us over Internet, without even meeting us or knowing any of our partners, then NO; we are not interested in your offer!

                                                    We know where the gold is, and we certainly buy gold ourselves.
                                                    
                                                    But we don't put any attention on supposed "companies" which sell cheap gold over Internet. Basically, we are sick and tired of scammers..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftTen"
                                                aria-expanded="false">Do you have cheap gold in Africa?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftTen" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>We have a gold mine in Africa, and we produce gold. But there is no such thing as cheap gold in Africa, that you might know in easy manner, over Internet. If there is cheap gold, local dealers and brokers earn money on that. Gold almost never goes out of the country considerably under the gold price. The best you can think of shall be 2% less the price or up to 5% or more, provided you have some kind of agreement with mines.

                                                    If you believe, you will be able to close quick deals, by brokering the "cheap" gold from Africa, you are wasting your time.
                                                    
                                                    We are in Africa, well connected to Sierra Leone, Guinea Konackry, Liberia, Ghana, Tanzania, Mali, Burkina Faso, and South Africa, and we know where to buy gold under the price, however, it will never go out of the country for that same price.
                                                    
                                                    And every miner, broker, dealer in Africa, provided there is real gold, knows where to sell it for spot prices, including in Sierra Leone, Ghana, Tanzania, Mali, South Africa and other countries.
                                                    
                                                    The only reason you might get offered cheap gold is because the gold offered, you will never see or it is not real, as you are then in the hands of scammer.
                                                    
                                                    Do not believe that there will be anyone sending you gold in trust, for small fees paid for customs or similar fraud.
                                                    
                                                    No real dealer of gold is that stupid. If they have gold in hands, they will sell to the local dealer. And most of times, gold can easily be sold in major cities for 1-2% less the spot price, and often 2-5 or 10% above the spot price.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftEleven"
                                                aria-expanded="false">Why buy recycled products?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftEleven" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Purchasing recycled products creates markets for the recovered materials used in these products. This action fosters sustainability and conserves natural resources and energy. However, purchasing recycled products promotes the continued manufacture of these products, thus completing the recycling loop..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftTwelve"
                                                aria-expanded="false">How do I start a buy-recycled program?.</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftTwelve" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>We suggest that your first step is developing a company policy on buying recycled products. Doing so will make all other steps easier. Next; should be to put together a committee, representing all operations, to develop the program. Be sure to include staff from different departments to help purchasers and users understand each other’s needs and constraints. Then, conduct an assessment of the products that your company buys. This assessment will reveal; Products that currently have recycled content. Products that are not currently purchased with recycled content, but could be. Next line of action will be to examine your specifications to ensure that they do not unnecessarily hinder the purchase of recycled products.

                                                    Finally, determine the availability of recycled products that meet your specifications in your area. Contact us to find out what products are available and inform us about your interest in procuring these types of products..</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftThirteen"
                                                aria-expanded="false">Why do we have to sort our recyclables?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftThirteen" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>Mixing different recyclables or contaminating them with garbage makes it more difficult to prepare and sell them to a market. Each market has certain specification for the type of material and amount of contaminants allowed. We have to meet these standards in order for those businesses to accept the material.  We have people sorting materials into three types (cardboard, paper, plastics, car tires, metals, and glass) to make it more economically for us to prepare the material for the markets.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFourteen"
                                                aria-expanded="false">How do recycled products perform?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftFourteen" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>In general, recycled products perform as well as their virgin counterparts. In some instances, they perform better. You do not need to compromise on quality to purchase recycled products. In many cases, you will not be able to distinguish recycled-content products from virgin products.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftFifteen"
                                                aria-expanded="false">Are recycled products available?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftFifteen" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>There are more than 4,500 products available with recycled content. While not all of these products may be available in your vicinity, they are accessible in other areas of the country. As more companies demand these products, availability have increased. Some products, such as steel containers or corrugated boxes, are more widely available with recycled content than with virgin content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading bell">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                                data-parent="#accordionFifteenLeft" href="#collapseFifteenLeftSixteen"
                                                aria-expanded="false">Do recycled products cost more?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFifteenLeftSixteen" class="panel-collapse collapse"
                                        aria-expanded="false" role="tabpanel">
                                        <div class="panel-body">

                                            <div class="panel_cont">
                                                <p>The price of products, whether virgin or recycled, is affected by many variables, including but not limited to:

                                                    Availability and costs of material feedstocks, Energy costs, Distributor mark-up, Transportation charges, Quantity of the item ordered; Whether the product is a common stock item or requires a special order, Geographical location, etc. The relative prices of recycled products and their comparable virgin products vary. AMESPROJECT encourages you to compare prices between virgin and recycled products and also among the recycled products. Even if one recycled product is more expensive, others may be less expensive.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="sw_road_leads_img">
                        <img src="images/leads.gif" alt="img">

                    </div>
                </div>
            </div>
        </div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/image.png" alt="shape">
        </div>
    </div>
    <!-- sw leads section end-->
    <!-- sw pricing section start-->
    <!--div class="sw_pricing_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_center_heading_wrapper pd_0">
                        <h1>Affordable Pricing Packages</h1>
                        <img src="images/heading_line.png" alt="title">
                        <p>Donec quis magna sit amet risus vulputate maximus eget eget arcu. Praesent sed molestie tortor. </p>
                    </div>
                </div>

                <div class="pricing_box1_wrapper">
                    <div class="box1_heading_wrapper box1_orange">

                        <h1><sup>$</sup>75<span> /  month</span></h1>
                        <div class="jp_pricing_label_wrapper">

                        </div>
                    </div>

                    <div class="price_box1_wrapper">
                        <div class="disc_btn pricing_btn">
                            <ul>
                                <li>
                                    <a href="#!" class="waves-effect waves-light waves-ripple">basic</a>
                                </li>
                            </ul>

                        </div>

                        <div class="pricing_btm_txt_wrapper txt_clr_oange">
                            <div class="pricing_cont">
                                <p>Battery Capacity 11 - 15 kWh</p>
                                <ul>
                                    <li> free service</li>
                                    <li>ranted battery</li>
                                    <li>free installation</li>
                                    <li>24 hour support</li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="pricing_box1_wrapper sw_pricing_box_transition">
                    <div class="box1_heading_wrapper box1_blue">

                        <h1><sup>$</sup>95<span> /  month</span></h1>
                        <div class="jp_pricing_label_wrapper jp_pricing_label_blue">

                        </div>
                    </div>
                    <div class="price_box1_wrapper price_box1_wrapper_center">
                        <div class="disc_btn pricing_btn">
                            <ul>
                                <li>
                                    <a href="#!" class="waves-effect waves-light waves-ripple">business</a>
                                </li>
                            </ul>

                        </div>

                        <div class="pricing_btm_txt_wrapper txt_clr_blue">
                            <div class="pricing_cont">
                                <p>Battery Capacity 16 - 20 kWh</p>
                                <ul>
                                    <li> free service</li>
                                    <li>ranted battery</li>
                                    <li>free installation</li>
                                    <li>24 hour support</li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="pricing_box1_wrapper padder_btm_0">
                    <div class="box1_heading_wrapper box1_green">

                        <h1><sup>$</sup>125<span> /  month</span></h1>
                        <div class="jp_pricing_label_wrapper jp_pricing_label_green">

                        </div>
                    </div>

                    <div class="price_box1_wrapper">
                        <div class="disc_btn pricing_btn">
                            <ul>
                                <li>
                                    <a href="#!" class="waves-effect waves-light waves-ripple">ultimate</a>
                                </li>
                            </ul>

                        </div>

                        <div class="pricing_btm_txt_wrapper txt_clr_green">
                            <div class="pricing_cont">
                                <p>Battery Capacity all kWh</p>
                                <ul>
                                    <li> free service</li>
                                    <li>ranted battery</li>
                                    <li>free installation</li>
                                    <li>24 hour support</li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div-->
    <!-- sw pricing section end-->
    <!-- sw contact form section start-->
    <div class="sw_contact_form_wrapper sw_contact_form_padder">
        <div class="discover_overlay"></div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/shape.png" alt="shape">
        </div>
        <div class="container">
            <div class="contact_left_wrapper wow  bounceIn animated" data-wow-duration="1.3s"
                style="visibility: visible; animation-duration: 1.3s; animation-name: bounceIn;">
                <img src="images/iner_contactt.png" alt="img" class="img-responsive">
            </div>
            <div class="contact_right_wrapper">
                <div class="cmnt_area_div_mn">
                    <div class="sw_left_heading_wraper sw_dark_heading_wraper">
                        <h1> Feel Free To Contact Us</h1>
                        <img src="images/hd_line_dark.png" alt="title">
                        <!-- <p>Donec quis magna sit amet risus vulputate maximus eget eget arcu. Praesent sed molestie tortor. </p> -->
                    </div>
                    <div class="row">
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
                </div>
            </div>
        </div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/shape_2.png" alt="shape">
        </div>
    </div>

    <!-- sw contact form section end-->
    <!-- sw news section start-->
    <!--div class="sw_news_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="sw_left_heading_wraper sw_center_heading_wrapper">
                        <h1>Latest News Today</h1>
                        <img src="images/heading_line.png" alt="title">
                        <p>Donec quis magna sit amet risus vulputate maximus eget eget arcu. Praesent sed molestie tortor. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btc_blog_indx_box_wrapper">
                        <div class="btc_blog_indx_img_wrapper">
                            <img src="images/news_1.jpg" alt="blog_img">
                            <div class="btc_blog_indx_date_wrapper">
                                <a href="#!" class="waves-effect waves-light waves-ripple"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">
                            <p>june 16,2018</p>
                            <h5>Electricity is on track for what
about decarbonising heat?</h5>

                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Akshay</a></p>
                            </div>
                            <div class="btc_blog_indx_cont_bottom_right">
                                <p><i class="fa fa-comments-o"></i> &nbsp;<a href="#">04 Comm.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btc_blog_indx_box_wrapper">
                        <div class="btc_blog_indx_img_wrapper">
                            <img src="images/news_2.jpg" alt="blog_img">
                            <div class="btc_blog_indx_date_wrapper">
                                <a href="#!" class="waves-effect waves-light waves-ripple"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">
                            <p>june 16,2018</p>
                            <h5> Electricity is on track for what
about decarbonising heat?</h5>

                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Akshay</a></p>
                            </div>
                            <div class="btc_blog_indx_cont_bottom_right">
                                <p><i class="fa fa-comments-o"></i> &nbsp;<a href="#">04 Comm.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btc_blog_indx_box_wrapper btc_blog_padder">
                        <div class="btc_blog_indx_img_wrapper">
                            <img src="images/news_3.jpg" alt="blog_img">
                            <div class="btc_blog_indx_date_wrapper">
                                <a href="#!" class="waves-effect waves-light waves-ripple"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">
                            <p>june 16,2018</p>
                            <h5>Electricity is on track for what
about decarbonising heat?</h5>

                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Akshay</a></p>
                            </div>
                            <div class="btc_blog_indx_cont_bottom_right">
                                <p><i class="fa fa-comments-o"></i> &nbsp;<a href="#">04 Comm.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->

    <!-- sw news section end-->
    <!--sw our newsletter wrapper start-->
    <!--div class="sw_our_newsletter_wrapper">
        <div class="discover_overlay"></div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/image11.png" alt="shape">
        </div>
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
                        <!-- <p>True environmental protection lies in loving the mountains, the oceans and in cher -->
                        <!-- <br> all creation.</p>>

                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="sw_letter_img_wrapper wow  zoomIn animated" data-wow-duration="1.3s"
                        style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                        <img src="images/fav.jpg" alt="img"
                            style="border-radius: 10rem; width: 60%; margin-bottom: 5rem;">


                    </div>
                </div>
            </div>
        </div>
        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/image.png" alt="shape">
        </div>
    </div>
    <!-- sw our newsletter section end-->
    <!-- sw partners section start-->
    <div class="sw_partners_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="sw_left_heading_wraper">
                        <h1>Our Partners</h1>
                        <img src="images/heading_line.png" alt="title">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                    <div class="partners_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner11.jpg" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner12.jpg" alt="partner_img">
                                </div>
                            </div>
                            <!--div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_3.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_4.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_5.png" alt="partner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="lr_prt_img_wrapper">
                                    <img src="images/partner_2.png" alt="partner_img">
                                </div>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sw partners section end-->
    <!-- sw footer section start-->
    <div class="sw_contact_form_wrapper">
        <div class="discover_overlay"></div>

        <div class="sw_banner_bottom_shap_img_wrapper">
            <img src="images/shape.png" alt="shape">
        </div>
        <div class="footer_wrapper">

            <div class="container">
                <div class="circle_btm">
                    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up"></i></a>
                </div>
                <div class="row">
                    <div class="foter_padder">
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div class="wrapper_second_about">
                                <div class="wrapper_first_image">
                                    <a href="index.html"><img src="images/logon.jpg" class="img-responsive" alt="logo" style="width: 100px; height: 50px;"></a>
                                    <!-- <a href="index.html"><img src="images/logon.jpg" class="img-responsive" -->
                                            <!-- alt="logo" /></a> -->
                                </div>
                                <div class="abotus_content">
                                    <p>AMESPROJECT is a company dedicated towards sustainable agriculture, recycling
                                        of all kinds wastes, as well as promoting sustainable environment.</p>


                                    <!--ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul-->
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
                            <div class="wrapper_second_useful">
                                <h4>useful links </h4>
                                <img src="images/hd_line_dark.png" alt="title" class="pd_btm_3">
                                <ul>
                                    <li><a href="index.html"><i class="fa fa-angle-right"></i>About us</a>
                                    </li>
                                    <li><a href="#sw_left_heading_wraper sw_dark_heading_wraper"><i class="fa fa-angle-right"></i>Faq </a>
                                    </li>
                                    <li><a href="contact_us.html"><i class="fa fa-angle-right"></i>contact </a>
                                    </li>
                                    <li><a href="services.html"><i class="fa fa-angle-right"></i>Services</a>
                                    </li>
                                    <li><a href="gallery.html"><i class="fa fa-angle-right"></i>Gallery</a> </li>
                                </ul>

                            </div>
                        </div>
                        <!--div class="col-lg-2 col-md-2 col-xs-12 col-sm-4">
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
                        </div-->

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
                        </div>
                    </div>
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
    <script src="js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.actions.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.migration.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.video.min.js"></script>
    <script src="js/custom.js"></script>
    <!--js code-->
</body>


<!-- Mirrored from webstrot.com/html/typhoon/typhoon_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Mar 2020 20:19:13 GMT -->

</html>