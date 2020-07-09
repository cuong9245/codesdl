@extends('Frontend.master')
<?php  

        $banner = App\Models\Banner::all();

        $now = \Carbon\Carbon::now();

        $destination = App\Models\city::orderBy('id', 'asc')
               ->take(4)->get();

        $select = App\Models\whySelect::orderBy('id', 'asc')
               ->take(6)->get();

        //tour giờ chót

        $tourTong = App\Models\Tour::orderBy('departureDay','asc')->get(); 



        if (count($tourTong)>0) {
            foreach ($tourTong as $tours) {
                $datetime = new \Carbon\Carbon($tours->departureDay.' '.$tours->departureTime);
                if(strtotime($now) < strtotime($datetime)){

                    $tourTong1[] = $tours;
                }
                
            } 
            if(!empty($tourTong1)>0){
                foreach ($tourTong1 as $key=>$toursk) {
                    $tour[] = $toursk;
                    if ($key>1) {
                        
                       break;
                    }
                }
            }
            
            else{
                $tour      = array();
                $tourTong1 = array();

            }    
        }


       // print_r($tour);

             
        // print_r(count($hourTour));

        // print_r($tour[0]->departureDay);
       
        $payOnline = App\Models\Tour::get(); 

        foreach ($payOnline as $value) {

            $datetime = new \Carbon\Carbon($value->departureDay.' '.$value->departureTime);
            
            if (strtotime($now) < strtotime($datetime)) {

                if ($value->percent >0) {
                    $pays[] =   App\Models\Tour::find($value->id);
                }
                
            }
            else{
                
                $pays      = array();
                
            }

        }
       
        if (count($pays)>0) {
            if (count($pays)>3) {
                for ($i=0; $i <3 ; $i++) { 

                    $paysOnline[]  = $pays[$i];
                }
            }
            else{
    
                for ($i=0; $i < 1 ; $i++) { 

                    
                   
                    $paysOnline[]  = $pays[$i];
                }
            }


        }
        else{
            
           $paysOnline = array();
        }

        
        // foreach ($paysOnline as $key => $value) {
        //     echo $value->id.'<br>';
        // }    
        
    ?>

<!-- list-tour -->
@section('content')
<div style="display: none;">
    <h1>Du lịch</h1>
    <p>Fareastour - Nhà tổ chức du lịch chuyên nghiệp. Website travel.com.vn tự hào là mạng bán tour du lịch trực tuyến đầu tiên tại Việt Nam.</p>
</div>

<!-- tour hour -->
<div class="container n3-tour-hour">
    <div class="row">
        <div class="col-xs-12 mg-bot30">
            <h2 class="title-l mg-bot10">
                <a href="{{ route('time-tour')}}">Tour Giờ Chót</a>
            </h2>
            <div class="text-center title-descript">Tour giờ ch&#243;t với gi&#225; tốt</div>
        </div>
        <div id="idLastMinute">
            
           @if(count($tour)>0)
            <?php  

                $dem =0;

            ?>
            @foreach($tour as $tours)
            <?php

                $image    =  App\Models\imageTour::where('imageTour_id', $tours->id)->first();

                $datetime = new \Carbon\Carbon($tours->departureDay.' '.$tours->departureTime);

                $days     = $datetime->diffInDays($now);

                $hours    = $now->diffInHours($datetime)%24;

                $minutes  = ($now->diffInMinutes($datetime)%1440)%60;

                $seconds  = (($now->diffInSeconds($datetime)%86400)%1440)%60;

            ?>
            @if(strtotime($now) < strtotime($datetime))

            <?php 
                $dem++;

                $tinh[] = $dem;

            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
                <a href="{{ route('tourDetail', ['id' => $tours->url_rewrite])  }} " title="{!! $tours->Name !!}  ">
                    <div class="pos-relative">
                        @if(!empty($image))
                        <img src="{{ $image->image }}" class="img-responsive pic-tgc" alt="{{ $tours->Name }}">

                        @else
                        <img src="/images/no-image.png" class="img-responsive pic-tgc" alt="{{ $tours->Name }}">

                        @endif
                        <div class="frame-tgc1">
                            <div class="row">
                                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8">
                                    <div class="f-left">
                                        <img src="/Frontend/travel-image/icon/i-date-w.png" alt="date">
                                    </div>
                                    <div class="f-left date"><span class="yellow"> {{ $tours->departureDay }} </span> - <span class="yellow">{{ $tours->Time }} ngày</span></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
                                    <div class="f-left">
                                        <img src="/Frontend/travel-image/icon/i-chair-w.png" alt="chair">
                                    </div>
                                    <div class="f-left chair"><span class="yellow"> {{ $tours->max }} chỗ </span></div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="frame-tgc">
                            
                            <span class="dem">Còn <span id="d{{ $dem }}">{{ $days }}</span> ngày <span id="h{{ $dem }}">{{ $hours }}</span>:<span id="m{{$dem}}">{{ $minutes }}</span>:<span id="s{{$dem}}">{{ $seconds }}</span></span>
        
                           
                        </div>
                    </div>
                    <div class="frame-tgc2">
                        <div class="tgc-title dot-dot-ajax cut-tgc ddd-truncated" style="overflow-wrap: break-word;"> {{ $tours->Name }}  </div>
                        
                        <div class="tgc-line"></div>
                        <div class="mg-bot10">
                            <img src="/Frontend/travel-image/icon/i-dep.png" class="f-left">
                            <div class="f-left tgc-info">
                                <span>Nơi khởi hành:&nbsp;&nbsp;<span style="font-weight: bold;color:#212121;">  {{ $tours->startPlace }} </span></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="mg-bot10">
                            <img src="/Frontend/travel-image/icon/i-price.png" class="f-left" alt="price">
                            <div class="f-left tgc-info">
                                <span class="price-o">
                                {{ $tours->price }}  <span>&nbsp;</span>$                   
                                </span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="price-n"> {{ $tours->discountPrice }}$ </span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
            @endif
            @if(!empty($tinh))
            <span id="times" class="hide">{{ count($tinh) }}</span>
            
             @else
            <span id="times" class="hide">0</span>
            @endif

            
            
        </div>
        <div class="col-xs-12 text-center">
            <a href="{{ route('time-tour')}}" class="btn btn-book1 btn-md">Xem th&#234;m</a>
        </div>
    </div>
