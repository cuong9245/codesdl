@extends('Frontend.master')
<!-- list-tour -->
@section('content')
<div class="container n3-list-tour mg-bot40">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="list-tour" itemscope itemtype="http://schema.org/Place">
                <div class="des-tour">
                    <h1 itemprop="name">Ưu đ&#227;i thanh to&#225;n trực tuyến</h1>
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

                        <!-- Tour trong nước -->
                        <div class="col-md-12 text-center" style="padding-bottom:25px;">
                            <h2 class="title" style="text-shadow:none;"><a href="/tour-giam-gia-soc/trong-nuoc.aspx">Trong nước</a></h2>
                        </div>

                        <script src="/Content/ThemeHe/js/RateIt/jquery.rateit.js"></script>
                        <link href="/Content/ThemeHe/js/RateIt/rateit.css" rel="stylesheet" />
                        
                        @foreach($promotions as $promotion)
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">
                            <div class="frame-day-scroll " id="tagMax354">
                                <div class="text-center">
                                    <div class="f-day">
                                        {{ $promotion->created_at->format('d') }}
                                    </div>
                                    <div class="f-date">{{ $promotion->created_at->format('m/y') }}</div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                            <div class="item mg-bot30">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tour-name">
                                            <a href="{{ route('promotionsDetail', ['id' => $promotion->url_rewrite]) }}"><h3> {!! $promotion->Title !!} </h3></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                                        <div class="pos-relative">
                                            <div class="badge-promo">
                                                <div class="badge-promo-content">

                                                    <div><i class="fa fa-spinner"></i> Khuyến mãi </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('promotionsDetail', ['id' => $promotion->url_rewrite]) }}">
                                                <img src="{!! $promotion->image !!}? {!! $promotion->image !!}:''  {{ isset($image) ? $image->image : '/images/no-image.png'  }}" alt="{!! $promotion->name !!}" style="width:100%;">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        {!! $promotions->links() !!}
                        
                        
                        
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