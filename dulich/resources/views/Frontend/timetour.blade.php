@extends('Frontend.master')
<!-- list-tour -->
@section('content')
<div class="container n3-tour-hour">
    <div class="row">
        <div class="col-xs-12 mg-bot30">
            <h2 class="title-l mg-bot10">
                <a href="/du-lich-gio-chot.aspx" title="Tour giờ chót">Tour giờ chót</a>
            </h2>
            <div class="title-descript">Du lịch giờ chót của Vietravel luôn đem đến cho bạn những niềm bất ngờ thú vị. Đó là những đường tour cuốn hút với mức giá đầy hấp dẫn, khuyến mại vào thời điểm cận ngày khởi hành. Với những giảm giá rất ưu đãi phối hợp với hệ thống đối tác lớn mạnh, Vietravel cho bạn cơ hội được tận hưởng những dịch vụ chất lượng vàng không đổi từ công ty lữ hành uy tín nhất Việt Nam.</div>
        </div>
        
        <div>
           @if(count($Tours)>0)
            <?php  

                $dem =0;

            ?>
            @foreach($Tours as $tours)
            <?php

               

                $image    =  App\Models\imageTour::where('imageTour_id', $tours->id)->first();

                $datetime = new \Carbon\Carbon($tours->departureDay.' '.$tours->departureTime);

                $days     = $datetime->diffInDays($now);

                $hours    = $now->diffInHours($datetime)%24;

                $minutes  = ($now->diffInMinutes($datetime)%1440)%60;

                $seconds  = (($now->diffInSeconds($datetime)%86400)%1440)%60;

               

            ?>
            @if(strtotime($now) < strtotime($datetime) )

            <?php 
                $dem++;

                $tinh[] = $dem;

            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mg-bot30">
                <a href="{{route('tourDetail', ['id' => $tours->url_rewrite]) }}" title="{{ $tours->Name }}">
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
                                {{ $tours->price }}  <span>&nbsp;</span>đ                    
                                </span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="price-n"> {{ $tours->discountPrice }}đ </span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </a>
            </div>
            
            @endif
            @endforeach
            @endif
            
        </div>
        @if(!empty($tinh))
        <span id="times" class="hide">{{ count($tinh) }}</span>
        
         @else
        <span id="times" class="hide">0</span>
        @endif
        <!--<div class="col-xs-12">-->
        <!--    <div class="pager_simple_orange">-->
        <!--        <table>-->
        <!--            <tbody><tr>-->
        <!--                <td class=""><a href="/du-lich-gio-chot-p1.aspx">«</a></td>-->
        <!--                <td class="active"><a href="/du-lich-gio-chot-p1.aspx">1</a></td>-->
        <!--                <td><a href="/du-lich-gio-chot-p2.aspx">2</a></td>-->
        <!--                <td class=""><a href="/du-lich-gio-chot-p2.aspx">»</a></td>-->
        <!--            </tr>-->
        <!--        </tbody></table>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="col-md-12  col-xs-12">
            {!! $Tours->links() !!}
        </div>
        
    </div>
</div>