</div>
<!-- tour hour -->
<!-- pay online -->
<div class="container n3-pay-online">
    <div class="row">
        <div class="col-xs-12 mg-bot30">
            <h2 class="title-l mg-bot10"><a href="{{ route('discount-tour') }}">Ưu đ&#227;i thanh to&#225;n trực tuyến</a></h2>
            <div class="text-center title-descript">Mua tour v&#224; thanh to&#225;n trực tuyến với gi&#225; ưu đ&#227;i</div>
        </div>
        <div id="idTourOnline">
            
            @if(count($paysOnline)>0)

            @foreach($paysOnline as $key=>$tours)
            
            <?php

                

                $image    =  App\Models\imageTour::where('imageTour_id', $tours->id)->first(); ?>
             
            @if(strtotime($now) < strtotime($datetime))  

            @if($key==0)
            
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mg-bot30">
                <a href="{{ route('tourDetail', ['id' => $tours->url_rewrite])  }}" title="{{ $tours->name }}">
                    <div class="pos-relative">
                        <img src="{{ isset($image) ? $image->image : '/images/no-image.png' }}" class="img-responsive pic-ud-l }}" alt="{{ $tours->name }}">
                        <div class="frame-po-l">
                            <div class="po-title-l dot-dot-ajax cut-po-l" style="overflow-wrap: break-word;"> {{ $tours->name }} </div>
                            <div class="mg-bot10"><span class="yellow"> {{ $tours->departureDay }}  </span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="yellow">{{ $tours->Time}} ngày</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="yellow">{{ $tours->max }} chỗ</span></div>
                            <div class="mg-bot10">Nơi khởi hành:&nbsp;&nbsp;<span style="color:#ffc000">{{ $tours->startPlace }}</span></div>
                            <div>
                                <span class="price-o"> {{ $tours->price }} $ </span>&nbsp;<span class="hidden-md">&nbsp;&nbsp;&nbsp;</span>
                                <span class="price-n"> {{ $tours->discountPrice}}  $ </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            @else

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mg-bot30">
                <a href="{{ route('tourDetail', ['id' => $tours->url_rewrite]) }}" title="{{ $tours->name }}">
                    <div class="pos-relative">
                        <img src="{{ isset($image) ? $image->image : '/images/no-image.png' }}" class="img-responsive pic-ud-s" alt="{{ $tours->name }}">
                        <div class="frame-po"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            &nbsp;&nbsp;Nơi khởi hành:&nbsp;&nbsp;<span style="color:#ffc000"> {{ $tours->startPlace }} </span></div>
                    </div>
                </a>
                <div class="frame-po-s">
                    <a href="{{ route('tourDetail', ['id' => $tours->url_rewrite]) }}">
                        <div class="po-title-s dot-dot-ajax cut-po-s" style="overflow-wrap: break-word;"> {{ $tours->Name }} </div>
                    </a>
                    <div class="po-line"></div>
                    <div class="mg-bot10">
                        <img src="/Frontend/travel-image/icon/i-date.png" class="f-left" alt="date">
                        <div class="f-left po-info-s">{{ $tours->departureTime }}&nbsp;&nbsp;-&nbsp;&nbsp; {{ $tours->Time }} ngày</div>
                        <div class="clear"></div>
                    </div>
                    <div class="mg-bot10">
                        <img src="/Frontend/travel-image/icon/i-chair.png" class="f-left" alt="chair">
                        <div class="f-left po-info-s"> {{ $tours->max }} chỗ</div>
                        <div class="clear"></div>
                    </div>
                    <div class="mg-bot10">
                        <img src="/Frontend/travel-image/icon/i-price.png" class="f-left" alt="price">
                        <div class="f-left po-info-s">
                            <span class="price-o">{{ $tours->price }} $</span>&nbsp;<span class="hidden-md">&nbsp;&nbsp;&nbsp;</span>
                            <span class="price-n">{{ $tours->discountPrice }} $</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            
            @endif

            @endif
           

            @endforeach

            @endif

            
            


        </div>
        <div class="col-xs-12 text-center">
            <a href="{{ route('discount-tour') }}" class="btn btn-book1 btn-md">Xem thêm</a>
        </div>
    </div>
