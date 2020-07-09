@extends('Frontend.master')
<!-- list-tour -->
@section('content')
@if (session('messageInfomation'))
    <div class="alert alert-success" role="alert">
        {{ session('messageInfomation') }}
    </div>
@endif
<div class="container n3-list-tour mg-bot40">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="list-tour" itemscope itemtype="http://schema.org/Place">
                <div class="des-tour">
                    <h1 itemprop="name">Tìm Kiếm Tour</h1>
                    <div class="clear"></div>
                    <div class="des-content">
                        <div class="mg-bot10">
                            <!-- <div itemprop="description" style="margin-bottom: 10px;">
                                Săn tour giá sốc cùng Vietravel. Tour giảm giá đặc biệt, chất lượng không đổi và số lượng chỗ có hạn. Chương trình chỉ áp dụng thanh toán trực tuyến trên website. Lưu ý: Tour không hoàn, không hủy, không chuyển đổi hành trình.
                            </div> -->
                            <div>
                                <div class='socialBox'>
                                    <div class='tw'><a href="https://twitter.com/share" class="twitter-share-button" data-url="https://travel.com.vn/tour-giam-gia-soc.aspx">Tweet</a>
                                        <script type="text/javascript">
                                            ! function(d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0],
                                                    p = /^http:/.test(d.location) ? 'http' : 'https';
                                                if (!d.getElementById(id)) {
                                                    js = d.createElement(s);
                                                    js.id = id;
                                                    js.src = p + '://platform.twitter.com/widgets.js';
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }
                                            }(document, 'script', 'twitter-wjs');
                                        </script>
                                    </div>
                                    <div class='fb'>
                                        <div class="fb-like" data-href="https://travel.com.vn/tour-giam-gia-soc.aspx" data-send="true" data-layout="button_count" data-width="150" data-show-faces="true"></div>
                                    </div>
                                    <div class='gl'>
                                        <div class="zalo-share-button" data-href="" data-oaid="2390854997978519198" data-layout="2" data-color="blue" data-customize=false></div>
                                    </div>
                                    <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
                                    <div class='pin'>
                                        <a href="//www.pinterest.com/pin/create/button/?url=https://travel.com.vn/tour-giam-gia-soc.aspx&media=https://travel.com.vn/images/destination/Large/du-lich-gia-re.jpg&description=Săn tour giá sốc cùng Vietravel. Tour giảm giá đặc biệt, chất lượng không đổi và số lượng chỗ có hạn. Chương trình chỉ áp dụng thanh toán trực tuyến trên website. Lưu ý: Tour không hoàn, không hủy, không chuyển đổi hành trình." target="_blank" data-pin-do="buttonBookmark"><img src="https://travel.com.vn/images/pin_it_button.png" alt="pin" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="padding-bottom:20px;"></div>

                <div class="list">
                    <div class="row">



                        <script src="/Content/ThemeHe/js/RateIt/jquery.rateit.js"></script>
                        <link href="/Content/ThemeHe/js/RateIt/rateit.css" rel="stylesheet" />
                        @if(!empty($tour))

                        <!-- Tour trong nước -->
                        <div class="col-md-12 text-center" style="padding-bottom:25px;">
                            <h2 class="title" style="text-shadow:none;"><a href="/tour-giam-gia-soc/trong-nuoc.aspx">Tìm thấy {{ count($tour) }} Tours</a></h2>
                        </div>


                        @foreach($tour as $tours)
                        <?php  
                            $datetime = new Carbon\Carbon($tours->departureDay);

                            $discount = (int)$tours->price - $tours->discountPrice;

                            $image    =  App\Models\imageTour::where('imageTour_id', $tours->id)->first(); 

                        ?>
                        
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                            <div class="frame-day-scroll " id="tagMax354">
                                <div class="text-center">
                                    <div class="f-day">
                                        {{ $datetime->day }}
                                    </div>
                                    <div class="f-date">{{ $datetime->month }}/{{ $datetime->year }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                            <div class="item mg-bot30">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tour-name">
                                            <a href="{{route('tourDetail', ['id' => $tours->url_rewrite]) }}"><h3> {{ $tours->Name }} </h3></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="pos-relative">
                                            <div class="badge-promo">
                                                <div class="badge-promo-content">

                                                    <div><i class="fa fa-spinner"></i> ƯU ĐÃI THANH TOÁN ONLINE </div>
                                                </div>
                                            </div>
                                            <a href="{{route('tourDetail', ['id' => $tours->url_rewrite]) }}">
                                                <img src="{{ isset($image) ? $image->image : '/images/no-image.png'  }}" alt="{{ $tours->name }}" style="width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <div class="frame-info">
                                            <div class="row">

                                                <div class="col-md-7 col-sm-7 col-xs-12 mg-bot10">
                                                    <div class="f-left l"><img src="{{ asset('Frontend/Content/ThemeHe/img/i-code.png') }}" alt="code"></div>
                                                    <div class="f-left r"> {{ $tours->Code }} </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="col-md-5 col-sm-5 col-xs-12 mg-bot10">
                                                    <div class="f-left l"><img src="{{ asset('Frontend/Content/ThemeHe/img/i-chair.png')}}" alt="chair"></div>
                                                    <div class="f-left r">
                                                        Số chỗ còn nhận: <span class="font500">{{ $tours->max }}</span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="col-md-7 col-sm-7 col-xs-12 mg-bot10">
                                                    <div class="f-left l"><img src="{{ asset('Frontend/Content/ThemeHe/img/i-date.png')}}" alt="date"></div>
                                                    <div class="f-left r">Ngày đi: <span class="font500">{{ $tours->departureDay }}</span></div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="col-md-5 col-sm-5 col-xs-12 mg-bot10">
                                                    <div class="f-left l"><img src="{{ asset('Frontend/Content/ThemeHe/img/i-clock.png')}}" alt="clock"></div>
                                                    <div class="f-left r">Giờ đi: <span class="font500">{{ $tours->departureTime }}</span></div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="col-md-7 col-sm-7 col-xs-12 mg-bot10">
                                                    <div class="f-left l"><img src="{{ asset('Frontend/Content/ThemeHe/img//i-price.png')}}" alt="price"></div>
                                                    <div class="f-left r">
                                                        Gi&#225;:
                                                        <span class="font500 price">{{ $tours->price }}đ</span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="col-md-5 col-sm-5 col-xs-12">
                                                    <div class="f-left l"><img src="{{ asset('Frontend/Content/ThemeHe/img/i-calendar.png')}}" alt="date"></div>
                                                    <div class="f-left r">Số người: <span class="font500">3</span></div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 mg-bot10">
                                                    <div class="f-left l"><img src="{{ asset('Frontend/Content/ThemeHe/img/i-dep.png')}}"></div>
                                                    <div class="f-left r">Nơi khởi hành: <span class="font500"> Hồ Ch&#237; Minh</span></div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 mg-bot10">
                                                    <span class="saleonline">
                                            <i class="fa fa-bell"></i>&nbsp;&nbsp;Giảm ngay <span>{{ $discount }}đ</span> khi thanh toán trực tuyến
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        @else
                        
                        <div class="col-md-12 text-center" style="padding-bottom:25px;">
                            <h2 class="title" style="text-shadow:none;"><a href="/tour-giam-gia-soc/trong-nuoc.aspx">Tìm thấy 0 Tours</a></h2>
                        </div>
    

                        @endif
                        
                        
                        <!-- ./Tour trong nước -->
                        
                        <div class="col-xs-12 text-right mg-bot30">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop