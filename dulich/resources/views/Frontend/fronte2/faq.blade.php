@extends('Frontend.layout')

@section('content')


<style>
    .search-result-page .banner {
        background-image: url(https://tomap.travelerwp.com/wp-content/uploads/2019/01/slide-faqs.jpg) !important;
    }    
</style>

<div id="st-content-wrapper" class="search-result-page">
    <div class="banner st_1585535113">
        <div class="container">
            <h1>
                FAQs                    
            </h1>
        </div>
    </div>
    <div class="st-breadcrumb hidden-xs">
        <div class="container">
            <ul>    
                <li><a href="https://tomap.travelerwp.com">Home</a></li>
                <li class="active">FAQs</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="vc_row wpb_row st bg-holder">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-9">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="st-faq-new st-faq">
                                <h3>FAQs</h3>
                                

                                @if(count($faqs)>0)

                                @foreach($faqs as $key=>$faq)
                                <div class="item">
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

                                <?php  
                                    $tourid[] = $faq->tourId;
                                   

                                ?>
                                @endforeach
                                 <?php
                                    $toursRelated = App\Models\Tour::whereIn('id', $tourid)->get();

                                  ?>

                                {{ $faqs->links() }}
                                @endif
                               
                            </div>
                            <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-3">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                            <div class="st-related-service-new">
                                <div class="e-title-wrapper">
                                    <h3 class="e-title">RELATED TOURS</h3>
                                </div>
                                @if(count($toursRelated)>0)

                                @foreach($toursRelated as $tour)

                                <?php  

                                     $image      = App\Models\imageTour::where('imageTour_id', $tour->id)->get(); 


                                ?>
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('tourDetails',
                                         ['id' => $tour->url_rewrite]) }}">
                                        <img src="{{ $image[0]->image }}"  class="img-responsive img-full">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="{{ route('tourDetails',
                                         ['id' => $tour->url_rewrite]) }}" class="st-link c-main">{{ $tour->Name}}</a></h4>
                                        <div class="price-wrapper">
                                            from <span class="price">{{ $tour->discountPrice }} $</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                @endif
                              
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