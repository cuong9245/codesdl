@extends('Frontend.layout')

@section('content')
<style type="text/css">
    .carousel-cell {
        margin-right: 5px;
        width: 75%;
        height: 500px;
        background-size: cover !important;
        background-repeat: no-repeat !important;
        background-position: center center !important;
    }

    .flickity-page-dots {
        margin-top: 40px;
        bottom: -58px;
        z-index: 9;
    }

    .flickity-page-dots li.is-selected {
        background-color: transparent;
        border: 2px solid var(--link-color, #5191FA);
    }

    .flickity-page-dots li {
        background: #A0A9B2;
        border: 1px solid #A0A9B2;
        height: 16px !important;
        width: 16px  !important;
        margin-right: 15px;
        margin-left: 15px;
    }
    .slogan {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .slogan h4 {
        font-size: 48px;
        color: #FFFFFF;
        font-weight: bold;
        margin-bottom: 30px;
    }

    
</style>

<div id="st-content-wrapper" class="search-result-page search-result-page--custom">
    <div class="search-result-page--heading">
        <div class="banner st_1592538077 ">
            <div class="container">
                <h1>
                    About Us                    
                </h1>
            </div>
        </div>
        <div class="st-breadcrumb hidden-xs ">
            <div class="container">
                <ul>
                    <li><a href="https://tomap.travelerwp.com">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="vc_row wpb_row st bg-holder">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row wpb_row st bg-holder">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-6">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="570" height="184" src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/about_1.jpg" class="vc_single_image-img attachment-full" alt="" srcset="https://tomap.travelerwp.com/wp-content/uploads/2018/12/about_1.jpg 570w, https://tomap.travelerwp.com/wp-content/uploads/2018/12/about_1-600x193.jpg 600w, https://tomap.travelerwp.com/wp-content/uploads/2018/12/about_1-768x247.jpg 768w" sizes="(max-width: 570px) 100vw, 570px"></div>
                                </figure>
                            </div>
                            <div class="wpb_text_column wpb_content_element  st-aboutus-title">
                                <div class="wpb_wrapper">
                                    <h3>Our Story</h3>
                                </div>
                            </div>
                            <div class="wpb_text_column wpb_content_element  st-aboutus-content">
                                <div class="wpb_wrapper">
                                    <p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-6">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_center">
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="570" height="184" src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/about_2.png" class="vc_single_image-img attachment-full" alt="" srcset="https://tomap.travelerwp.com/wp-content/uploads/2018/12/about_2.png 570w, https://tomap.travelerwp.com/wp-content/uploads/2018/12/about_2-600x193.png 600w, https://tomap.travelerwp.com/wp-content/uploads/2018/12/about_2-768x247.png 768w" sizes="(max-width: 570px) 100vw, 570px"></div>
                                </figure>
                            </div>
                            <div class="wpb_text_column wpb_content_element  st-aboutus-title">
                                <div class="wpb_wrapper">
                                    <h3>Our mission</h3>
                                </div>
                            </div>
                            <div class="wpb_text_column wpb_content_element  st-aboutus-content">
                                <div class="wpb_wrapper">
                                    <p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row wpb_row st bg-holder">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                            <div class="st-list-statistic">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="item-wrapper">
                                            <div class="item">
                                                <div class="front">
                                                    <div class="inner">
                                                        <h4>100+</h4>
                                                        <p class="sub-text">partner</p>
                                                    </div>
                                                </div>
                                                <div class="end">
                                                    <p class="desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="item-wrapper">
                                            <div class="item">
                                                <div class="front">
                                                    <div class="inner">
                                                        <h4>2k+</h4>
                                                        <p class="sub-text">properties</p>
                                                    </div>
                                                </div>
                                                <div class="end">
                                                    <p class="desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="item-wrapper">
                                            <div class="item">
                                                <div class="front">
                                                    <div class="inner">
                                                        <h4>300+</h4>
                                                        <p class="sub-text">destinations</p>
                                                    </div>
                                                </div>
                                                <div class="end">
                                                    <p class="desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="item-wrapper">
                                            <div class="item">
                                                <div class="front">
                                                    <div class="inner">
                                                        <h4>40k+</h4>
                                                        <p class="sub-text">booking</p>
                                                    </div>
                                                </div>
                                                <div class="end">
                                                    <p class="desc">Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 65px"><span class="vc_empty_space_inner"></span></div>
                            <div class="st-aboutus-info">
                                <p class="message">"Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Nam dapibus nisl vitae elit fringilla rutrum."</p>
                                <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_10.jpg" alt="WordPress Booking Theme">            
                                <p class="name">Adam Blin</p>
                                <p class="pos">Founder</p>
                            </div>
                            <div class="vc_empty_space" style="height: 65px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row st bg-holder vc_row-no-padding" style="position: relative; left: -74.5px; box-sizing: border-box; width: 1349px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="wpb_column column_container col-md-12 vc_custom_1543386510262">
                        <div class="vc_column-inner wpb_wrapper">

                            <div class="carousel" data-flickity='{ "wrapAround": true }'>
                                <div class="carousel-cell" style="background: url('https://tomap.travelerwp.com/wp-content/uploads/2018/12/gallary_1.jpg')"></div>
                                <div class="carousel-cell" style="background: url('https://tomap.travelerwp.com/wp-content/uploads/2018/12/gallary_2.jpg')"></div>
                                <div class="carousel-cell" style="background: url('https://tomap.travelerwp.com/wp-content/uploads/2018/12/gallary_3.jpg')"></div>
                                <div class="carousel-cell" style="background: url('https://tomap.travelerwp.com/wp-content/uploads/2018/12/gallary_4.jpg')"></div>
                                <div class="carousel-cell" style="background: url('https://tomap.travelerwp.com/wp-content/uploads/2018/12/gallary_5.jpg')"></div>
                            </div>

                            

                        </div>
                    </div>
                </div>

                <div class="slogan">

                    <h4>Life at Traveler</h4>

                    <a href="#link-to" target="" class="btn btn-primary">Join Our Team</a>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="clearfix"></div>
        <div class="vc_row wpb_row st bg-holder">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 130px"><span class="vc_empty_space_inner"></span></div>
                            <div class="st-aboutus-team">
                                <h3>Leadership Team</h3>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="thumb">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_3.jpg" class="img-responsive">
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#face"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#tw"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#ins"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="name">Eva Hicks</p>
                                        <p class="pos">CEO</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="thumb">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_8.jpg" class="img-responsive">
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#face"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#tw"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#ins"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="name">Evan Porter</p>
                                        <p class="pos">COO</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="thumb">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_9.jpg" class="img-responsive">
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#face"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#tw"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#ins"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="name">Donald Wolf</p>
                                        <p class="pos">Account Manager</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="thumb">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_10.jpg" class="img-responsive">
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#face"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#tw"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#ins"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="name">Charlie Harrington</p>
                                        <p class="pos">Sales Support</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="thumb">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_4.jpg" class="img-responsive">
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#face"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#tw"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#ins"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="name">Melody Marshall</p>
                                        <p class="pos">Order Manager</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="thumb">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_5.jpg" class="img-responsive">
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#face"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#tw"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#ins"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="name">Lee Cunningham</p>
                                        <p class="pos">Designer</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="thumb">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_6.jpg" class="img-responsive">
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#face"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#tw"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#ins"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="name">Kody Byrd</p>
                                        <p class="pos">QC Manager</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 item">
                                        <div class="thumb">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_7.jpg" class="img-responsive">
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#face"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#tw"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#ins"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="name">Breanna French</p>
                                        <p class="pos">Head of Design</p>
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
    </div>
</div>


<style>
                
    .st_1592538077{
        background-image: url(https://tomap.travelerwp.com/wp-content/uploads/2018/12/gallary_5.jpg) !important;
    }
    .vc_custom_1542265299369{background-color: #ffffff !important;}.vc_custom_1543220007372{margin-bottom: 20px !important;}.vc_custom_1543221092622{border-left-width: 3px !important;padding-left: 20px !important;border-left-color: #5191fa !important;border-left-style: solid !important;}.vc_custom_1543221080532{border-left-width: 3px !important;padding-left: 20px !important;border-left-color: #5191fa !important;border-left-style: solid !important;}.vc_custom_1544512778823{margin-bottom: 15px !important;border-left-width: 3px !important;padding-left: 20px !important;border-left-color: #5191fa !important;border-left-style: solid !important;}.vc_custom_1543220015251{margin-bottom: 20px !important;}.vc_custom_1543220022219{margin-bottom: 20px !important;}.vc_custom_1543220028834{margin-bottom: 20px !important;}            </style>

        <style id="stassets_footer_css">

            
        </style>

    
@stop