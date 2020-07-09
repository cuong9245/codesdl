@extends('Frontend.layout')

@section('content')
<style type="text/css">
    
    .search-result-page .banner {
        background-color: #fff;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 81px 0;
        position: relative;
    }
    .banner{
        background-image: url(https://tomap.travelerwp.com/wp-content/uploads/2019/01/Hero_image_heading_4.jpg) !important;
    }
    .wait{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid blue;
        border-right: 16px solid green;
        border-bottom: 16px solid red;
        border-left: 16px solid pink;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

</style>


<div id="st-content-wrapper" class="search-result-page st-tours">
    <div id="tour-top-search"></div>
    <div class="banner st_1593765829 ">
        <div class="container">
            <h1>
                Search on Top                    
            </h1>
            <form action="https://tomap.travelerwp.com/search-on-top/" name="get" class="hidden-lg hidden-md">
                <div class="search-form-mobile">
                    <div class="form-group">
                        <div class="dropdown">
                            <div class="icon-field">
                                <i class="input-icon field-icon fa">
                                    <svg width="20px" height="20px" viewBox="0 0 17 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                            </div>
                            <input type="hidden" name="location_id" class="form-control" value="">
                            <input type="text" name="location_name" class="form-control" readonly="" placeholder="Where are you going?" id="dropdown-mobile-destination" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="">
                            <ul class="dropdown-menu" aria-labelledby="dropdown-mobile-destination">
                                <li style="padding-left: 20px;" data-country="" data-value="10481" class="item parent_li">
                                    <span class="parent">France</span>                
                                </li>
                                <li style="padding-left: 20px;" data-country="" data-value="10483" class="item ">
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
                                    <span class="lv2">Paris</span>                
                                </li>
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
                        <button type="submit" class="btn btn-primary">
                            <i class="input-icon field-icon fa">
                                <svg width="25px" height="25px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="ico_search_header" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Group" stroke="#ffffff" stroke-width="1.5">
                                            <g id="search-remove">
                                                <path d="M18.875,9.812 C18.8754045,13.4778233 16.6674237,16.7828921 13.2807219,18.1859288 C9.89402017,19.5889655 5.99561982,18.8136372 3.4034913,16.2215087 C0.81136277,13.6293802 0.0360345119,9.73097983 1.4390712,6.34427809 C2.84210788,2.95757635 6.1471767,0.74959554 9.813,0.75 C12.2163918,0.75 14.521347,1.70474369 16.2208017,3.40419835 C17.9202563,5.10365301 18.875,7.40860817 18.875,9.812 Z" id="Shape"></path>
                                                <path d="M16.221,16.22 L23.25,23.25" id="Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="st-hotel-result tour-top-search">
            <div class="toolbar">
                <ul class="toolbar-action-mobile hidden-lg hidden-md">
                    <li><a href="#" class="btn btn-primary btn-date">Date</a></li>
                    <li><a href="#" class="btn btn-primary btn-sort">Sort</a></li>
                    <li><a href="#" class="btn btn-primary btn-filter">Filter</a></li>
                </ul>
                <div class="dropdown-menu sort-menu sort-menu-mobile">
                    <div class="sort-title">
                        <h3>
                            SORT BY 
                            <span class="hidden-lg hidden-md close-filter">
                                <i class="input-icon field-icon fa">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                            </span>
                        </h3>
                    </div>
                    <div class="sort-item st-icheck">
                        <div class="st-icheck-item"><label> New tour<input class="service_order" type="radio" name="service_order_m_" data-value="new" checked=""><span class="checkmark"></span></label></div>
                    </div>
                    <div class="sort-item st-icheck">
                        <span class="title">Price</span>
                        <div class="st-icheck-item"><label> Low to High<input class="service_order" type="radio" name="service_order_m_" data-value="price_asc"><span class="checkmark"></span></label></div>
                        <div class="st-icheck-item"><label> High to Low<input class="service_order" type="radio" name="service_order_m_" data-value="price_desc"><span class="checkmark"></span></label></div>
                    </div>
                    
                </div>
                <h3 class="search-string modern-result-string" id="modern-result-string">
                    {{ count($tour) }}  tours
                    <div id="btn-clear-filter" class="btn-clear-filter" style="display: none">Clear filter</div>
                </h3>
            </div>
            <div class="top-filter">
                <ul>
                    <li>
                        <h3 class="title">FILTER BY</h3>
                        <span class="hidden-lg hidden-md close-filter">
                            <i class="input-icon field-icon fa">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                        </span>
                    </li>
                    <li class="filter-price">
                        <div class="form-extra-field dropdown">
                            <button class="btn btn-link dropdown" type="button" id="dropdownMenuFilterPrice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter Price <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu range-slider" aria-labelledby="dropdownMenuFilterPrice" style="display: none;">
                            
                                <input type="text" class="price_range irs-hidden-input" name="price_range" value="0;500" data-symbol="€" data-min="0" data-max="500" data-step="0" tabindex="-1" readonly="">
                                <button class="btn btn-link btn-apply-price-range">Apply</button>
                            </div>
                        </div>
                    </li>
                   
                </ul>
                <div class="toolbar toolbar-intop">
                    <ul class="toolbar-action hidden-xs hidden-sm">
                        <li>
                            <div class="form-extra-field dropdown">
                                <button class="btn btn-link dropdown" type="button" id="dropdownMenuSort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort <i class="fa fa-angle-down arrow"></i>
                                </button>
                                <div class="dropdown-menu sort-menu" aria-labelledby="dropdownMenuSort" style="">
                                    <div class="sort-title">
                                        <h3>SORT BY <span class="hidden-lg hidden-md hidden-sm close-filter"><i class="fa fa-times" aria-hidden="true"></i></span></h3>
                                    </div>
                                    
                                    <div class="sort-item st-icheck">
                                        <span class="title">Price</span>
                                        <div class="st-icheck-item"><label> Low to High<input class="service_order" type="radio" name="service_order_" data-value="price_asc"><span class="checkmark"></span></label></div>
                                        <div class="st-icheck-item"><label> High to Low<input class="service_order" type="radio" name="service_order_" data-value="price_desc"><span class="checkmark"></span></label></div>
                                    </div>
                                    <div class="sort-item st-icheck">
                                        <span class="title">Name</span>
                                        <div class="st-icheck-item"><label> a - z<input class="service_order" type="radio" name="service_order_" data-value="name_a_z"><span class="checkmark"></span></label></div>
                                        <div class="st-icheck-item"><label> z - a<input class="service_order" type="radio" name="service_order_" data-value="name_z_a"><span class="checkmark"></span></label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="layout hidden">
                            <span class="layout-item" data-value="list">
                                <span class="icon-active">
                                    <i class="input-icon field-icon fa">
                                        <svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <g id="Search_Result_1_List" transform="translate(-1255.000000, -920.000000)" stroke="#5191FA">
                                                    <g id="list-hotel" transform="translate(435.000000, 910.000000)">
                                                        <g id="sort" transform="translate(818.000000, 10.000000)">
                                                            <g id="ico_list-active" transform="translate(2.000000, 0.000000)">
                                                                <g id="layout-bullets">
                                                                    <rect id="Rectangle-path" x="6.875" y="0.6225" width="12.5" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="6.875" y="8.1225" width="12.5" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="6.875" y="15.6225" width="12.5" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="0.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="0.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="0.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                </span>
                                <span class="icon-normal">
                                    <i class="input-icon field-icon fa">
                                        <svg height="24px" width="24px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <g id="Search_Result_1_Grid" transform="translate(-1255.000000, -920.000000)" stroke="#A0A9B2">
                                                    <g id="list-hotel" transform="translate(435.000000, 910.000000)">
                                                        <g id="ico_list" transform="translate(820.000000, 10.000000)">
                                                            <g id="layout-bullets">
                                                                <rect id="Rectangle-path" x="6.875" y="0.6225" width="12.5" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="6.875" y="8.1225" width="12.5" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="6.875" y="15.6225" width="12.5" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="0.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="0.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="0.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                </span>
                            </span>
                            <span class="layout-item active" data-value="grid">
                                <span class="icon-active">
                                    <i class="input-icon field-icon fa">
                                        <svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <g id="Search_Result_1_Grid" transform="translate(-1285.000000, -920.000000)" stroke="#5191FA">
                                                    <g id="list-hotel" transform="translate(435.000000, 910.000000)">
                                                        <g id="ico_grid_active" transform="translate(850.000000, 10.000000)">
                                                            <g id="layout-module">
                                                                <rect id="Rectangle-path" x="0.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="8.125" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="15.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="0.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="8.125" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="15.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="0.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="8.125" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                <rect id="Rectangle-path" x="15.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                </span>
                                <span class="icon-normal">
                                    <i class="input-icon field-icon fa">
                                        <svg width="24px" height="24px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <g id="Search_Result_1_List" transform="translate(-1285.000000, -920.000000)" stroke="#A0A9B2">
                                                    <g id="list-hotel" transform="translate(435.000000, 910.000000)">
                                                        <g id="sort" transform="translate(818.000000, 10.000000)">
                                                            <g id="ico_grid" transform="translate(32.000000, 0.000000)">
                                                                <g id="layout-module">
                                                                    <rect id="Rectangle-path" x="0.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="8.125" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="15.625" y="0.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="0.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="8.125" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="15.625" y="8.1225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="0.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="8.125" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                    <rect id="Rectangle-path" x="15.625" y="15.6225" width="3.75" height="3.75" rx="1.5"></rect>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </i>
                                </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="modern-search-result" class="modern-search-result">
                <div class="map-content-loading">
                    <div class="st-loader"></div>
                </div>
                <div class="row row-wrapper">
                    @foreach($tour as $tours)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item-service grid-item has-matchHeight" style="height: 382px;">
                      
                        <div class="service-border">
                            <div class="thumb">
                               
                                <a href="{{ route('tourDetails',['id' => $tours->url_rewrite]) }}    /tour-detail/{{ $tours->url_rewrite }}" class="login" data-toggle="modal" data-target="#st-login-form">
                                    <div class="service-add-wishlist" title="Add to wishlist">
                                        <i class="fa fa-heart"></i>
                                        <div class="lds-dual-ring"></div>
                                    </div>
                                </a>
                                
                                <a href="{{ route('tourDetails',['id' => $tours->url_rewrite]) }}">
                                <img width="680" height="500" src="{{ $tours->image }}" class="img-responsive wp-post-image" alt="WordPress Booking Theme" /> </a>
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
                                
                            </div>
                            
                        </div>
                    </div>
                     @endforeach      
                </div>
                <!-- <div class="wait">
                    <div class="loader"></div>
                </div> -->
            </div>
            <div class="pagination moderm-pagination" id="moderm-pagination" data-layout="normal">
                <ul class="page-numbers">
                    <li><a aria-current="page" class="page-numbers current">1</a></li>
                    <li><a class="page-numbers" href="https://tomap.travelerwp.com/search-on-top/page/2/">2</a></li>
                    <li><a class="next page-numbers" href="https://tomap.travelerwp.com/search-on-top/page/2/"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <span class="count-string">
                1 - 15 of 25 Tours        </span>
            </div>
        </div>
    </div>
</div>
@php 
    $data = json_encode($tour);

@endphp

<script type="text/javascript">  
    $(document).ready(function() {
        var data = <?php   print_r($data)  ?>;

        // hàm sắp xếp động
        function compareValues(key, order='asc') {
            return function(a, b) {
                if(!a.hasOwnProperty(key) || !b.hasOwnProperty(key)) {
                 // không tồn tại tính chất trên cả hai object
                   return 0; 
                }
             
                const varA = (typeof a[key] === 'string') ? 
                    a[key].toUpperCase() : a[key];
                const varB = (typeof b[key] === 'string') ? 
                    b[key].toUpperCase() : b[key];
             
                let comparison = 0;
                   if (varA > varB) {
                     comparison = 1;
                   } else if (varA < varB) {
                     comparison = -1;
                   }
                return (
                    (order == 'desc') ? (comparison * -1) : comparison
                );
            };
        } 

        // render  html
        function htmlReturn(result) {
            print  = []
            for(i=0;i<result.length;i++){
                var html = '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 item-service grid-item has-matchHeight" style="height: 379px;"> <div class="service-border"> <div class="thumb"> <a href="http://127.0.0.1:8000/tourDetails/fareastour" class="login" data-toggle="modal" data-target="#st-login-form"> <div class="service-add-wishlist" title="Add to wishlist"> <i class="fa fa-heart"></i> <div class="lds-dual-ring"></div> </div> </a> <a href="'+result[i].url_rewrite+'"> <img width="680" height="500" src="'+result[i].image+'" class="img-responsive wp-post-image"> </a> </div> <h4 class="service-title plr15"><a href="'+result[i].url_rewrite+'">'+result[i].Name+'</a></h4> <div class="service-review plr15"> <ul class="icon-group text-color booking-item-rating-stars"> <li><i class="fa fa-star"></i></li> <li><i class="fa fa-star"></i></li> <li><i class="fa fa-star-half-o"></i></li> <li><i class="fa fa-star-o"></i></li> <li><i class="fa fa-star-o"></i></li> </ul> </div> </div> </div>';
                print.push(html);
            }  
            $('.row-wrapper').html(print);  
        }


        function sortByoption(data) {
            $("input[name='service_order_']").change(function(){

                switch ($("input[name='service_order_']:checked").attr('data-value')) {

                    case "price_asc":

                        result = data.sort(compareValues('price', 'asc'));

                        htmlReturn(result);
                    
                        break;

                    case "price_desc":
                        result = data.sort(compareValues('price', 'desc'));

                        htmlReturn(result);

                        break;

                    case "name_a_z":
                        result = data.sort(compareValues('Name', 'asc'));

                        htmlReturn(result);

                        break;

                    case "name_z_a":
                        result = data.sort(compareValues('Name', 'desc'));

                        htmlReturn(result);
                      
                        break;
                }

            });
        }

        // click button filter
        $('.btn-apply-price-range').click(function(){
            let price               = $("[name=price_range]").val().trim();
            const replacePrice      = price.replace(';', ',');
            price                   = replacePrice.split(',');
            const from              = price[0];
            const to                = price[1];
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

            $.ajax({
                type: 'post',
                url: "/filter",
                data: {
                    'from'      : from, 
                    'to'    : to,
                },
               
                success:function(data){

                    htmlReturn(data);

                    sortByoption(data);

                    $('#modern-result-string').text(data.length+' tours');
                    
                }    
            });
        }); 

        sortByoption(data);
    })    
    // console.log(data);

</script>

@stop