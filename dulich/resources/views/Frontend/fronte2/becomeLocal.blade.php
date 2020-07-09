@extends('Frontend.layout')

@section('content')
<style id="st_custom_css_php">
        

:root {
    --main-color: #1A2B48;
    --link-color: #5191FA;
    --link-color-dark: #5191FA;
    --grey-color: #5E6D77;
    --light-grey-color: #EAEEF3;
    --orange-color: #FA5636;
}

    .booking-item-rating .fa ,
    .booking-item.booking-item-small .booking-item-rating-stars,
    .comment-form .add_rating,
    .booking-item-payment .booking-item-rating-stars .fa-star,
    .st-item-rating .fa,
    li  .fa-star , li  .fa-star-o , li  .fa-star-half-o{
    color:#FA5636    }

.feature_class{
 background: #19A1E5;
}
.feature_class::before {
   border-color: #19A1E5 #19A1E5 transparent transparent;
}
.feature_class::after {
    border-color: #19A1E5 transparent #19A1E5 #19A1E5;
}
.featured_single .feature_class::before{
   border-color: transparent #19A1E5 transparent transparent;
}
.item-nearby .st_featured::before {
    border-color: transparent transparent #19A1E5 #19A1E5;
}
.item-nearby .st_featured::after {
   border-color: #19A1E5 #19A1E5 #19A1E5 transparent  ;
}

.st_sale_class{
    background-color: #cc0033;
}
.st_sale_class.st_sale_paper * {color: #cc0033 }
.st_sale_class .st_star_label_sale_div::after,.st_sale_label_1::before{
    border-color: #cc0033 transparent transparent #cc0033 ;
}

.st_sale_class .st_star_label_sale_div::after{
border-color: #cc0033

        </style>
        <!-- End Custom_css.php-->
        <!-- start css hook filter -->
        <style type="text/css" id="st_custom_css">
                </style>
        <!-- end css hook filter -->
        <!-- css disable javascript -->
                <style type="text/css" id="st_enable_javascript">
        .search-tabs-bg > .tabbable >.tab-content > .tab-pane{display: none; opacity: 0;}.search-tabs-bg > .tabbable >.tab-content > .tab-pane.active{display: block;opacity: 1;}.search-tabs-to-top { margin-top: -120px;}        </style>

        <style>
        .block1 {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 25px;
    width: 60%;
}
.columnstyle  {
    height: 500px;
}
.columnstyle .bg-mask {
    opacity: 0;
}
li.vc_tta-tab {
    background-color: #f2f2f2;
}
li.vc_tta-tab.vc_active {
    background-color: #c6eaea;
}
.hotel-alone .menu-style-2 .menu .current-menu-ancestor>a{
 background: transparent !important;   
}
.footer-custom a{
 color: #333;   
}
body.single.single-location .search-result-page .search-form-wrapper .search-form {background-color: #fff;}        </style>
        
        <!-- Begin Custom CSS        -->
        <style>
            
body{
                
            }

body{
                
            }

.global-wrap{
                
            }

.header-top, .menu-style-2 .header-top{
                
            }

.st_menu ul.slimmenu li a, .st_menu ul.slimmenu li .sub-toggle>i,.menu-style-2 ul.slimmenu li a, .menu-style-2 ul.slimmenu li .sub-toggle>i, .menu-style-2 .nav .collapse-user{
                
            }

#menu1,#menu1 .menu-collapser, #menu2 .menu-wrapper, .menu-style-2 .user-nav-wrapper{
                background: #ffffff;
            }
        </style>
        <!-- End Custom CSS -->
                <style type="text/css" id="wp-custom-css">
            .new-st-item{display:none;}
#header .header .header-left #st-main-menu .main-menu li.menu-item-has-children:hover .new-st-item {
    display:block;
    position: absolute;
    top: -62px;
    right: -62px;
    background: #39D677;
    color: #fff;
    width: 100px;
    height: 100px;
    padding-top: 75px;
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.05);
    transform: matrix(-0.75, -0.66, -0.66, 0.75, 0, 0);
    font-weight: 500;
    font-size: 11px;
    line-height: 24px;
    transform: rotate(43deg);
    z-index: 999;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
    z-index: 9;
    text-align: center;
}
#header .header .header-left #st-main-menu .main-menu li.menu-item-has-children .menu-dropdown li{
    position:relative;
    overflow:hidden;
}

