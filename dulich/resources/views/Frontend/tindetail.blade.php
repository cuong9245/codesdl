@extends('Frontend.master')

@section('content')

<div class="container n3-news mg-bot40">
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 l">
            <div class="frame-dt-top">
                <h1 class="news-detail-title">
                     {!! $newsDetail->title !!}
                </h1>
                <div class="frame-date">
                    <div class="f-left"><img src="{{ asset('Frontend/Content/ThemeHe/img/i-date.png') }}" alt="date"></div>
                    <div class="f-left date">02/01/2020</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="frame-dt-bot">
                {!! $newsDetail->summary !!}
            </div>
            
            <div class="frame-dt-content">
                <div style="text-align: justify;">{!! $newsDetail->Detail !!}
                    <br>
                    
                
                </div>
                <div class="frame-dt-content">
                </div>
                <div class="frame-dt-content">
                    <br>
                    <strong>Liên hệ đặt tour: FAREASTOUR</strong>
                    <br> 190 Pasteur, P.6, Q.3, TP.HCM - Tel: (028) 3822 8898
                    <br> Hotline: 1900 1839 (08:00 – 23:00 hàng ngày)
                    <br> Email: sales@vietravel.com
                    <br> Website: <a title="www.travel.com.vn" href="https://travel.com.vn?utm_source=internalbl&amp;utm_medium=click&amp;utm_campaign=ATLinks" target="_blank">www.travel.com.vn</a> | Fanpage: Vietravel
                    <br> Zalo: zalo.me/2740419779120028213 | IG: www.instagram.com/vietravel/
                    <br>
                    <strong>Khách đoàn liên hệ:</strong>
                    <br> Email: mice@vietravel.com
                    <br> Hottine: 0938.301.393
                    <br> &nbsp;
                </div>
            </div>

           <!--  <div class="tinlienquan">
                <div class="i-title-sub">TIN KHÁC</div>
                <ul class="row list-tinkhac">
                    <li class="col-md-6 col-sm-6 col-xs-12 dot-dot cut-name" style="overflow-wrap: break-word;"><a href="/tin-tuc-du-lich/5-hanh-trinh-di-doc-viet-nam-dip-tet-nguyen-dan-v13150.aspx" title="5 hành trình đi dọc Việt Nam dịp Tết Nguyên đán">5 hành trình đi dọc Việt Nam dịp Tết Nguyên đán</a></li>
                </ul>
            </div> -->
        </div>

        <div class="col-lg-3 hidden-md hidden-sm hidden-xs r">
            <div class="frame-news-r">
                <div class="news-mini">
                    <div class="title"><a href="#">Tin mới</a></div>
                    <div id="divNewsLastest">
                        <ul class="list-tinkhac">
                            @foreach($newsNew as $new)
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="{{ route('newsDetail', ['id' => $new->url_rewrite])  }}" title="{!! $new->title !!}"> {!! $new->title !!} </a></li>
                            @endforeach
                           
                        </ul>
                    </div>
                </div>
                <div class="news-mini">
                    <div class="title"><a href="#">Tin ngẫu nhiên</a></div>
                    <div id="divNewsRandom">
                        <ul class="list-tinkhac">
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="/tin-tuc-du-lich/binh-yen-mien-hanh-phuc-bhutan-v13069.aspx" title="Bình yên 'miền hạnh phúc' Bhutan">Bình yên 'miền hạnh phúc' Bh ...</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop