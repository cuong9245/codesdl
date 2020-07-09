@extends('Frontend.layout')

@section('content')

<?php  
    $review    = App\Models\commentClient::where('id_page',$tourId->id)->where('status', '1')->get();
    $sum = [];
    for ($i=0; $i < count($review); $i++) { 

        $sum[] = (int)$review[$i]['star'];

    }
    if(count($review)==0){
        $reviewStar =0;
    }
    else{



        $reviewStar = round(array_sum($sum)/count($review));
    }
    $greyStar   = 5-$reviewStar;


    //time tour 

    $now      =  \Carbon\Carbon::now();

    $datetime = new \Carbon\Carbon($tourId->departureDay.' '.$tourId->departureTime);

    $days     = $datetime->diffInDays($now);

    $hours    = $now->diffInHours($datetime)%24;

    $minutes  = ($now->diffInMinutes($datetime)%1440)%60;

    $seconds  = (($now->diffInSeconds($datetime)%86400)%1440)%60;


?>

<script type="text/javascript" src="{{ asset('highslide/highslide-with-gallery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('highslide/highslide.css')}}" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" />
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
<style>
    .input-number{
        width:35% !important;
    }
    .select-number{
        display:flex;
    }
    .sign{
        width:36px;
        height:20px;
    }
    .minus, .add, .number{
        font-size:25px;
        cursor:pointer;
    }
    .fix1{
        width: 270px !important;
        position: fixed;
        top: 0px;
        z-index: 9;
    }
    .books{
        width:100%;
    }
    .hovered, .selected{
        color:#5191FA;
    }

    .top{
        top:0 !important;
        z-index: 99999999 !important;
    }
    .review-score .bestseller{
        background: red;
        color: #fff;
        padding: 5px;
    }
</style>
<div id="st-content-wrapper" class="st-single-tour">
    <div class="st-breadcrumb hidden-xs">
        <div class="container">
            <ul>
                <li><a href="https://tomap.travelerwp.com">Home</a></li>
                <li><a href="https://tomap.travelerwp.com/search-on-sidebar/?location_id=1957&amp;location_name=United%20States">United States</a></li>
                <li class="active">National Parks Tour One Days</li>
            </ul>
        </div>
    </div>
    <div class="hotel-target-book-mobile" style="display: none;">
        <div class="price-wrapper">
            from <span class="price"><span class="text-lg lh1em item "> {!! $tourId->discountPrice !!}$</span></span>     
        </div>
        <a href="" class="btn btn-mpopup btn-green">Book Now</a>
    </div>
    <div class="st-tour-content style3">
        <div class="container">
            <!--Tour header-->
            <div class="st-hotel-header">
                <div class="left">
                    <h2 class="st-heading">National Parks Tour One Days</h2>
                    <div class="sub-heading">
                    </div>
                     <span id="times" class="hide">1</span>
                </div>
                <div class="right">
                    <div class="review-score style-2">
                        <div class="service-tag bestseller">

                            <span class="dem"> <span id="d1">{{ $days }}</span> days left <span id="h1">{{ $hours }}</span>:<span id="m1">{{ $minutes }}</span>:<span id="s1">{{ $seconds }}</span></span>
                            <!-- <div class="feature_class st_featured featured">Featured</div> -->
                        </div>
                        <span class="head-rating">Average</span>
                        <div class="st-stars style-2">
                            @for($k=0; $k<$reviewStar; $k++)
                            <i class="fa fa-star"></i>
                            @endfor

                            @for($k=0; $k<$greyStar; $k++)
                            <i class="fa fa-star grey"></i>
                            @endfor
                        </div>
                        <p class="st-link">from {{ count($review) }} reviews</p>
                    </div>
                </div>
            </div>
            <?php  
                use \App\Http\Controllers\Frontend\TourController; 
                
                if(count($image)>0){
                    $img = $image[0]->image;
                }
                else{
                    $img = "images/no-image.png";
                }
                
            ?>
            
            <!--Tour Banner-->
            <div class="tour-featured-image featured-image-background" style="background-image: url('{{ $img }}">
                <div class="st-gallery">
                    <div class="shares dropdown">
                        <a href="#" class="share-item social-share">
                            <i class="input-icon field-icon fa">
                                <svg width="20px" height="20px" viewBox="0 0 18 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Room_Only_Detail_1" transform="translate(-921.000000, -251.000000)" stroke="#FFFFFF">
                                            <g id="room-detail" transform="translate(0.000000, 211.000000)">
                                                <g id="img">
                                                    <g id="share" transform="translate(910.000000, 30.000000)">
                                                        <g id="ico_share" transform="translate(10.000000, 10.000000)">
                                                            <g id="Group" transform="translate(1.666667, 0.000000)">
                                                                <g id="share-2" stroke-width="1.5">
                                                                    <path d="M16.4583333,4.375 L9.58333333,4.375 C8.20262146,4.375 7.08333333,5.49428813 7.08333333,6.875 L7.08333333,10" id="Shape"></path>
                                                                    <polyline id="Shape" points="12.7083333 8.125 16.4583333 4.375 12.7083333 0.625"></polyline>
                                                                    <path d="M13.9583333,11.875 L13.9583333,18.125 C13.9583333,18.8153559 13.3986893,19.375 12.7083333,19.375 L1.45833333,19.375 C0.767977396,19.375 0.208333333,18.8153559 0.208333333,18.125 L0.208333333,8.125 C0.208333333,7.43464406 0.767977396,6.875 1.45833333,6.875 L3.33333333,6.875" id="Shape"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                        </a>

                        <ul class="share-wrapper">
                            <li><a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://tomap.travelerwp.com/st_tour/trip-of-new-york-discover-america/&amp;title=National Parks Tour One Days" target="_blank" rel="noopener" original-title="Facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a class="twitter" href="https://twitter.com/share?url=https://tomap.travelerwp.com/st_tour/trip-of-new-york-discover-america/&amp;title=National Parks Tour One Days" target="_blank" rel="noopener" original-title="Twitter"><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a class="google" href="https://plus.google.com/share?url=https://tomap.travelerwp.com/st_tour/trip-of-new-york-discover-america/&amp;title=National Parks Tour One Days" target="_blank" rel="noopener" original-title="Google+"><i class="fa fa-google-plus fa-lg"></i></a></li>
                            <li><a class="no-open pinterest" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','https://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" target="_blank" rel="noopener" original-title="Pinterest"><i class="fa fa-pinterest fa-lg"></i></a></li>
                            <li><a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://tomap.travelerwp.com/st_tour/trip-of-new-york-discover-america/&amp;title=National Parks Tour One Days" target="_blank" rel="noopener" original-title="LinkedIn"><i class="fa fa-linkedin fa-lg"></i></a></li>
                        </ul>

                        <a href="#" class="share-item like-it" data-type="st_tours" data-id="1613"><i class="fa fa-heart-o"></i></a>
                    </div>
                     @if(count($image)>1) 

                    <div class="btn-group">
                        <a id="thumb1" href="{{ $image[0]->image }}" class="btn btn-transparent has-icon radius " onclick="return hs.expand(this)">
                            More Image
                        </a> 

                        <div class="hidden-container">
                            @for($i=1; $i< count($image);$i++)
                            <a href="{{ $image[$i]->image }}" class="highslide" onclick="return hs.expand(this, { thumbnailId: 'thumb1' })">
                            </a>
                            @endfor
                            
                        </div>
                        <!-- endgalery -->

                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <!--Tour Info-->
                    <div class="st-tour-feature">
                        <div class="row">
                            <div class="col-xs-6 col-lg-3">
                                <div class="item">
                                    <div class="icon">
                                        <i class="input-icon field-icon fa">
                                            <svg width="32px" height="32px" viewBox="0 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Tour_Detail_1" transform="translate(-134.000000, -1005.000000)" stroke="#5191FA">
                                                        <g id="tour-detail" transform="translate(0.000000, 211.000000)">
                                                            <g id="feauture" transform="translate(135.000000, 765.000000)">
                                                                <g id="Group-3">
                                                                    <g id="Group" transform="translate(0.000000, 25.000000)">
                                                                        <g id="ico_clock" transform="translate(0.000000, 5.000000)">
                                                                            <circle id="Oval" cx="16" cy="16" r="16"></circle>
                                                                            <circle id="Oval" cx="16" cy="17.3333333" r="2.28571429"></circle>
                                                                            <path d="M16,15.047619 L16,7.04761905" id="Shape"></path>
                                                                            <path d="M17.6167619,18.9500952 L21.7142857,23.047619" id="Shape"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Duration</h4>
                                        <p class="value">
                                            6 hours                                                
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="item">
                                    <div class="icon">
                                        <i class="input-icon field-icon fa">
                                            <svg width="32px" height="32px" viewBox="0 0 34 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Tour_Detail_1" transform="translate(-335.000000, -1005.000000)" stroke="#5191FA">
                                                        <g id="tour-detail" transform="translate(0.000000, 211.000000)">
                                                            <g id="feauture" transform="translate(135.000000, 765.000000)">
                                                                <g id="Group" transform="translate(201.000000, 25.000000)">
                                                                    <g id="ico_tour_type" transform="translate(0.000000, 5.000000)">
                                                                        <path d="M13.4810667,23.7283556 C13.7772954,25.6164963 13.043711,27.5192464 11.5566476,28.7198584 C10.0695841,29.9204704 8.05496197,30.2365427 6.27166976,29.549014 C4.48837756,28.8614852 3.20733983,27.2748074 2.91111111,25.3866667 L2.74613333,24.3299556 C2.65661545,23.7692095 2.79434998,23.1959129 3.12883306,22.7370331 C3.46331614,22.2781533 3.96694361,21.9715605 4.52817778,21.8851556 L10.8712889,20.8896 C11.432035,20.8000821 12.0053315,20.9378166 12.4642113,21.2722997 C12.9230912,21.6067828 13.2296839,22.1104103 13.3160889,22.6716444 L13.4810667,23.7283556 Z" id="Shape"></path>
                                                                        <path d="M5.11555556,0.1408 C1.71134814,0.982901045 -0.457506858,4.31950538 0.154844444,7.77244444 L1.41777778,15.8691556 C1.60071,17.0365699 2.69505968,17.8348913 3.86257778,17.6526222 L10.2042667,16.6570667 C10.7657612,16.571 11.2697435,16.2645497 11.6045222,15.8056305 C11.9393009,15.3467113 12.0772269,14.7732252 11.9877333,14.2122667 L11.9592889,14.0088889 C11.7659953,12.7663569 11.9436025,11.4944126 12.4698667,10.3523556 C12.9981751,9.20988894 13.1758566,7.93642212 12.9804444,6.69297778 L12.7827556,5.4272 C12.5097684,3.68767687 11.5342848,2.1366314 10.0846439,1.13712946 C8.63500309,0.137627517 6.8384634,-0.222588541 5.11555556,0.1408 Z" id="Shape"></path>
                                                                        <path d="M18.2583111,25.6995556 C17.8428835,28.5534868 19.7641913,31.223136 22.6023163,31.7355326 C25.4404413,32.2479292 28.1739846,30.4186694 28.7827556,27.5996444 L28.9719111,26.5457778 C29.1807578,25.3831626 28.4089448,24.2709374 27.2467556,24.0597333 L20.9292444,22.9219556 C20.3703881,22.8193233 19.7936791,22.9438755 19.3269888,23.2679956 C18.8602984,23.5921158 18.5421913,24.0890206 18.4432,24.6485333 L18.2583111,25.6995556 Z" id="Shape"></path>
                                                                        <path d="M27.1770667,2.31253333 C30.5568647,3.23734789 32.6432678,6.62146013 31.9514667,10.0565333 L30.4965333,18.1233778 C30.3971763,18.68204 30.079348,19.1781018 29.6133417,19.5018508 C29.1473353,19.8255998 28.5715511,19.9503581 28.0133333,19.8485333 L21.6958222,18.7107556 C21.1363095,18.6117642 20.6394047,18.2936571 20.3152845,17.8269668 C19.9911643,17.3602764 19.8666122,16.7835675 19.9692444,16.2247111 L20.0062222,16.0170667 C20.2290597,14.7795819 20.0806008,13.5038248 19.5795556,12.3505778 C19.0784767,11.1968384 18.9300215,9.92061854 19.1528889,8.68266667 L19.3804444,7.42257778 C19.6924113,5.68717624 20.7045511,4.15653375 22.1792495,3.18999024 C23.6539479,2.22344673 25.4613226,1.90612953 27.1770667,2.31253333 Z" id="Shape"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Tour Type</h4>
                                        <p class="value">
                                            Specific Tour                                                
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="item">
                                    <div class="icon">
                                        <i class="input-icon field-icon fa">
                                            <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Room_Detail_1" transform="translate(-544.000000, -803.000000)" stroke="#5191FA">
                                                        <g id="room-detail" transform="translate(0.000000, 211.000000)">
                                                            <g id="Group-3" transform="translate(135.000000, 562.000000)">
                                                                <g id="Group" transform="translate(409.000000, 30.000000)">
                                                                    <g id="ico_adults">
                                                                        <g id="Group" transform="translate(1.000000, 1.000000)">
                                                                            <g id="Regular">
                                                                                <circle id="Oval" cx="7" cy="4" r="4"></circle>
                                                                                <path d="M14,17 C14,13.1340068 10.8659932,10 7,10 C3.13400675,10 4.4408921e-16,13.1340068 0,17 L0,20 L3,20 L4,30 L10,30 L11,20 L14,20 L14,17 Z" id="Shape"></path>
                                                                                <path d="M16,24 L18,24 L19,30 L25,30 L26,24 L30,24 L27,15 C26,12 24.7613333,10 22,10 C20.1015957,10.0018584 18.4126862,11.2059289 17.792,13" id="Shape"></path>
                                                                                <circle id="Oval" cx="22" cy="4" r="4"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Group Size</h4>
                                        <p class="value">
                                            20 people                                                
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-3">
                                <div class="item">
                                    <div class="icon">
                                        <i class="input-icon field-icon fa">
                                            <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                <desc>Created with Sketch.</desc>
                                                <defs></defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                    <g id="Tour_Detail_1" transform="translate(-735.000000, -1005.000000)" stroke="#5191FA">
                                                        <g id="tour-detail" transform="translate(0.000000, 211.000000)">
                                                            <g id="feauture" transform="translate(135.000000, 765.000000)">
                                                                <g id="Group" transform="translate(601.000000, 25.000000)">
                                                                    <g transform="translate(0.000000, 5.000000)" id="Regular">
                                                                        <g>
                                                                            <circle id="Oval" cx="9" cy="5.5" r="5.5"></circle>
                                                                            <path d="M10,13.0773333 C9.66846827,13.0319989 9.33455994,13.0061766 9,13 C4.02943725,13 5.92118946e-16,17.0294373 0,22" id="Shape"></path>
                                                                            <path d="M28,26 L24,26 L18,30 L18,26 L16,26 C14.8954305,26 14,25.1045695 14,24 L14,16 C14,14.8954305 14.8954305,14 16,14 L28,14 C29.1045695,14 30,14.8954305 30,16 L30,24 C30,25.1045695 29.1045695,26 28,26 Z" id="Shape"></path>
                                                                            <path d="M18,18 L26,18" id="Shape"></path>
                                                                            <path d="M18,22 L26,22" id="Shape"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="info">
                                        <h4 class="name">Languages</h4>
                                        <p class="value">
                                            English, Francais                                                
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Tour info-->
                    <!--Tour Overview-->
                    <div class="st-overview">
                        <h3 class="st-section-title">Overview</h3>
                        <div class="st-description" data-toggle-section="st-description">
                            {!! $tourId->Summary !!}
                        </div>    
                    </div>
                    <!--End Tour Overview-->
                    
                    <!--End Tour highlight-->
                    <!--Tour program-->
                    <div class="st-program">
                        <div class="st-title-wrapper">
                            <h3 class="st-section-title">Itinerary</h3>
                        </div>
                        <div class="st-program-list style3">
                            @if(count($ProgramTour)>0)
                            @foreach($ProgramTour as $key =>$program)
                            
                            <div class="item active">
                                <div class="icon"><img src="https://freeiconshop.com/wp-content/uploads/edd/calendar-flat.png" alt="Itenirary"></div>
                                <h5>{{ $program->title}}</h5>
                                <div class="body">
                                    {!! $program->detail !!}           
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <!--End Tour program-->
                    <!--Tour Include/Exclude-->
                    <div class="st-include">
                        <h3 class="st-section-title">
                            Included/Exclude                                    
                        </h3>
                       {!! $tourId->note !!}
                    </div>
                    <!--End Tour Include/Exclude-->
                    <!--Tour Map-->
                    <div class="st-hr large st-height2"></div>
                    <div class="st-map-wrapper">
                        <div class="st-flex space-between">
                            <h2 class="st-heading-section mg0">Tour's Location</h2>
                        </div>
                        <div class="st-map mt30">
                            <div class="google-map gmap3" id="list_map" data-data_show="{&quot;0&quot;:{&quot;id&quot;:1613,&quot;name&quot;:&quot;National Parks Tour One Days&quot;,&quot;post_type&quot;:&quot;st_hotel&quot;,&quot;lat&quot;:&quot;34.201071646791846&quot;,&quot;lng&quot;:&quot;-118.2713168169081&quot;,&quot;icon_mk&quot;:&quot;http:\/\/travelerdemo.wpengine.com\/wp-content\/uploads\/st_uploadfont\/tour.png&quot;,&quot;content_html&quot;:&quot;<div class=\&quot;item-service-map\&quot;><div class=\&quot;thumb\&quot;><a href=\&quot;\&quot;><img src=\&quot;https:\/\/tomap.travelerwp.com\/wp-content\/uploads\/2015\/01\/iStock_000037401046XXXLarge.jpg\&quot; alt=\&quot;National Parks Tour One Days\&quot; class=\&quot;img-responsive\&quot;  style =\&quot;width: 150px;height:120px;object-fit: cover;\&quot;\/>        <\/a><\/div><div class=\&quot;content\&quot;><h4 class=\&quot;service-title\&quot;><a href=\&quot;#\&quot;>National Parks Tour One Days<\/a><\/h4><p class=\&quot;service-location\&quot;><\/p><\/div><\/div>&quot;}}" data-lat="34.201071646791846" data-lng="-118.2713168169081" data-icon="http://travelerdemo.wpengine.com/wp-content/uploads/st_uploadfont/tour.png" data-zoom="13" data-disablecontrol="true" data-showcustomcontrol="true" data-style="normal" style="position: relative; overflow: hidden;">
                                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                    <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                        <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                            <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                        <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -172, -236);">
                                                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                    <div style="width: 40px; height: 50px; overflow: hidden; position: absolute; left: 0px; top: 0px; z-index: 0;"><img alt="" src="http://travelerdemo.wpengine.com/wp-content/uploads/st_uploadfont/tour.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 44px; height: 48px;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                        <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -172, -236);">
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -172, -236);">
                                                        <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1404!3i3267!4i256!2m3!1e0!2sm!3i504221216!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=126996" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1403!3i3267!4i256!2m3!1e0!2sm!3i504221216!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=128960" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1403!3i3266!4i256!2m3!1e0!2sm!3i504221216!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=28117" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1404!3i3266!4i256!2m3!1e0!2sm!3i504221204!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=86441" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1405!3i3266!4i256!2m3!1e0!2sm!3i504221204!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=84477" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1405!3i3267!4i256!2m3!1e0!2sm!3i504221216!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=125032" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1402!3i3267!4i256!2m3!1e0!2sm!3i504221216!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=130924" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1402!3i3266!4i256!2m3!1e0!2sm!3i504221216!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=30081" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1406!3i3266!4i256!2m3!1e0!2sm!3i504221204!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=82513" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i1406!3i3267!4i256!2m3!1e0!2sm!3i504221216!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=123068" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                <p class="gm-style-pbt"></p>
                                            </div>
                                            <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                        <div title="" style="width: 40px; height: 50px; overflow: hidden; position: absolute; opacity: 0; cursor: pointer; touch-action: none; left: 0px; top: 0px; z-index: 0;"><img alt="" src="http://travelerdemo.wpengine.com/wp-content/uploads/st_uploadfont/tour.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 44px; height: 48px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                        <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                            <a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=34.201072,-118.271317&amp;z=13&amp;t=m&amp;hl=vi-VN&amp;gl=US&amp;mapclient=apiv3" title="Mở khu vực này trong Google Maps (mở cửa sổ mới)" style="position: static; overflow: visible; float: none; display: inline;">
                                                <div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                            </a>
                                        </div>
                                        <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 285px; top: 135px;">
                                            <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Dữ liệu Bản đồ</div>
                                            <div style="font-size: 13px;">Dữ liệu bản đồ ©2020</div>
                                            <button draggable="false" title="Đóng" aria-label="Đóng" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
                                        </div>
                                        <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 215px; bottom: 0px; width: 109px;">
                                            <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span>Dữ liệu bản đồ ©2020</span></div>
                                            </div>
                                        </div>
                                        <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                            <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2020</div>
                                        </div>
                                        <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 115px; bottom: 0px;">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi-VN_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div>
                                        </div>
                                        <button draggable="false" title="Chuyển đổi chế độ xem toàn màn hình" aria-label="Chuyển đổi chế độ xem toàn màn hình" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@34.2010716,-118.2713168,13z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div>
                                        </div>
                                        <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; bottom: 95px; right: 40px;">
                                            <div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;">
                                                <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                    <button draggable="false" title="Phóng to" aria-label="Phóng to" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                                    <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                    <button draggable="false" title="Thu nhỏ" aria-label="Thu nhỏ" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                                </div>
                                            </div>
                                            <div class="gmnoprint" controlwidth="40" controlheight="40" style="display: none; position: absolute;">
                                                <div style="width: 40px; height: 40px;"><button draggable="false" title="Xoay bản đồ 90 độ" aria-label="Xoay bản đồ 90 độ" type="button" class="gm-control-active" style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><button draggable="false" title="Nghiêng bản đồ" aria-label="Nghiêng bản đồ" type="button" class="gm-tilt gm-control-active" style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="width: 18px;"></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                                    <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div>
                                    <div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Trang này không thể tải Google Maps đúng cách.</span></div>
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Bạn có sở hữu trang web này không?</a></td>
                                            <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Tour Map-->
                    <!--Tour FAQ-->
                    <div class="st-faq">
                        <h3 class="st-section-title">
                            FAQs                                    
                        </h3>

                        <?php   
                            $faqs = App\Models\faqs::where('tourId',$tourId->id)->get();

                        ?>

                        @if(count($faqs)>0)

                        @foreach($faqs as $key=>$faq)

                        <div class="item {{ ($key==0)?'active':''}}">
                            <div class="header">
                                <i class="input-icon field-icon fa">
                                    <svg height="18px" width="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                        <g fill="#5E6D77">
                                            <path d="M5.25,24c-0.116,0-0.232-0.027-0.336-0.079C4.659,23.793,4.5,23.536,4.5,23.25V19.5H2.25C1.009,19.5,0,18.491,0,17.25v-15
                                                C0,1.009,1.009,0,2.25,0h19.5C22.991,0,24,1.009,24,2.25v15c0,1.241-1.009,2.25-2.25,2.25H11.5l-5.8,4.35
                                                C5.571,23.947,5.411,24,5.25,24z M2.25,1.5C1.836,1.5,1.5,1.836,1.5,2.25v15C1.5,17.664,1.836,18,2.25,18h3
                                                C5.664,18,6,18.336,6,18.75v3l4.8-3.6c0.129-0.097,0.289-0.15,0.45-0.15h10.5c0.414,0,0.75-0.336,0.75-0.75v-15
                                                c0-0.414-0.336-0.75-0.75-0.75H2.25z"></path>
                                            <path d="M12,12c-0.414,0-0.75-0.336-0.75-0.75v-0.256c-0.001-0.952,0.602-1.805,1.5-2.122c0.897-0.317,1.5-1.17,1.5-2.121
                                                c0-0.6-0.234-1.165-0.66-1.59c-0.425-0.426-0.99-0.66-1.59-0.66c-0.601,0-1.166,0.234-1.591,0.659
                                                C9.984,5.584,9.75,6.149,9.75,6.75C9.75,7.164,9.414,7.5,9,7.5S8.25,7.163,8.25,6.75c0-2.067,1.683-3.749,3.75-3.749
                                                c1.002,0,1.944,0.39,2.652,1.099c0.708,0.709,1.098,1.65,1.098,2.652c0,1.586-1.005,3.006-2.5,3.535
                                                c-0.299,0.106-0.5,0.39-0.5,0.708v0.256C12.75,11.664,12.414,12,12,12z"></path>
                                            <circle cx="12" cy="14.625" r="1.125"></circle>
                                        </g>
                                    </svg>
                                </i>
                                <h5>{{ $faq->question }}</h5>
                                <span class="arrow">
                                <i class="fa fa-angle-down"></i>
                                </span>
                            </div>
                            <div class="body">
                               {!! $faq->answer !!}                                     
                            </div>
                        </div>
                        @endforeach

                        @endif
                    </div>
                    <!--End Tour FAQ-->
                    <!--Review Option-->
                    <div class="st-hr large st-height2 st-hr-comment"></div>
                    <h2 class="st-heading-section">Reviews</h2>

                     
                    <div id="reviews" data-toggle-section="st-reviews" class=" stoped-scroll-section">
                        <div class="review-box">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="review-box-score">
                                        <div class="review-score">
                                            <span class="per-total">{{  $reviewStar }}/5</span>
                                        </div>
                                        <div class="review-score-text">Average</div>
                                        <div class="review-score-base">
                                            Based on                                                
                                            <span><?php echo count($review) ?> reviews</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="review-sumary">
                                        <div class="item">
                                            <div class="label">
                                                Excellent                                                    
                                            </div>
                                            <div class="progress">
                                                <div class="percent green" style="width: 100%;"></div>
                                            </div>
                                            <div class="number">5</div>
                                        </div>
                                        <div class="item">
                                            <div class="label">
                                                Very Good                                                    
                                            </div>
                                            <div class="progress">
                                                <div class="percent darkgreen" style="width: 100%;"></div>
                                            </div>
                                            <div class="number">5</div>
                                        </div>
                                        <div class="item">
                                            <div class="label">
                                                Average                                                    
                                            </div>
                                            <div class="progress">
                                                <div class="percent yellow" style="width: 100%;"></div>
                                            </div>
                                            <div class="number">5</div>
                                        </div>
                                        <div class="item">
                                            <div class="label">
                                                Poor                                                    
                                            </div>
                                            <div class="progress">
                                                <div class="percent orange" style="width:0%;"></div>
                                            </div>
                                            <div class="number">0</div>
                                        </div>
                                        <div class="item">
                                            <div class="label">
                                                Terrible                                                    
                                            </div>
                                            <div class="progress">
                                                <div class="percent red" style="width: 0%;"></div>
                                            </div>
                                            <div class="number">0</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-pagination">
                            <div class="summary">
                            </div>
                            <div id="reviews" class="review-list">
                                @if(count($review)>0)
                                @foreach($review as $reviews)
                               
                                <div class="comment-item">
                                    <div class="comment-item-head">
                                        <div class="media">
                                            <div class="media-left">
                                                <img alt="WordPress Booking Theme" src="https://secure.gravatar.com/avatar/?s=50&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/?s=100&amp;d=mm&amp;r=g 2x" class="avatar avatar-50 photo avatar-default" height="50" width="50">                    
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">{{ $reviews->name }}</h4>
                                                <div class="date">{{ $reviews->date }}</div>
                                            </div>
                                        </div>
                                        <div class="like">
                                            <span data-value="{{ $reviews->id }}">{{ $reviews->liked }}</span> likes this                                                
                                            <a data-id="{{ $reviews->id }}" href="#" class="btn-like st-like-review ">
                                            <i class="fa fa-thumbs-o-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="comment-item-body">
                                        <h4 class="title st_tours">
                                            {{ $reviews->name }}                       
                                        </h4>
                                        <ul class="review-star">
                                            <?php  
                                                $star   = (int)$reviews->star;
                                                $nostar = 5 - $star;

                                            ?>
                                          
                                            @for($i = 0; $i < $star; $i++)
                                            <li><i class="fa  fa-star"></i></li>
                                            @endfor

                                            @for($i = 0; $i < $nostar; $i++)
                                            <li><i class="fa  fa-star-o"></i></li>
                                            @endfor

                                           <!--  <li><i class="fa  fa-star"></i></li> -->
                                            <!-- <li><i class="fa  fa-star-o"></i></li>
                                            <li><i class="fa  fa-star-o"></i></li>
                                            <li><i class="fa  fa-star-o"></i></li>
                                            <li><i class="fa  fa-star-o"></i></li> -->
                                        </ul>
                                        <div class="detail">
                                            <div class="st-description" data-show-all="st-description-313">

                                                {{ $reviews->content }}    

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @endforeach
                                @endif
                            </div>
                        </div>
                       
                        <div id="write-review">
                            <h4 class="heading">
                                <a href="" class="toggle-section c-main f16" data-target="st-review-form">Write a review                                                <i class="fa fa-angle-down ml5"></i></a>
                            </h4>
                            <div id="respond" class="comment-respond" data-toggle-section="st-review-form" style="display: none">
                                <form action="/commentClients" method="post" id="commentform" class="review-form" novalidate="">
                                    @csrf
                                    <div class="form-wrapper">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Name *">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Email *">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6 col-md-push-6">
                                                <div class="form-group review-items has-matchHeight" style="height: 342px;">
                                                    <div class="item">
                                                        <label>Service</label>
                                                        <input class="st_review_stats" type="hidden" name="service">
                                                        <div class="rates" id="service">
                                                            <i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i>                                
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Organization</label>
                                                        <input class="st_review_stats" type="hidden" name="organization">
                                                        <div class="rates" id="organization">
                                                            <i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i>                                
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Friendliness</label>
                                                        <input class="st_review_stats" type="hidden" name="friendliness">
                                                        <div class="rates" id="friendliness">
                                                            <i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i>                                
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Area Expert</label>
                                                        <input class="st_review_stats" type="hidden" name="area-expert">
                                                        <div class="rates" id="area-expert">
                                                            <i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i>                                
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <label>Safety</label>
                                                        <input class="st_review_stats" type="hidden" name="safety">
                                                        <div class="rates" id="safety">
                                                            <i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i><i class="fa fa-star grey"></i>                                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-6 col-md-pull-6">
                                                <div class="form-group">
                                                    <textarea name="content" class="form-control has-matchHeight" placeholder="Content" style="height: 342px;"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" class="form-control" name="id_page" value="{{  $tourId->id  }}">

                                    <div class="text-center">
                                        <!-- <input type="hidden" id="comment_post_ID" name="comment_post_ID" value="1613">
                                        <input type="hidden" id="comment_parent" name="comment_parent" value="0"> -->
                                        <input id="submit" type="submit" name="submit" class="btn btn-green upper font-medium" value="Leave a Review">
                                    </div>
                                </form>
                            </div>
                            <!-- #respond -->
                        </div>
                    </div>
                   
                    <!--End Review Option-->
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="widgets">
                        <div class="scroll">
                            <div class="close-icon hide">
                                <i class="input-icon field-icon fa">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Ico_close" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <g id="Group" stroke="#1A2B48" stroke-width="1.5">
                                                <g id="close">
                                                    <path d="M0.75,23.249 L23.25,0.749" id="Shape"></path>
                                                    <path d="M23.25,23.249 L0.75,0.749" id="Shape"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                            </div>
                            <div  class="form-book-wrapper relative">
                                <div class="loader-wrapper">-->
                                    <div class="st-loader"></div>
                                </div>
                                <div class="form-head">
                                    <div class="price">
                                        <span class="label">
                                        from                                                </span>
                                        <span class="value">
                                        <span class="text-lg lh1em item "> {!! $tourId->discountPrice !!}$</span>                                                </span>
                                    </div>
                                </div>
                                <div id="form-booking-inpage" method="post" action="#booking-request" class="tour-booking-form">
                                    
                                    <div class="form-group form-date-field form-date-search clearfix " data-format="DD/MM/YYYY" data-availability-date="03/30/2020">
                                        <div class="date-wrapper clearfix">
                                            <div class="check-in-wrapper" id="check-in-render">
                                                <label>Date</label>

                                                <input type="hidden" id="datepicker">

                                                <div class="render check-in-render">30/03/2020</div>
                                                <span class="sts-tour-checkout-label hidden">
                                                    <span> - </span>
                                                
                                                </span>
                                            </div>
                                            <i class="fa fa-angle-down arrow"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-guest-search clearfix ">
                                        <div class="guest-wrapper clearfix">
                                            <div class="check-in-wrapper">
                                                <label>Adults</label>
                                                <div class="render">Age 18+</div>
                                            </div>
                                            <div class="select-wrapper">
                                                <div class="input-group select-number">
                                                    
                                                    <div class="sign"><span class="minus" data-value="adults">-</span>  </div>
                                            
                                                    <div class="sign"><span class="number adults" >1</span>  </div>
                                                    
                                                    <div class="sign"><span class="add" data-value="adults">+</span>  </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="guest-wrapper clearfix">
                                            <div class="check-in-wrapper">
                                                <label>Children</label>
                                                <div class="render">Age 16-17</div>
                                            </div>
                                            <div class="select-wrapper">
                                                <div class="input-group select-number">
                                                    
                                                    <div class="sign"><span class="minus" data-value="children">-</span>  </div>
                                            
                                                    <div class="sign"><span class="number children" >1</span>  </div>
                                                    
                                                    <div class="sign"><span class="add" data-value="children">+</span>  </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="guest-wrapper clearfix">
                                            <div class="check-in-wrapper">
                                                <label>Infant</label>
                                                <div class="render">Age 0-5</div>
                                            </div>
                                            <div class="select-wrapper">
                                                <div class="input-group select-number">
                                                    
                                                    <div class="sign"><span class="minus" data-value="infant">-</span>  </div>
                                            
                                                    <div class="sign"><span class="number infant" >1</span>  </div>
                                                    
                                                    <div class="sign"><span class="add" data-value="infant">+</span>  </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="guest-wrapper clearfix">
                                            <div class="books">
                                                 <a href="{{route('booking', ['id' =>  $tourId->url_rewrite]) }}">
                                                <button class="btn btn-green btn-large btn-full upper btn-book-ajax" >
                                                   
                                                    Book Now                                                                    
                                                    <i class="fa fa-spinner fa-spin hide"></i>
                                                </button>
                                                </a>
                                                <input style="display:none;"  class="btn btn-default btn-send-message" data-id="1613" name="st_send_message" value="Send message">
                                            </div>
                                        </div>    
                                    </div>  
                                </div>    
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-hr large"></div>
            <h2 class="heading text-center f28 mt50">You might also like</h2>
            <div class="st-list-tour-related row mt50">
                @if(count($tour)>0)    
                @foreach($tour as $tours)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="item has-matchHeight" style="height: 393px;">
                        <div class="featured">
                            <a href="{{route('tourDetails', ['id' => $tours->url_rewrite]) }}">
                            <img src="{{ (TourController::imageTourFirst($tours->id)==''?asset('images/no-image.png')  :TourController::imageTourFirst($tours->id)->image) }}" alt="WordPress Booking Theme" class="img-responsive">
                            </a>
                            <a href="" class="login" data-toggle="modal" data-target="#st-login-form">
                                <div class="service-add-wishlist" title="Add to wishlist">
                                    <i class="fa fa-heart"></i>
                                    <div class="lds-dual-ring"></div>
                                </div>
                            </a>
                        </div>
                        <div class="body">
                            <i class="input-icon field-icon fa">
                                <svg width="16px" height="16px" viewBox="0 0 11 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Hotel_Search_Hover" transform="translate(-170.000000, -553.000000)" stroke="#A0A9B2">
                                            <g id="location-select" transform="translate(135.000000, 359.000000)">
                                                <g id="hover" transform="translate(0.000000, 42.000000)">
                                                    <g id="Group" transform="translate(35.000000, 149.000000)">
                                                        <g id="ico_maps_add_2" transform="translate(0.000000, 3.000000)">
                                                            <g id="Group">
                                                                <g id="pin-1">
                                                                    <path d="M10.5,5.5 C10.5,8.314 8.54466667,9.93266667 7.07933333,11.5 C6.202,12.4386667 5.5,15.5 5.5,15.5 C5.5,15.5 4.8,12.4406667 3.92466667,11.5046667 C2.458,9.938 0.5,8.31666667 0.5,5.5 C0.5,2.73857625 2.73857625,0.5 5.5,0.5 C8.26142375,0.5 10.5,2.73857625 10.5,5.5 Z" id="Shape"></path>
                                                                    <circle id="Oval" cx="5.5" cy="5.5" r="2"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                            <span class="ml5 f14 address">{{ $tours->startPlace }}</span>                                                    
                            <h4 class="title"><a href="{{route('tourDetails', ['id' => $tours->url_rewrite]) }}" class="st-link c-main">{!! $tours->Name !!}</a></h4>
                            <div class="st-stars style-2">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <p class="review-text">3 reviews</p>
                            <div class="st-flex space-between">
                                <div class="left st-flex">
                                    <i class="input-icon field-icon fa">
                                        <svg height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <g fill="#5E6D77">
                                                <path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25
                                                    C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75
                                                    S17.376,2.25,12,2.25z"></path>
                                                <path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25
                                                    c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121
                                                    c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25
                                                    c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"></path>
                                            </g>
                                        </svg>
                                    </i>
                                    <span class="duration">{{ $tours->Time }} days</span>
                                </div>
                                <div class="right st-flex">
                                    <i class="input-icon field-icon fa">
                                        <svg width="9px" height="16px" viewBox="0 0 11 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Room_Only_Detail_1" transform="translate(-135.000000, -4858.000000)" fill="#FFAB53" fill-rule="nonzero">
                                                    <g id="nearby-hotel" transform="translate(130.000000, 4334.000000)">
                                                        <g id="h1-g" transform="translate(5.000000, 136.000000)">
                                                            <g id="hotel-grid">
                                                                <g id="price" transform="translate(0.000000, 383.000000)">
                                                                    <g id="thunder" transform="translate(0.000000, 5.000000)">
                                                                        <path d="M10.0143234,6.99308716 C9.91102517,6.83252576 9.73362166,6.73708716 9.54386728,6.73708716 L5.61404272,6.73708716 L5.61404272,0.561648567 C5.61404272,0.296666111 5.42877956,0.0676134793 5.16941114,0.0125959355 C4.90555149,-0.0435444154 4.64730587,0.0923152337 4.5395164,0.333718743 L0.0482883306,10.4389819 C-0.0291853536,10.6118942 -0.0123432484,10.8139994 0.0909549973,10.9723152 C0.194253243,11.1317538 0.371656752,11.2283152 0.561411138,11.2283152 L4.4912357,11.2283152 L4.4912357,17.4037538 C4.4912357,17.6687363 4.67649886,17.8977889 4.93586728,17.9528065 C4.97516552,17.9606661 5.01446377,17.9651573 5.05263921,17.9651573 C5.27046377,17.9651573 5.47369184,17.8382801 5.56576201,17.6316837 L10.0569901,7.5264205 C10.133341,7.35238541 10.1187445,7.15252576 10.0143234,6.99308716 Z" id="Shape"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                    <span class="price">
                                    from <span class="text-lg lh1em item "> {!! $tours->discountPrice !!}$</span>                                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

<!-- album image  -->

<script type="text/javascript">
    hs.graphicsDir = '../highslide/graphics/';
    hs.align = 'center';
    hs.transitions = ['expand', 'crossfade'];
    hs.outlineType = 'rounded-white';
    hs.fadeInOut = true;
    hs.numberPosition = 'caption';
    hs.dimmingOpacity = 0.75;

    // Add the controlbar
    if (hs.addSlideshow) hs.addSlideshow({
        //slideshowGroup: 'group1',
        interval: 5000,
        repeat: false,
        useControls: true,
        fixedControls: 'fit',
        overlayOptions: {
            opacity: .75,
            position: 'bottom center',
            hideOnMouseOut: true
        }
    });
</script>




<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){

        alert(msg);
    }
</script>

<script>    
    $( document ).ready(function() {
        var $filter = $('.scroll');
        var $filterSpacer = $('<div />', {
            "class": "abc",
            "height": 0
        });
        $(window).scroll(function (){
            var headerHeght = $('.header').height();

            if (!$filter.hasClass('fix2') && $(window).scrollTop() > $filter.offset().top){	
                
        
               $filter.css({"width": "270px", "position": "fixed", "top":headerHeght+"px", "z-index":"1" });
               
               $filter.addClass('fix2');

               
               $filter.before($filterSpacer);
	          
                
            }    
            else if ($filter.hasClass('fix2')  && $(window).scrollTop() < $filterSpacer.offset().top){
                
                $filter.css({"width": "270px", "position": "static"});
                
                $filter.removeClass('fix2')
                
            }  
            else if ($filter.hasClass('fix2')  && $(window).scrollTop()>$("#reviews").offset().top){
                
                var top = -($(window).scrollTop()-$("#reviews").offset().top);
                
                $filter.css({"width": "270px", "position": "fixed", "top": top, "z-index":"1" });
                
                $filter.addClass('fix3');
                
            }
            
            if($filter.hasClass('fix3')  && $("#reviews").offset().top >$(window).scrollTop() ){
                
                $filter.removeClass('fix3');
                
                $filter.css({"width": "270px", "position": "fixed", "top":headerHeght+"px", "z-index":"9" });
            }
            
        });  
        
        // hover star
        
        $(".grey").hover(
            function () {
                let vt = $(this).index();
                let id = $(this).parents().attr('id');
                
                for(i=0;i<=vt;i++){
                    $('#'+id+' .grey').eq(i).addClass('hovered');
                }
            }, 

            function () {
                let id = $(this).parents().attr('id');
                $('#'+id+' .grey').removeClass('hovered');
            }
        );
        
        // click star
        
        $( ".grey" ).click(function(){   
            let vt = $(this).index();
            let id = $(this).parents().attr('id');
            
            $('#'+id+' .grey').removeClass('selected');
            
            for(i=0;i<=vt;i++){
                $('#'+id+' .grey').eq(i).addClass('selected');
            }
            $('input[name="'+id+'"]').val(vt+1);
        });
        
        //click button like

        var likecmts = [];

        var local    =[];
        

        if(localStorage.getItem('likecmt')!=null){

            likecmts.push(localStorage.getItem('likecmt'))   
        }

        //loai bo phan tu trung nhau trong mang

        function deduplicate(arr) {

            let set = new Set(arr);

            return Array.from(set);
        }
        
        $( ".btn-like " ).click(function(event){
            event.preventDefault();

            var idlike = $(this).attr('data-id');

            if ( typeof(Storage) !== "undefined") {

                likecmts.push(idlike);

                localStorage.setItem('likecmt', likecmts);

          

                local = localStorage.getItem('likecmt').split(",");


                dubble_numbers = local.filter(function(item){
                    return (item ==idlike);
                });
                

                if(dubble_numbers.length>1){
 
                    $(this).notify('You liked It!','warn');

                }
                else{
                    
                    $('[data-id='+idlike+'] i').removeClass("fa-thumbs-o-up");
                     
                    $('[data-id='+idlike+'] i').addClass("fa-thumbs-o-down");
               
                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'post',
                        url: window.location.origin+"/commentpost",
                        data: {
                            'id':idlike, 
                        },

                        success:function(data){
                            $('[data-value='+idlike+']').text(data);
                        }
                    });
                }     
            } 
            else {

                $.notify('You should update browser to use this function!','error');
            }     
        });   
        
        
        $( ".st-faq  .arrow").click(function(){
            
            $(".st-faq .item").removeClass('active');
            
            $(this).parents().parents().addClass('active');
        });

        // validate form

        $("#commentform").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 255,
                },
                email: {
                        required: true,
                        email: true,
                    },
                title: {
                    required: true,
                    maxlength: 255,
                },
                content: "required"
            },
            messages: {
                name: {
                    required: "Name is required",
                    maxlength: "maximum character are 255",
                },
                email: {
                    required: "Email is required",
                    email: "Email is false",
                },

                title: {
                    required: "Title is required",
                   maxlength: "maximum character are 255",
                },
                content: "Comment is required",
            }
        });


        //kiểm tra like tour
        if(localStorage.getItem('liked')!=null){

            $(".like-it i").removeClass('fa-heart-o');

            $(".like-it i").addClass('fa-heart');

        }   

        var mylike  =    JSON.parse(localStorage.getItem('likecmts'));

            // console.log(localStorage.getItem('heart'));

        arrayliked = [];

        

        jQuery.each( mylike, function( i, val ) {
                            
            arrayliked.push(val[0].likecmt);

        });

         //xóa phần tử mảng giống nhau trong arrayliked
        var likeds =  arrayliked.filter((v, i, a) => a.indexOf(v) === i);        

        // console.log(likeds.indexOf(1));

        const itemliked = deduplicate(localStorage.getItem("likecmt").split(","));

        for (let i = 0; i < itemliked.length; i++) {
           $('[data-id='+itemliked[i]+'] i').removeClass('fa-thumbs-o-up');
           $('[data-id='+itemliked[i]+'] i').addClass('fa-thumbs-o-down');
        }

        // select date

        // $("#check-in-render").datepicker({
        //     showOn: "button",

        //     buttonImage: "/images/favicon.ico",

        //     buttonImageOnly: true,

        //     buttonText: "Select date"

        // });    

        $(function() {

            $( "#datepicker" ).datepicker({

                onSelect: function(dateText, inst) {
                    $('.check-in-render').text(dateText);
                }

            });

            $( "#datepicker" ).datepicker( "option", "dateFormat", "dd/mm/yy");



            $("#check-in-render").click(function(){


                $("#datepicker").datepicker("show"); 

                if($('.scroll').hasClass('fix2')){

                    $('#ui-datepicker-div').addClass('top');

                }
                else{
                    $('#ui-datepicker-div').removeClass('top');
                }


                // console.log($(window).scrollTop());

            });

        });


    });
    
    $( ".add" ).click(function() {
        
        let max    = 50;
        
        let cl     = $(this).attr('data-value');
        
        let so     = $('.'+cl).text();
        
        let result = parseInt($('.'+cl).text())+1;
        
        if(result > max){
            
            result  = max;
            
        }
        
        $('.'+cl).text(result);
        
    });
    
    $( ".minus" ).click(function() {
        
        let min    = 0;
        
        let cl     = $(this).attr('data-value');
        
        let so     = $('.'+cl).text();
        
        let result = parseInt($('.'+cl).text())-1;
        
        if(result < min){
            
            result  = min;
            
        }
        
        $('.'+cl).text(result);
      
    });


    $(".like-it").click(function() {

        event.preventDefault();

        if ( typeof(Storage) !== "undefined") {

            if(localStorage.getItem('liked')==null){

                var data = localStorage.setItem('liked', 'You liked It');

                $(".like-it i").removeClass('fa-heart-o');

                $(".like-it i").addClass('fa-heart');

                $.notify(localStorage.getItem('Thank you for loving this trip'), "success");

            }
            else{
                // alert(localStorage.getItem('liked'));
                $.notify(localStorage.getItem('liked'), "warn");
            }    
        }
        else{
            $.notify('You should update browser to use this function!','error');      
        }    

    }); 
</script>
@stop