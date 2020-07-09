@extends('Frontend.layout')

@section('content')


<!-- style block -->
<style>
    .st-offer-new .img-cover {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    z-index: -1;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    background-size: cover !important;
    background-position: center;
}
.st_1589776436 {
    background: url(https://mixmap.travelerwp.com/wp-content/uploads/2019/02/image_banner_1.jpg);
}

.st_1589776437 {
    background: url(https://mixmap.travelerwp.com/wp-content/uploads/2019/02/image_banner_2.jpg);
}
.st_1589776438 {
    background: url(https://mixmap.travelerwp.com/wp-content/uploads/2019/02/image_banner_3.jpg);
}
</style>

<div id="st-content-wrapper" class="search-result-page">
    <div class="container">
        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax-image="https://www.youtube.com/watch?v=ddaEtFOsFeM" data-vc-video-bg="https://www.youtube.com/watch?v=ddaEtFOsFeM" class="vc_row wpb_row st bg-holder vc_custom_1565799507833 vc_row-has-fill vc_video-bg-container">
            <div class='container '>
                <div class='row'>
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="search-form-wrapper auto-height-form-search normal  st-search-form-st_tours">
                                <h1 class="st-heading text-center">Love where you&#039;re going</h1>
                                <div class="sub-heading text-center">Book incredible things to do around the world.</div>
                                <div class="row">
                                    <div class="col-lg-9 tour-search-form-home">
                                        <div class="search-form" id="sticky-nav">
                                            <form action="https://tomap.travelerwp.com/search-on-sidebar/" class="form" method="get">
                                                <div class="row">
                                                    <div class="col-md-4 border-right">
                                                        <div class="form-group form-extra-field dropdown clearfix field-detination has-icon">
                                                            <i class="input-icon field-icon fa">
                                                                <svg width="24px" height="24px" viewBox="0 0 17 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                    <desc>Created with Sketch.</desc>
                                                                    <defs></defs>
                                                                    <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                        <g id="Search_Result_1_Grid" transform="translate(-165.000000, -328.000000)" stroke="#A0A9B2">
                                                                            <g id="form_search_hotel_row" transform="translate(135.000000, 290.000000)">
                                                                                <g id="input" transform="translate(30.000000, 0.000000)">
                                                                                    <g id="where" transform="translate(0.000000, 26.000000)">
                                                                                        <g id="Group" transform="translate(0.000000, 12.000000)">
                                                                                            <g id="ico_maps_search_box">
                                                                                                <path d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z" id="Shape"></path>
                                                                                                <circle id="Oval" cx="8.25" cy="8.25" r="3"></circle>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </i>
                                                            <div class="dropdown" data-toggle="dropdown" id="dropdown-destination">
                                                                <label>Destination</label>
                                                                <div class="render">
                                                                    <span class="destination">
                                                                    Where are you going?            </span>
                                                                </div>
                                                                <input type="hidden" name="location_name" value="" />
                                                                <input type="hidden" name="location_id" value="" />
                                                            </div>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdown-destination">
                                                                <li style="padding-left: 20px;" data-country="US" data-value="1957" class="item parent_li">
                                                                    <span class="parent">United States</span> 
                                                                </li>
                                                                <li style="padding-left: 20px;" data-country="US" data-value="7965" class="item ">
                                                                    <i class="input-icon field-icon fa">
                                                                        <svg width="16px" height="16px" viewBox="0 0 17 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                            <desc>Created with Sketch.</desc>
                                                                            <defs></defs>
                                                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                                <g id="Search_Result_1_Grid" transform="translate(-165.000000, -328.000000)" stroke="gray">
                                                                                    <g id="form_search_hotel_row" transform="translate(135.000000, 290.000000)">
                                                                                        <g id="input" transform="translate(30.000000, 0.000000)">
                                                                                            <g id="where" transform="translate(0.000000, 26.000000)">
                                                                                                <g id="Group" transform="translate(0.000000, 12.000000)">
                                                                                                    <g id="ico_maps_search_box">
                                                                                                        <path d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z" id="Shape"></path>
                                                                                                        <circle id="Oval" cx="8.25" cy="8.25" r="3"></circle>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </i>
                                                                    <span class="lv2">California</span> 
                                                                </li>
                                                                <li style="padding-left: 20px;" data-country="US" data-value="7967" class="item ">
                                                                    <i class="input-icon field-icon fa">
                                                                        <svg width="16px" height="16px" viewBox="0 0 17 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                            <desc>Created with Sketch.</desc>
                                                                            <defs></defs>
                                                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                                <g id="Search_Result_1_Grid" transform="translate(-165.000000, -328.000000)" stroke="gray">
                                                                                    <g id="form_search_hotel_row" transform="translate(135.000000, 290.000000)">
                                                                                        <g id="input" transform="translate(30.000000, 0.000000)">
                                                                                            <g id="where" transform="translate(0.000000, 26.000000)">
                                                                                                <g id="Group" transform="translate(0.000000, 12.000000)">
                                                                                                    <g id="ico_maps_search_box">
                                                                                                        <path d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z" id="Shape"></path>
                                                                                                        <circle id="Oval" cx="8.25" cy="8.25" r="3"></circle>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </i>
                                                                    <span class="lv2">Los Angeles</span> 
                                                                </li>
                                                                <li style="padding-left: 20px;" data-country="US" data-value="1944" class="item ">
                                                                    <i class="input-icon field-icon fa">
                                                                        <svg width="16px" height="16px" viewBox="0 0 17 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                            <desc>Created with Sketch.</desc>
                                                                            <defs></defs>
                                                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                                <g id="Search_Result_1_Grid" transform="translate(-165.000000, -328.000000)" stroke="gray">
                                                                                    <g id="form_search_hotel_row" transform="translate(135.000000, 290.000000)">
                                                                                        <g id="input" transform="translate(30.000000, 0.000000)">
                                                                                            <g id="where" transform="translate(0.000000, 26.000000)">
                                                                                                <g id="Group" transform="translate(0.000000, 12.000000)">
                                                                                                    <g id="ico_maps_search_box">
                                                                                                        <path d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z" id="Shape"></path>
                                                                                                        <circle id="Oval" cx="8.25" cy="8.25" r="3"></circle>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </i>
                                                                    <span class="lv2">New Jersey</span> 
                                                                </li>
                                                                <li style="padding-left: 40px;" data-country="US" data-value="1946" class="item ">
                                                                    <span class="child">Delaware</span> 
                                                                </li>
                                                                <li style="padding-left: 60px;" data-country="US" data-value="1945" class="item ">
                                                                    <span class="child">Nevada</span> 
                                                                </li>
                                                                <li style="padding-left: 20px;" data-country="US" data-value="275" class="item ">
                                                                    <i class="input-icon field-icon fa">
                                                                        <svg width="16px" height="16px" viewBox="0 0 17 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                            <desc>Created with Sketch.</desc>
                                                                            <defs></defs>
                                                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                                <g id="Search_Result_1_Grid" transform="translate(-165.000000, -328.000000)" stroke="gray">
                                                                                    <g id="form_search_hotel_row" transform="translate(135.000000, 290.000000)">
                                                                                        <g id="input" transform="translate(30.000000, 0.000000)">
                                                                                            <g id="where" transform="translate(0.000000, 26.000000)">
                                                                                                <g id="Group" transform="translate(0.000000, 12.000000)">
                                                                                                    <g id="ico_maps_search_box">
                                                                                                        <path d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z" id="Shape"></path>
                                                                                                        <circle id="Oval" cx="8.25" cy="8.25" r="3"></circle>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </i>
                                                                    <span class="lv2">New York</span> 
                                                                </li>
                                                                <li style="padding-left: 20px;" data-country="US" data-value="7970" class="item ">
                                                                    <i class="input-icon field-icon fa">
                                                                        <svg width="16px" height="16px" viewBox="0 0 17 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                            <desc>Created with Sketch.</desc>
                                                                            <defs></defs>
                                                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                                <g id="Search_Result_1_Grid" transform="translate(-165.000000, -328.000000)" stroke="gray">
                                                                                    <g id="form_search_hotel_row" transform="translate(135.000000, 290.000000)">
                                                                                        <g id="input" transform="translate(30.000000, 0.000000)">
                                                                                            <g id="where" transform="translate(0.000000, 26.000000)">
                                                                                                <g id="Group" transform="translate(0.000000, 12.000000)">
                                                                                                    <g id="ico_maps_search_box">
                                                                                                        <path d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z" id="Shape"></path>
                                                                                                        <circle id="Oval" cx="8.25" cy="8.25" r="3"></circle>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </i>
                                                                    <span class="lv2">San Francisco</span> 
                                                                </li>
                                                                <li style="padding-left: 20px;" data-country="US" data-value="1952" class="item ">
                                                                    <i class="input-icon field-icon fa">
                                                                        <svg width="16px" height="16px" viewBox="0 0 17 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                            <desc>Created with Sketch.</desc>
                                                                            <defs></defs>
                                                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                                <g id="Search_Result_1_Grid" transform="translate(-165.000000, -328.000000)" stroke="gray">
                                                                                    <g id="form_search_hotel_row" transform="translate(135.000000, 290.000000)">
                                                                                        <g id="input" transform="translate(30.000000, 0.000000)">
                                                                                            <g id="where" transform="translate(0.000000, 26.000000)">
                                                                                                <g id="Group" transform="translate(0.000000, 12.000000)">
                                                                                                    <g id="ico_maps_search_box">
                                                                                                        <path d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z" id="Shape"></path>
                                                                                                        <circle id="Oval" cx="8.25" cy="8.25" r="3"></circle>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                    </i>
                                                                    <span class="lv2">Virginia</span> 
                                                                </li>
                                                                <li style="padding-left: 40px;" data-country="US" data-value="282" class="item ">
                                                                    <span class="child">Virginia Beach</span> 
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 border-right">
                                                        <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                                            <i class="input-icon field-icon fa">
                                                                <svg height="24px" width="24px" viewBox="0 0 24 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                    <desc>Created with Sketch.</desc>
                                                                    <defs></defs>
                                                                    <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                                        <g id="Search_Result_1_Grid" transform="translate(-436.000000, -328.000000)" stroke="#A0A9B2">
                                                                            <g id="form_search_hotel_row" transform="translate(135.000000, 290.000000)">
                                                                                <g id="input" transform="translate(30.000000, 0.000000)">
                                                                                    <g id="check-in" transform="translate(270.000000, 26.000000)">
                                                                                        <g id="ico_calendar_search_box" transform="translate(1.000000, 12.000000)">
                                                                                            <g id="calendar-add-1">
                                                                                                <path d="M9.5,18.5 L1.5,18.5 C0.94771525,18.5 0.5,18.0522847 0.5,17.5 L0.5,3.5 C0.5,2.94771525 0.94771525,2.5 1.5,2.5 L19.5,2.5 C20.0522847,2.5 20.5,2.94771525 20.5,3.5 L20.5,10" id="Shape"></path>
                                                                                                <path d="M5.5,0.501 L5.5,5.501" id="Shape"></path>
                                                                                                <path d="M15.5,0.501 L15.5,5.501" id="Shape"></path>
                                                                                                <path d="M0.5,7.501 L20.5,7.501" id="Shape"></path>
                                                                                                <circle id="Oval" cx="17.5" cy="17.501" r="6"></circle>
                                                                                                <path d="M17.5,14.501 L17.5,20.501" id="Shape"></path>
                                                                                                <path d="M20.5,17.501 L14.5,17.501" id="Shape"></path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </i>
                                                            <div class="date-wrapper clearfix">
                                                                <div class="check-in-wrapper">
                                                                    <label>From - To</label>
                                                                    <div class="render check-in-render">dd/mm/yyyy</div>
                                                                    <span> - </span>
                                                                    <div class="render check-out-render">dd/mm/yyyy</div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="check-in-input" value="" name="start">
                                                            <input type="hidden" class="check-out-input" value="" name="end">
                                                            <input type="text" class="check-in-out" value="28/03/2020 03:09 am-29/03/2020 03:09 am" name="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-button">
                                                            <div class="advance">
                                                                <div class="form-group form-extra-field dropdown clearfix field-advance">
                                                                    <div class="dropdown" data-toggle="dropdown" id="dropdown-advance">
                                                                        <label class="hidden-xs">Advance</label>
                                                                        <div class="render">
                                                                            <span class="hidden-xs">More <i class="fa fa-caret-down"></i></span>
                                                                            <span class="hidden-lg hidden-md hidden-sm">More option <i
                                                                                class="fa fa-caret-down"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdown-advance">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="advance-item range-slider">
                                                                                    <div class="item-title">
                                                                                        <h4>Filter Price</h4>
                                                                                    </div>
                                                                                    <div class="item-content">
                                                                                        <input type="text" class="price_range" name="price_range" value="89;1650" data-symbol="€" data-min="89" data-max="1650" data-step="0" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="advance-item facilities st-icheck">
                                                                                    <div class="item-title">
                                                                                        <h4>
                                                                                            Tour Categories                                
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class="item-content">
                                                                                        <div class="row">
                                                                                            <div class="ovscroll" tabindex="1">
                                                                                                <div class="col-lg-4 col-sm-6">
                                                                                                    <div class="st-icheck-item">
                                                                                                        <label>City trips
                                                                                                        <input type="checkbox" name="" value="112"><span class="checkmark fcheckbox"></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4 col-sm-6">
                                                                                                    <div class="st-icheck-item">
                                                                                                        <label>Ecotourism
                                                                                                        <input type="checkbox" name="" value="113"><span class="checkmark fcheckbox"></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4 col-sm-6">
                                                                                                    <div class="st-icheck-item">
                                                                                                        <label>Escorted Tour
                                                                                                        <input type="checkbox" name="" value="114"><span class="checkmark fcheckbox"></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4 col-sm-6">
                                                                                                    <div class="st-icheck-item">
                                                                                                        <label>Group Tour
                                                                                                        <input type="checkbox" name="" value="115"><span class="checkmark fcheckbox"></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4 col-sm-6">
                                                                                                    <div class="st-icheck-item">
                                                                                                        <label>Hosted tours
                                                                                                        <input type="checkbox" name="" value="117"><span class="checkmark fcheckbox"></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4 col-sm-6">
                                                                                                    <div class="st-icheck-item">
                                                                                                        <label>Ligula
                                                                                                        <input type="checkbox" name="" value="116"><span class="checkmark fcheckbox"></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" class="data_taxonomy" name="taxonomy[st_tour_type]" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-search" type="submit">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row st bg-holder vc_custom_1542955832597">
            <div class='container '>
                <div class='row'>
                    <div class="wpb_column column_container col-md-4">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="st-featured-item image-left">
                                <div class="image">
                                    <img src="https://tomap.travelerwp.com/wp-content/uploads/2019/01/ico_localguide.svg" class="img-responsive"> 
                                </div>
                                <div class="content">
                                    <h4 class="title">1,000+ local guides</h4>
                                    <div class="desc">Morbi semper fames lobortis ac hac penatibus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-4">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="st-featured-item image-left">
                                <div class="image">
                                    <img src="https://tomap.travelerwp.com/wp-content/uploads/2019/01/ico_maps.svg" class="img-responsive"> 
                                </div>
                                <div class="content">
                                    <h4 class="title">Handcrafted experiences</h4>
                                    <div class="desc">Morbi semper fames lobortis ac hac penatibus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-4">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="st-featured-item image-left">
                                <div class="image">
                                    <img src="https://tomap.travelerwp.com/wp-content/uploads/2019/01/ico_adventurous.svg" class="img-responsive"> 
                                </div>
                                <div class="content">
                                    <h4 class="title">96% happy travelers</h4>
                                    <div class="desc">Morbi semper fames lobortis ac hac penatibus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>

    
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row st bg-holder vc_custom_1542167625295 vc_row-has-fill">
            <div class='container '>
                <div class='row'>
                    <div class="wpb_column column_container col-md-12 vc_custom_1542167696382">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element  fs-28 fs-normal">
                                <div class="wpb_wrapper">
                                    <h2>Trending Tours</h2>
                                </div>
                            </div>
                            <div class="search-result-page st-tours service-slider-wrapper">
                                <div class="st-hotel-result">
                                    <div class="owl-carousel st-service-slider ">

                                        <?php   

                                            $i = 0;


                                        ?>

                                        @foreach($tour as $tours) 

                                        <?php    

                                            $image    =  App\Models\imageTour::where('imageTour_id', $tours->id)->first();
                                            $i++; 


                                            $datetime = new \Carbon\Carbon($tours->departureDay.' '.$tours->departureTime);

                                            $days     = $datetime->diffInDays($now);

                                            $hours    = $now->diffInHours($datetime)%24;

                                            $minutes  = ($now->diffInMinutes($datetime)%1440)%60;

                                            $seconds  = (($now->diffInSeconds($datetime)%86400)%1440)%60;


                                        ?> 
                                        <div class="item-service grid-item has-matchHeight">
                                            <div class="service-border">
                                                <div class="thumb">
                                                    <?php   
                                                        if($tours->price !=0){
                                                            $sale  = (($tours->price -$tours->discountPrice)/$tours->price)*100;
                                                        }
                                                        else{
                                                            $sale  = 0;
                                                        }      
                                                    ?>
                                                    @if($sale !=0)
                                                    <span class="st_sale_class box_sale sale_small">{{ $sale }}% </span>
                                                    @endif
                                                    <a href="{{route('tourDetails', ['id' => $tours->url_rewrite]) }}" class="login" data-toggle="modal" data-target="#st-login-form">
                                                        <div class="service-add-wishlist" title="Add to wishlist">
                                                            <i class="fa fa-heart"></i>
                                                            <div class="lds-dual-ring"></div>
                                                        </div>
                                                    </a>
                                                    <div class="service-tag bestseller">
                                                        <span class="dem"> <span id="d{{ $i }}">{{ $days }}</span> days left <span id="h{{ $i }}">{{ $hours }}</span>:<span id="m{{ $i }}">{{ $minutes }}</span>:<span id="s{{ $i }}">{{ $seconds }}</span></span>
                                                        <!-- <div class="feature_class st_featured featured">Featured</div> -->
                                                    </div>
                                                    <a href="{{route('tourDetails', ['id' => $tours->url_rewrite]) }}">
                                                    <img width="680" height="500" src="{{ $image->image }}" class="img-responsive wp-post-image" alt="WordPress Booking Theme" /> </a>
                                                </div>
                                                
                                                <h4 class="service-title plr15"><a href="{{route('tourDetails', ['id' => $tours->url_rewrite]) }}">{{ $tours->Name }}</a></h4>
                                                <div class="service-review plr15">
                                                    <ul class="icon-group text-color booking-item-rating-stars">
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star-half-o"></i></li>
                                                        <li><i class="fa  fa-star-o"></i></li>
                                                        <li><i class="fa  fa-star-o"></i></li>
                                                    </ul>
                                                    <span class="review">
                                                    3 Reviews            </span>
                                                </div>
                                                <div class="section-footer">
                                                    <div class="footer-inner plr15">
                                                        <div class="service-duration">
                                                            <i class="input-icon field-icon fa">
                                                                <svg height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                    <g fill="#5E6D77">
                                                                        <path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25
                                                                            C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75
                                                                            S17.376,2.25,12,2.25z"/>
                                                                        <path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25
                                                                            c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121
                                                                            c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25
                                                                            c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"/>
                                                                    </g>
                                                                </svg>
                                                            </i>
                                                            8 hours 
                                                        </div>
                                                        <div class="service-price">
                                                            <span>
                                                                <i class="input-icon field-icon fa">
                                                                    <svg width="10px" height="16px" viewBox="0 0 11 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                        <desc>Created with Sketch.</desc>
                                                                        <defs></defs>
                                                                        <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <g id="Room_Only_Detail_1" transform="translate(-135.000000, -4858.000000)" fill="#ffab53" fill-rule="nonzero">
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
                                                                <span class="fr_text">from</span>
                                                            </span>
                                                            <span class="price">
                                                            <span class="text-small lh1em item onsale ">{{ $tours->price }}$</span><span class="text-lg lh1em item ">{{ $tours->discountPrice }}$</span> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
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
        <div class="vc_row-full-width vc_clearfix"></div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row st bg-holder">
            <div class='container '>
                <div class='row'>
                    <div class="wpb_column column_container col-md-12 vc_custom_1543548162184">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element  fs-28 fs-normal">
                                <div class="wpb_wrapper">
                                    <h2>Top Destinations</h2>
                                </div>
                            </div>


                            <div class="row list-destination masonry">

                                @if(count($destination)>0)    
                                    @foreach($destination as $key=>$destinations)
                                    <?php  
                                        if ($key == 0) {
                                            $class = "first-item";
                                        }
                                        elseif ($key == 1){
                                            $class = "second-item";

                                        }
                                        else{
                                            $class ="normal-item";
                                        }
                                    ?>
                                    <div class="col-xs-12 col-sm-{{ $key==0?12:6 }} col-md-{{ $key==0?8:4 }} has-matchHeight {{ $class }}">
                                        <div class="destination-item">
                                            <div class="image">
                                                <a class="st-link" href="/dia-diem/{{ $destinations->url_rewrite }}">
                                                <img src="{{ $destinations->image }}">
                                                </a>
                                                <div class="content">
                                                    <h4 class="title">
                                                        <a href="/dia-diem/{{ $destinations->url_rewrite }}">
                                                            {{ $destinations->name }}                                 
                                                        </a>
                                                    </h4>
                                                    <div class="desc st_tours"><a href="https://tomap.travelerwp.com/search-on-sidebar/?location_name=New%20York&#038;location_id=275">{{ $destinations->customer }} customers</a></div>
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
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row st bg-holder">
            <div class='container '>
                <div class='row'>
                    <div class="wpb_column column_container col-md-12 vc_custom_1542167696382">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element  fs-28 fs-normal">
                                <div class="wpb_wrapper">
                                    <h2>Local Experiences You&#8217;ll Love</h2>
                                </div>
                            </div>
                            <div class="search-result-page st-tours service-slider-wrapper">
                                <div class="st-hotel-result">
                                    <div class="owl-carousel st-service-slider ">
                                        @foreach($tourLocal as $tours)    
                                        <?php    $image    =  App\Models\imageTour::where('imageTour_id', $tours->id)->first(); ?> 
                                        <div class="item-service grid-item has-matchHeight">
                                            <div class="service-border">
                                                <div class="thumb">
                                                   
                                                    <a href="{{ route('tourDetails',['id' => $tours->url_rewrite]) }}    /tour-detail/{{ $tours->url_rewrite }}" class="login" data-toggle="modal" data-target="#st-login-form">
                                                        <div class="service-add-wishlist" title="Add to wishlist">
                                                            <i class="fa fa-heart"></i>
                                                            <div class="lds-dual-ring"></div>
                                                        </div>
                                                    </a>
                                                    
                                                    <a href="{{ route('tourDetails',['id' => $tours->url_rewrite]) }}">
                                                    <img width="680" height="500" src="{{ $image->image }}" class="img-responsive wp-post-image" alt="WordPress Booking Theme" /> </a>
                                                </div>
                                                
                                                <h4 class="service-title plr15"><a href="{{ route('tourDetails',['id' => $tours->url_rewrite]) }}">{{ $tours->Name }}</a></h4>
                                                <div class="service-review plr15">
                                                    <ul class="icon-group text-color booking-item-rating-stars">
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star-half-o"></i></li>
                                                        <li><i class="fa  fa-star-o"></i></li>
                                                        <li><i class="fa  fa-star-o"></i></li>
                                                    </ul>
                                                    <span class="review">
                                                        3 Reviews            
                                                    </span>
                                                </div>
                                                <div class="section-footer">
                                                    <div class="footer-inner plr15">
                                                        <div class="service-duration">
                                                            <i class="input-icon field-icon fa">
                                                                <svg height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                    <g fill="#5E6D77">
                                                                        <path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25
                                                                            C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75
                                                                            S17.376,2.25,12,2.25z"/>
                                                                        <path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25
                                                                            c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121
                                                                            c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25
                                                                            c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"/>
                                                                    </g>
                                                                </svg>
                                                            </i>
                                                            8 hours 
                                                        </div>
                                                        <div class="service-price">
                                                            <span>
                                                                <i class="input-icon field-icon fa">
                                                                    <svg width="10px" height="16px" viewBox="0 0 11 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                        <desc>Created with Sketch.</desc>
                                                                        <defs></defs>
                                                                        <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <g id="Room_Only_Detail_1" transform="translate(-135.000000, -4858.000000)" fill="#ffab53" fill-rule="nonzero">
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
                                                                <span class="fr_text">from</span>
                                                            </span>
                                                            <span class="price">
                                                            <span class="text-small lh1em item onsale ">100.00$</span><span class="text-lg lh1em item "> {{ $tours->price }}$</span> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                        
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
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row st bg-holder">
            <div class='container '>
                <div class='row'>
                    <div class="wpb_column column_container col-md-12 vc_custom_1547112475891">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                            <div class="vc_row wpb_row vc_inner vc_custom_1547204285551 vc_row-has-fill">
                                <div class="wpb_column column_container col-md-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  st-become-local">
                                                <div class="wpb_wrapper">
                                                    <h2><span class="f48">Know your city?</span></h2>
                                                    <p><span class="f18 lh18">Join 2000+ locals &amp; 1200+ contributors from 3000 cities</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-md-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_btn3-container  st-become-local-btn vc_btn3-right">
                                                <button class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-white">Become Local Expert</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>

        <div class="vc_row wpb_row st bg-holder vc_custom_1542955832597">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-6">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                            <div class="st-offer-new item has-matchHeight" style="height: 429px;">
                                <div class="featured-text btn btn-primary">HOLIDAY SALE</div>
                                <h2 class="item-title">Special Offers</h2>
                                <p class="item-sub-title">Find Your Perfect Hotels Get the best prices on 20,000+ properties the best prices on</p>
                                <a href="#" class="btn btn-default">See Deals</a>    
                                <div class="img-cover st_1589776436"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-3">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                            <div class="st-offer-new item has-matchHeight" style="height: 429px;">
                                <div class="featured-icon"><img src="https://mixmap.travelerwp.com/wp-content/uploads/2019/02/ico_email.svg"></div>
                                <h2 class="item-title">Newsletters</h2>
                                <p class="item-sub-title">Join for free and get our tailored newsletters full of hot travel deals.</p>
                                <a href="#" class="btn btn-default">Sign Up</a>    
                                <div class="img-cover st_1589776437"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-3">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                            <div class="st-offer-new item has-matchHeight" style="height: 429px;">
                                <div class="featured-icon"><img src="https://mixmap.travelerwp.com/wp-content/uploads/2019/02/ico_tips.svg"></div>
                                <h2 class="item-title">Travel Tips</h2>
                                <p class="item-sub-title">Tips from our travel experts to make your next trip even better.</p>
                                <a href="#" class="btn btn-default">Get Inspired</a>    
                                <div class="img-cover st_1589776438"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>

        <div class="vc_row wpb_row st bg-holder">
            <div class='container '>
                <div class='row'>
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="st-testimonial-new">
                                <h3>Our happy clients</h3>
                                <div class="owl-carousel st-testimonial-slider style-1 ">
                                    <div class="item has-matchHeight">
                                        <div class="author">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_8-1-70x70.jpg" alt="User Avatar" />
                                            <div class="author-meta">
                                                <h4>Eva Hicks</h4>
                                                <div class="star">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. 
                                        </p>
                                    </div>
                                    <div class="item has-matchHeight">
                                        <div class="author">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_7-70x70.jpg" alt="User Avatar" />
                                            <div class="author-meta">
                                                <h4>Donald Wolf</h4>
                                                <div class="star">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum. 
                                        </p>
                                    </div>
                                    <div class="item has-matchHeight">
                                        <div class="author">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_3-70x70.jpg" alt="User Avatar" />
                                            <div class="author-meta">
                                                <h4>Charlie Harrington</h4>
                                                <div class="star">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. 
                                        </p>
                                    </div>
                                    <div class="item has-matchHeight">
                                        <div class="author">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_4-70x70.jpg" alt="User Avatar" />
                                            <div class="author-meta">
                                                <h4>Kody Byrd</h4>
                                                <div class="star">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum. 
                                        </p>
                                    </div>
                                    <div class="item has-matchHeight">
                                        <div class="author">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_5-70x70.jpg" alt="User Avatar" />
                                            <div class="author-meta">
                                                <h4>Lee Cunningham</h4>
                                                <div class="star">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui 
                                        </p>
                                    </div>
                                    <div class="item has-matchHeight">
                                        <div class="author">
                                            <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/people_4-70x70.jpg" alt="User Avatar" />
                                            <div class="author-meta">
                                                <h4>Melody Marshall</h4>
                                                <div class="star">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum. 
                                        </p>
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
 <span id="times" class="hide">4</span>
 <script>
     console.log($('.irs-from').text());
 </script>
@stop

       