</div>
<!-- pay online -->

<!-- destination -->
<div class="container n3-destination">
    <div class="row">
        <div class="col-xs-12 mg-bot30">
            <h2 class="title-l mg-bot10"><a>Điểm đến y&#234;u th&#237;ch</a></h2>
            <div class="text-center title-descript">C&#225;c điểm đến du lịch trong nước v&#224; nước ngo&#224;i</div>
        </div>
        
        @if(count($destination)>0)    
            @foreach ($destination as $destinations)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mg-bot30">
                <div class="pos-relative">
                    <a href="{{ route('diadiem', ['id' => $destinations->url_rewrite])  }}" class="hvr-bounce-to-bottom">
                        <img src=" {{ $destinations->image }} " alt="{{ $destinations->name }}" class="img-responsive dd-img">
                        <div class="frame-destination d1">
                            <div class="destination-name"> {{ $destinations->name }} </div>
                            <div class="destination-like">Đ&#227; c&#243; <span class="num-like"> {{ $destinations->customer }} <sup class="k">+</sup></span> lượt kh&#225;ch</div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        @endif
        
        <div class="col-xs-12">
            <div style="border-top: 1px dashed #ccc;padding-bottom: 30px;padding-top: 0px;"></div>
        </div>
        <!-- <div class="nation">
            <div class="col-lg-2 col-xs-12 mg-bot30">
                <a href="/du-lich-nuoc-ngoai/tour-chau-au.aspx" class="hvr-sweep-to-right" title="Ch&#226;u &#194;u">
                    <div class="pos-relative">
                        <img src="/Frontend/travel-image/qg1.jpg" alt="Ch&#226;u &#194;u" class="img-responsive qg-img">
                        <div class="frame-nation">
                            <div class="nation-name"><span class="imp">Ch&#226;u &#194;u</span></div>
                            <div>
                                <div class="nation-expl f-left">Kh&#225;m ph&#225; ngay</div>
                                <div class="f-left"><img src="/Frontend/travel-image/icon/i-arrow.png" alt="arrow" class="img-responsive"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-xs-12 mg-bot30">
                <a href="/du-lich-nuoc-ngoai/tour-chau-a.aspx" class="hvr-sweep-to-right" title="Ch&#226;u &#193;">
                    <div class="pos-relative">
                        <img src="/Frontend/travel-image/qg1.jpg" alt="Ch&#226;u &#193;" class="img-responsive qg-img">
                        <div class="frame-nation">
                            <div>
                                <div class="nation-name"><span class="imp">Ch&#226;u &#193;</span></div>
                                <div class="nation-expl f-left">Kh&#225;m ph&#225; ngay</div>
                                <div class="f-left"><img src="/Frontend/travel-image/icon/i-arrow.png" alt="arrow" class="img-responsive"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-xs-12 mg-bot30">
                <a href="/du-lich-nuoc-ngoai/tour-chau-uc.aspx" class="hvr-sweep-to-right" title="Ch&#226;u &#218;c">
                    <div class="pos-relative">
                        <img src="/Frontend/travel-image/qg3.jpg" alt="Ch&#226;u &#218;c" class="img-responsive qg-img">
                        <div class="frame-nation">
                            <div class="nation-name"><span class="imp">Ch&#226;u &#218;c</span></div>
                            <div>
                                <div class="nation-expl f-left">Kh&#225;m ph&#225; ngay</div>
                                <div class="f-left"><img src="/Frontend/travel-image/icon/i-arrow.png" alt="arrow" class="img-responsive"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-xs-12 mg-bot30">
                <a href="/du-lich-nuoc-ngoai/tour-chau-my.aspx" title="Ch&#226;u Mỹ" class="hvr-sweep-to-right">
                    <div class="pos-relative">
                        <img src="/Frontend/travel-image/qg4.jpg" alt="Ch&#226;u Mỹ" class="img-responsive qg-img">
                        <div class="frame-nation">
                            <div class="nation-name"><span class="imp">Ch&#226;u Mỹ</span></div>
                            <div>
                                <div class="nation-expl f-left">Kh&#225;m ph&#225; ngay</div>
                                <div class="f-left"><img src="/Frontend/travel-image/icon/i-arrow.png" alt="arrow" class=""></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-xs-12 mg-bot30">
                <a href="/du-lich-nuoc-ngoai/tour-chau-phi.aspx" class="hvr-sweep-to-right" title="Ch&#226;u Phi">
                    <div class="pos-relative">
                        <img src="/Frontend/travel-image/qg5.jpg" alt="Ch&#226;u Phi" class="img-responsive qg-img">
                        <div class="frame-nation">
                            <div class="nation-name"><span class="imp">Ch&#226;u Phi</span></div>
                            <div>
                                <div class="nation-expl f-left">Kh&#225;m ph&#225; ngay</div>
                                <div class="f-left"><img src="/Frontend/travel-image/icon/i-arrow.png" alt="arrow" class="img-responsive"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div> -->
    </div>