<div class="n3-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 hidden-xs mg-bot60">
                <img src="/Frontend/travel-image/icon/line-bot.png" class="img-responsive pic-line" alt="line">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mg-bot30">
                <h3 class="ft-title">Li&#234;n hệ</h3>
                <div class="mg-bot10">190 Pasteur, Phường 6, Quận 3, TP HCM</div>
                <div class="mg-bot5">
                    <div class="f-left">
                        <img src="/Frontend/travel-image/icon/i-phone.png" alt="phone">
                    </div>
                    <div class="f-left ft-mg-ct ft-mgtop">
                        (+84 28) 3822 8898
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="mg-bot5">
                    <div class="f-left">
                        <img src="/Frontend/travel-image/icon/i-fax.png" alt="fax">
                    </div>
                    <div class="f-left ft-mg-ct ft-mgtop">
                        (+84 28) 3829 9142
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="mg-bot15">
                    <div class="f-left">
                        <img src="/Frontend/travel-image/icon/i-mail.png" alt="mail">
                    </div>
                    <div class="f-left ft-mg-ct ft-mgtop">
                       <a href="mailto:info@vietravel.com" style="color:#337ab7;">info@vietravel.com</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="mg-bot5">
                    <img src="/Frontend/travel-image/map.png" style="border: 1px solid #e4e4e4;" class="img-responsive" alt="map">
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 mg-bot30">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bot30">
                        <h3 class="ft-title">Th&#244;ng tin</h3>
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <ul class="list-info">
                                    <li><a href="https://www.vietravel.com/vn/media/tap-chi-du-lich.aspx" target="_blank">Tạp ch&#237; du lịch</a></li>
                                    <li><a href="/du-lich-bang-hinh-anh.aspx">Cẩm nang du lịch</a></li>
                                    <li><a href="/kinh-nghiem-du-lich.aspx">Kinh nghiệm du lịch</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <ul class="list-info">
                                    <li><a href="/tin-tuc-du-lich.aspx">Tin tức</a></li>
                                    <li><a href="/sitemap.aspx">Sitemap</a></li>
                                    <li><a href="/StaticPage/FAQ">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mg-bot15"><img src="/Frontend/travel-image/icon/ft-line.png" alt="line"></div>
                        <ul class="list-chinhsach">
                            <li><a href="/vietravel-toolbar.aspx">Vietravel toolbar</a></li>
                            <li><a href="/privacy-cookies.aspx">Ch&#237;nh s&#225;ch ri&#234;ng tư</a></li>
                            <li><a href="/terms-conditions.aspx">Thỏa thuận sử dụng</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mg-bot30">
                        <h3 class="ft-title">NEWSLETTER</h3>
                        <div class="newsletter pos-relative mg-bot30">
                            <form action="/SubControl/_RegisterNewLetter" method="post">                            
                                <input type="text" class="form-control input-md" placeholder="Email của bạn" name="EmailRegister" id="EmailRegisterFooter" required="required">
                                <div class="btn-f">
                                    <button type="submit" class="bg-btn" style="border:none;">
                                        <i class="far fa-envelope fa-lg"></i>
                                    </button>
                                </div>
                            </form>                       
                    </div>
                    <h3 class="ft-title">T&#236;m kiếm th&#244;ng tin</h3>
                        <div class="info-search pos-relative mg-bot30">
                            <form action="/Tour/SearchToursByDestinationChild" method="post">
                                <input name="__RequestVerificationToken" type="hidden" value="jSbPP_DuqN4h7OBy6U48RxovqC-GYBFvs5eyw2YPLhdmzwy5nBcledLgC7UwTZwubJRKnCbE9lNbxn1tq1_WLt8AqyN9Aq_dDQmcPkiHwQM1" />       
                                <input type="text" class="form-control input-md" name="search" placeholder="Tour du lịch, Điểm đến...">
                                <div class="btn-f">
                                    <button class="bg-btn" type="submit" onclick="ga('event','SearchTop', 'SearchTopClick', 'keywords');" id="btnSearchTour" style="border:none;">
                                        <i class="fas fa-search fa-lg"></i>
                                    </button>
                                </div>
                            </form>                        
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="ft-title">Chấp nhận thanh to&#225;n</h3>
                        <div>
                            <div class="f-left ft-mg"><i class="iconT-123pay"></i></div>
                            <div class="f-left ft-mg"><i class="iconT-visa"></i></div>
                            <div class="f-left ft-mg"><i class="iconT-master"></i></div>
                            <div class="f-left ft-mg"><i class="iconT-jcb"></i></div>
                            <div class="f-left ft-mg"><i class="iconT-vnpay"></i></div>
                            <div class="f-left"><i class="iconT-v-visa"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mg-bot">
                <div class="row">
                    <div class="col-lg-12 col-md-3 col-sm-4 col-xs-12">
                        <h3 class="ft-title">Mạng x&#227; hội</h3>
                        <div class="mg-bot30">
                            <div class="f-left">
                                <a href="https://www.facebook.com/vietravel/" rel="nofollow" target="_blank" title="facebook">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                            <div class="f-left  ft-mg-sc">
                                <a href="https://www.instagram.com/vietravel/" rel="nofollow" target="_blank" title="instagram">
                                    <i class="iconT-instagram"></i>
                                </a>
                            </div>
                            <div class="f-left  ft-mg-sc">
                                <a href="https://twitter.com/VietravelGroup" rel="nofollow" target="_blank" title="twitter">
                                    <i class="iconT-tw"></i>
                                </a>
                            </div>
                            <div class="f-left  ft-mg-sc">
                                <a href="https://www.youtube.com/channel/UCY4diIi4ZvrcZIfpLTTM11g" rel="nofollow" target="_blank" title="youtube">
                                    <i class="iconT-yt"></i>
                                </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-3 col-sm-4 col-xs-12">
                        <h3 class="ft-title">Hotline</h3>
                        <div class="mg-bot30">
                            <div class="f-left">
                                <i class="iconT-i-hotline"></i>
                            </div>
                            <div class="f-left ft-mg-hl">
                                <div class="hl-num"><a href="tel:1900 1839">1900 1839</a></div>
                                <div class="hl-hour">Từ 08h00 - 23h00</div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-4 col-xs-12">
                        <h3 class="ft-title">Chứng nhận</h3>
                        <div class="mg-bot30">
                            
                            <a href="//www.dmca.com/Protection/Status.aspx?ID=9e50a0bf-95f9-4d51-9a58-0c1e0eddc3c7" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/_dmca_premi_badge_5.png?ID=9e50a0bf-95f9-4d51-9a58-0c1e0eddc3c7" alt="DMCA.com Protection Status" /></a>
                            <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pos">
        <p class="text-center">Bản quyền của Vietravel ® 2016. Bảo lưu mọi quyền. <br/>Ghi rõ nguồn "www.travel.com.vn" ® khi sử dụng lại thông tin từ website này. <br/>Số giấy phép kinh doanh lữ hành Quốc tế: 79-234/2014/TCDL-GP LHQT</p>
    </div>
</div>
@stop