#header .header .header-left #st-main-menu .main-menu li.menu-item-has-children:hover .new-st-item.red{
    background: #cc0000;
}
        </style>
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
                    <script src="https://apis.google.com/js/platform.js" async defer></script>
                        <meta name="google-signin-client_id" content="RBKANUDGJN6KY7WQ">
                        <META NAME="description" CONTENT="Tour hotel booking">
            <META NAME="keywords" CONTENT="traveler">
            <META NAME="title" CONTENT="Traveler ">
            <meta name="st_utm" content="YTo0OntzOjE6InUiO3M6Mjg6Imh0dHBzOi8vdG9tYXAudHJhdmVsZXJ3cC5jb20iO3M6MToibiI7czo4OiJUcmF2ZWxlciI7czoxOiJ2IjtzOjU6IjIuOC4xIjtzOjE6ImkiO3M6MTQ6IjEwNC4yNy4xNzguMjE0Ijt9">
            <style type="text/css" data-type="vc_custom-css">.banner, .st-breadcrumb{
    display: none;
}
.st-become-banner h2{
    margin-bottom: 25px;
}
.st-become-banner h4{
    font-weight: normal;
    font-size: 16px;
}
.st-become-banner a.btn{
    background: #FA5535;
    font-size: 15px;
}
.st-number-box p{
    font-size: 13px;
}
.st-number-box .st-number-circle p{
    width: 70px;
    height: 70px;
    border: 2px solid #5191FA;
    border-radius: 50%;
    text-align: center;
    line-height: 69px;
    font-size: 40px;
    color: #5191FA;
    transition: all 0.3s;
}
.st-number-box .vc_column-inner:hover .st-number-circle p {
    box-shadow: 0px 0px 6px 2px #5191FA;
}
.st-number-box h3{
    font-size: 17px;
    font-weight: 450;
    margin-top: 3px;
}
.st-become-feature .vc_column-inner{
    border: 1px solid #dfdfdf;
    border-radius: 8px;
    padding: 50px;
    margin-bottom: 30px;
    transition: all 0.3s;
}
.st-become-feature .vc_column-inner:hover{
    box-shadow: 0px 0px 6px 2px #5191FA;
}
.st-become-feature h3{
    font-size: 17px;
    text-align: center;
}
.st-become-feature .wpb_content_element{
    margin-bottom: 25px;
    text-align: center;
}
.st-become-feature .wpb_content_element:nth-child(2){
    margin-bottom: 16px;
}
.st-become-feature .wpb_content_element:last-child{
    margin-bottom: 0px;
}
.st-become-feature .wpb_content_element p{
    font-size: 14px;
    color: #666;
}
.st-become-feature-wrapper a.btn{
    background: #FA5535;
    font-size: 15px;
    padding: 17px 30px;
}
.st-become-faqs .wpb_wrapper h3{
    font-size: 18px;
}
.st-become-faqs .wpb_wrapper h3 img{
    width: 30px;
    height: auto;
    position: relative;
    top: -2px;
    margin-right: 10px;
}
.st-become-faqs .wpb_wrapper p{
    font-size: 15px;
    color: #666;
    margin-top: 15px;
}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1547804736464{padding-top: 150px !important;padding-bottom: 150px !important;background-image: url(https://acmap.travelerwp.com/wp-content/uploads/2019/01/bg_parallax.jpg?id=8980) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>        <script>
        // Load the SDK asynchronously
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        window.fbAsyncInit = function () {
            FB.init({
                appId: st_params.facbook_app_id,
                cookie: true, // enable cookies to allow the server to access
                // the session
                xfbml: true, // parse social plugins on this page
                version: 'v3.1' // use graph api version 2.8
            });

        };
    </script>

<div id="st-content-wrapper" class="search-result-page search-result-page--custom">
    <div class="search-result-page--heading">
        <div class="banner  ">
            <div class="container">
                <h1>
                    Become Local Expert                    
                </h1>
            </div>
        </div>
        <div class="st-breadcrumb hidden-xs ">
            <div class="container">
                <ul>
                    <li><a href="https://tomap.travelerwp.com">Home</a></li>
                    <li class="active">Become Local Expert</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row st bg-holder text-center st-become-banner vc_custom_1547804736464 vc_row-has-fill vc_row-no-padding" style="position: relative; left: -74.5px; box-sizing: border-box; width: 1349px;">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h1 style="text-align: center;"><span style="color: #ffffff;">Know your city?</span></h1>
                                    <h4 style="text-align: center;"><span style="color: #ffffff;">Join 2000+ locals &amp; 1200+ contributors from 3000 cities</span></h4>
                                </div>
                            </div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p><a class="signup btn btn-danger btn-lg" data-toggle="modal" data-target="#st-register-form">Register Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row st bg-holder">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h2 style="text-align: center;"><strong>How does it work?</strong></h2>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row wpb_row st bg-holder st-number-box">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-4">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner">
                                <div class="wpb_column column_container col-md-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  st-number-circle">
                                                <div class="wpb_wrapper">
                                                    <p>1</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-md-9">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h3>Sign up</h3>
                                                    <p>Click edit button to change this text&nbsp; to change this text</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-4">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner">
                                <div class="wpb_column column_container col-md-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  st-number-circle">
                                                <div class="wpb_wrapper">
                                                    <p>2</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-md-9">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h3>Add your services</h3>
                                                    <p>Click edit button to change this text&nbsp; to change this text</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-4">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner">
                                <div class="wpb_column column_container col-md-3">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  st-number-circle">
                                                <div class="wpb_wrapper">
                                                    <p>3</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-md-9">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h3>Get bookings</h3>
                                                    <p>Click edit button to change this text&nbsp; to change this text</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row wpb_row st bg-holder st-become-feature-wrapper text-center">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                            <div class="st-video style-1 youtube-video not-play" style="background: #f1f1f1 url(https://tomap.travelerwp.com/wp-content/uploads/2018/11/gallary_6-1.jpg) no-repeat center; ">
                                <div id="bgndVideo" class="player" data-property="{videoURL:'http://kroXVig0QRc',containment:'.youtube-video',autoPlay:true, showControls:false, showYTLogo: false, mute:false, startAt:0, opacity:1}"></div>
                                <div class="d-table">
                                    <div class="table-cell">
                                        <div class="caption">
                                            <div class="title-video">
                                                <p>Share the beauty of your city</p>
                                            </div>
                                            <div class="st-play">
                                                <a class="btn-play-video play" href="#"><i class="fa fa-play"></i><i class="fa fa-pause"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h2 style="text-align: center;"><strong>Why be a Local Expert</strong></h2>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>
                            <div class="vc_row wpb_row vc_inner st-become-feature text-center">
                                <div class="column1 wpb_column column_container col-md-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="https://tomap.travelerwp.com/wp-content/uploads/2019/03/ico_piggy-bank_1.svg" class="vc_single_image-img attachment-full" alt=""></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h3>Earn an additional income</h3>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>Ut elit tellus, luctus nec ullamcorper mattis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-md-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="https://tomap.travelerwp.com/wp-content/uploads/2019/03/ico_friendship_1.svg" class="vc_single_image-img attachment-full" alt=""></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h3>Open your network</h3>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>Ut elit tellus, luctus nec ullamcorper mattis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-md-4">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img src="https://tomap.travelerwp.com/wp-content/uploads/2019/03/ico_chat_1.svg" class="vc_single_image-img attachment-full" alt=""></div>
                                                </figure>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h3>Practice your language</h3>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>Ut elit tellus, luctus nec ullamcorper mattis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p><a class="signup btn btn-danger btn-lg" data-toggle="modal" data-target="#st-register-form">Register Now</a></p>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                            <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_2 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                            <div class="vc_empty_space" style="height: 1px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h2 style="text-align: center;"><strong>FAQs</strong></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row wpb_row st bg-holder st-become-faqs">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-6">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h3><a><img class="alignnone wp-image-7754" src="https://acmap.travelerwp.com/wp-content/uploads/2019/01/ico_quest.png" alt="" width="35" height="35"></a>&nbsp;How will I receive my payment?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                            <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                            <div class="vc_empty_space" style="height: 1px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h3><a><img class="alignnone wp-image-7754" src="https://acmap.travelerwp.com/wp-content/uploads/2019/01/ico_quest.png" alt="" width="35" height="35"></a>&nbsp;How do I update or extend my availabilities?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-6">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h3><a><img class="alignnone wp-image-7754" src="https://acmap.travelerwp.com/wp-content/uploads/2019/01/ico_quest.png" alt="" width="35" height="35"></a>&nbsp;How do I upload products?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                            <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                            <div class="vc_empty_space" style="height: 1px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h3><a><img class="alignnone wp-image-7754" src="https://acmap.travelerwp.com/wp-content/uploads/2019/01/ico_quest.png" alt="" width="35" height="35"></a>&nbsp;How do I increase conversion rate?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
    </div>
</div>
@stop