</div>
<!-- destination -->
<!-- customer idea -->
    <!-- <div class="container n3-customer-idea" id="khachhang">
        <img src="/Frontend/Content/ThemeHe/img/loading.gif" alt="loading" style="text-align:center;display:table;margin:0 auto;height:50px;"/>
    </div> -->
<!-- customer idea -->
<!-- why vietravel -->
<div class="n3-why-vietravel">
    <div class="frame-why">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-4 hidden-xs">
                    <div class="bg-why">
                        <img src="/Frontend/travel-image/bg-why.png" class="pic-why">
                        <div class="pos-title">
                            <h2 class="l-height">
                                <span class="t-visao">V&#236; sao chọn</span><br>
                                <span class="t-chonvtv">Fareastour</span>
                            </h2>
                        </div>
                        <div class="pos-arrow">
                            <img src="/Frontend/travel-image/icon/i-arrow-l.png" class="i-arrow-l">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="hidden-lg hidden-md hidden-sm col-xs-12 mg-bot">
                            <div class="pos-title">
                                <div class="t-visao">V&#236; sao chọn</div>
                                <div class="t-chonvtv">travel.com.vn?</div>
                            </div>
                        </div>
                        @if(count($select))    
                            @foreach($select as $key=>$selects)
                            <div class="col-md-4 col-sm-6 col-xs-12 mg-bot">
                                <div class="item" style="height:130px;">
                                    <div class="item-num">{{ $key+1 }}.</div>
                                    <div class="item-name" style="text-transform: uppercase;"> {{ $selects->name }} </div>
                                    <div class="item-line">---------------------------</div>
                                    <div class="item-des">
                                        <p class="mg-bot5"> {{ $selects->detail }} </p>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        @endif    
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- why vietravel -->



<script type="text/javascript">
    $(document).ready(function () {
        Lastminute();
        TourOnline();
        //Feedback();
        $('#khachhang').html('cuong');
    });

    function Lastminute() {
        $.ajax({
            url: '/Ajax/_LastMinute',
            data: { LanguageID: '2', Rate: '1', CurrencyName: 'đ' },
            success: function (data) {
                $('#idLastMinute').html(data);
            }
        });
    }

    function TourOnline() {
        $.ajax({
            url: '/Ajax/_TourOnline',
            data: { tourtypeID: 0, LanguageID: '2', Rate: '1', CurrencyName: 'đ' },
            success: function (data) {
                $('#idTourOnline').html(data);
            }
        });
    }
   
</script>
@stop
    