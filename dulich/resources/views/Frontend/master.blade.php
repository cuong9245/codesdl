
<!DOCTYPE html>
<html lang="vi">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Mạng bán tour trực tuyến tại Việt Nam | Du lịch Fareastour</title>
    <meta name="keywords" content="travel, vietravel, viettravel, viet travel, tour du lich, du lich, du lich trong nuoc, du lich viet nam, du lich thai lan, du lich campuchia" />
    <meta name="description" content="Vietravel - Nhà tổ chức du lịch chuyên nghiệp. Website travel.com.vn tự hào là mạng bán tour du lịch trực tuyến số 1 tại Việt Nam, với hơn 1.000 tour trực tuyến. Điều hành bởi Vietravel." /><link rel="canonical" href="https://travel.com.vn/" />
    <meta property="og:title" content="Mạng bán tour trực tuyến số 1 tại Việt Nam | Du lịch Vietravel"/>
    <meta property="og:description" content="Vietravel - Nhà tổ chức du lịch chuyên nghiệp. Website travel.com.vn tự hào là mạng bán tour du lịch trực tuyến số 1 tại Việt Nam, với hơn 1.000 tour trực tuyến. Điều hành bởi Vietravel."/>
    <meta property="og:url" content="https://travel.com.vn/"/>
    <meta property="og:image" content="https://travel.com.vn/Images/vtv-logo.png"/>
    <meta property="og:image:alt" content="Mạng bán tour trực tuyến số 1 tại Việt Nam | Du lịch Vietravel"/>
    <meta property="og:type" content="article"/>
    <link rel="alternate" href="https://travel.com.vn/" hreflang="vi-vn" />
    <meta name = "twitter:card" content = "summary"/>
    <meta name = "twitter:site" content = "@vietravelgroup"/>
    <meta name = "twitter:title" content = "Mạng bán tour trực tuyến số 1 tại Việt Nam | Du lịch Vietravel"/>
    <meta name = "twitter:description" content = "Vietravel - Nhà tổ chức du lịch chuyên nghiệp. Website travel.com.vn tự hào là mạng bán tour du lịch trực tuyến số 1 tại Việt Nam, với hơn 1.000 tour trực tuyến. Điều hành bởi Vietravel."/>
    <meta name = "twitter:image" content = "https://travel.com.vn/Images/vtv-logo.png"/>
    <!-- <link rel="Shortcut icon" type="image/x-icon" href="/Content/themeHe/img/favicon.ico" /> -->
    
    <meta name="robots" content="index, follow" />
    
    <meta name="geo.region" content="VN" />
    <meta name="geo.position" content="10.77997, 106.694979" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="geo.placename" content="Hồ Chí Minh" />
    <meta name="copyright" content="&amp;copy; travel.com.vn" />
    <meta name="googlebot" content="all, index, follow" />
    <meta name="pagerank" content="7" />
    <meta name="Area" content="Hanoi, Saigon, HoChiMinh, Danang,  Vietnam, Nhatrang, Cantho" />
    <meta name="revisit-After" content="1 days" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="general" />
    <meta name="doc-type" content="web page" />
    <meta name="pics-label" content="G" />
    <meta name="serps" content="1, 2, 3, 10, 11, 12, 13, ATF" />
    <meta name="seoconsultantsdirectory" content="8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Cache-control" content="max-age:31536000" />
    <meta property="fb:app_id" content="486170608123974" />
    <meta property="fb:admins" content="1460610925" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="/Frontend/css/bootrap1.css" rel="stylesheet"/>
    <link href="/Frontend/css/addcss.css" rel="stylesheet"/>

    <link href="/Frontend/css/main.css" rel="stylesheet" />
     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
     
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <script src="/Frontend/js/travel.js"></script>
    <style type="text/css">
        .n3-tour-type {
            border-bottom: 1px solid #f1f1f1;
            margin-bottom: 40px;    
            margin-top: 47px;
        }
        .fix1 {
	  
		  /*max-width: 100%;*/
		  overflow: visible;
		  position: fixed !important;
		  top: 0;
		  width: 100%;
		  z-index: 999;
		  background: #fff;
		  left:0;
		  margin:0;
		  /*margin-left: -45px;*/
		}
    </style>
   
  
   <!--  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="owlcarousel/owl.carousel.min.js"></script> -->

    <?php  

        $banner = App\Models\Banner::all();

        $destination = App\Models\city::orderBy('id', 'asc')
               ->take(4)->get();

        $select = App\Models\whySelect::orderBy('id', 'asc')
               ->take(6)->get();

        $tour = App\Models\Tour::get();     

                
        $now = \Carbon\Carbon::now();



       
    ?>
    
    
</head>

<body>
   
    <div id="fb-root"></div>


    <!-- old -->
    <div class="a" id="che" searchid="tttc"></div>
    
<div class="n3-header">
    <div class="h-top">
        <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="area-info">
                <div class="phone-support">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                        <div class="f-left">
                            <span class="hidden-xs">Hotline:</span> <span class="num-color">1900 1839</span>
                        </div>
                        <div class="f-left" style="margin-top:-2px;">
                            <img src="/Frontend/travel-image/icon/i-arrow-hl.png" style="margin-left: 8px;" alt="arrow">
                        </div>
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <table style="width: 100%">
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="city-name">Hồ Ch&#237; Minh</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 53%;">
                                            Tổng đ&#224;i: <br>
                                            Du lịch trong nước: <br>
                                            Du lịch nước ngo&#224;i:<br>
                                            Dịch vụ kh&#225;ch h&#224;ng:
                                        </td>
                                        <td class="whitetext">
                                            <strong>(028)3822.8898</strong><br>
                                            <strong>0938.301.399</strong><br>
                                            <strong>0938.301.388</strong><br>
                                            <strong>0938.301.234</strong>
                                        </td>
                                        <td>
                                            &nbsp;&nbsp;<br>
                                            <a href="skype:fit.dltn?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:fit.dlnn?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:online.cskh?chat"><i class="iconT-skype"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="city-name">Chi Nh&#225;nh H&#224; Nội</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 53%;">
                                            Du lịch trong nước: <br>
                                            Du lịch nước ngo&#224;i:<br>
                                            Dịch vụ kh&#225;ch h&#224;ng:
                                        </td>
                                        <td class="whitetext">
                                            <strong>0989.370.033</strong><br>
                                            <strong>0983.160.022</strong><br>
                                            <strong>0938.301.234</strong>
                                        </td>
                                        <td>
                                            <a href="skype:fitdltn.hanoi?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:fitdlnn.hanoi?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:online.cskh?chat"><i class="iconT-skype"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="city-name">Chi Nh&#225;nh Đ&#224; Nẵng</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 53%;">
                                            Du lịch trong nước: <br>
                                            Du lịch nước ngo&#224;i:<br>
                                            Dịch vụ kh&#225;ch h&#224;ng:
                                        </td>
                                        <td class="whitetext">
                                            <strong>0905.173.331</strong><br>
                                            <strong>0932.472.310</strong><br>
                                            <strong>0938.301.234</strong>
                                        </td>
                                        <td>
                                            <a href="skype:fitdltn.danang?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:fitdlnn.danang?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:online.cskh?chat"><i class="iconT-skype"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="city-name mauchudao">Chi Nh&#225;nh Cần Thơ</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 53%;">
                                            Du lịch trong nước: <br>
                                            Du lịch nước ngo&#224;i:<br>
                                            Dịch vụ kh&#225;ch h&#224;ng:
                                        </td>
                                        <td class="whitetext">
                                            <strong>0939 05 95 96</strong><br>
                                            <strong>0903.114.664</strong><br>
                                            <strong>0938.301.234</strong>
                                        </td>
                                        <td>
                                            <a href="skype:fitdltn.cantho?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:fitdlnn.cantho?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:online.cskh?chat"><i class="iconT-skype"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="city-name mauchudao">Chi Nh&#225;nh Hải Ph&#242;ng</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 53%;">
                                            Du lịch trong nước: <br>
                                            Du lịch nước ngo&#224;i:<br>
                                            Dịch vụ kh&#225;ch h&#224;ng:
                                        </td>
                                        <td class="whitetext">
                                            <strong>0936.900.095</strong><br>
                                            <strong>0936.900.085</strong><br>
                                            <strong>0938.301.234</strong>
                                        </td>
                                        <td>
                                            <a href="skype:fitdltn.haiphong?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:fitdlnn.haiphong?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:online.cskh?chat"><i class="iconT-skype"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="city-name mauchudao">Chi Nh&#225;nh Nha Trang</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 53%;">
                                            Du lịch trong nước: <br>
                                            Du lịch nước ngo&#224;i:<br>
                                            Dịch vụ kh&#225;ch h&#224;ng:
                                        </td>
                                        <td class="whitetext">
                                            <strong>&lrm;&lrm;093.1616.555</strong><br>
                                            <strong>0988.608.286</strong><br>
                                            <strong>0938.301.234</strong>
                                        </td>
                                        <td>
                                            <a href="skype:fitdltn.nhatrang?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:fitdlnn.nhatrang?chat"><i class="iconT-skype"></i></a><br>
                                            <a href="skype:online.cskh?chat"><i class="iconT-skype"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8">
            <div class="area-info">
                <div class="f-right nav-top-mini hidden-lg hidden-md">
                    <div class="i-menu text-right">
                        <div><i class="fa fa-bars fa-lg"></i></div>
                    </div>
                    <ul class="nav-top" style="display: none;">
                        <li class="hidden-sm hidden-xs">
                            <a href="/">Du lịch</a>
                            <ul class="sub-menu">
                                <li><a href="/du-lich-viet-nam.aspx">Du lịch trong nước</a></li>
                                <li><a href="/du-lich-nuoc-ngoai.aspx">Du lịch nước ngo&#224;i</a></li>
                                <li><a href="https://tripu.vn/vi/tours" target="_blank" rel="nofollow">Du lịch tự chọn</a></li>
                                <li><a href="http://vscc.edu.vn/" target="_blank" rel="nofollow">Du học</a></li>
                            </ul>
                        </li>
                        <li class="hidden-lg hidden-md"><a href="/du-lich-viet-nam.aspx">Du lịch trong nước</a></li>
                        <li class="hidden-lg hidden-md"><a href="/du-lich-nuoc-ngoai.aspx">Du lịch nước ngo&#224;i</a></li>
                        <li class="hidden-lg hidden-md"><a href="https://tripu.vn/vi/tours" target="_blank" rel="nofollow">Du lịch tự chọn</a></li>
                        <li class="hidden-lg hidden-md"><a href="http://vscc.edu.vn/" target="_blank" rel="nofollow">Du học</a></li>
                        <li><a href="https://tripu.vn/vi/hotels" target="_blank" rel="nofollow">Kh&#225;ch sạn</a></li>
                        <!-- <li class="hidden-sm hidden-xs">
                            <a href="http://www.worldtrans.vn/" target="_blank" rel="nofollow">Vận chuyển</a>
                            <ul class="sub-menu">
                                <li><a href="http://car4rent.com/" target="_blank" rel="nofollow">Thu&#234; xe</a></li>
                                <li><a href="http://www.worldtrans.vn/" target="_blank" rel="nofollow">V&#233; m&#225;y bay</a></li>
                            </ul> -->
                        </li>
                        <li class="hidden-lg hidden-md"><a href="http://car4rent.com/" target="_blank" rel="nofollow">Thu&#234; xe</a></li>
                        <li class="hidden-lg hidden-md"><a href="http://www.worldtrans.vn/" target="_blank" rel="nofollow">V&#233; m&#225;y bay</a></li>
                        <li class="hidden-sm hidden-xs">
                            <a href="/tin-tuc-du-lich.aspx">Tin tức</a>
                            <ul class="sub-menu">
                                <li><a href="/tin-tuc-du-lich.aspx">Tin tức</a></li>
                                <li><a href="/du-lich-bang-hinh-anh.aspx">Cẩm nang du lịch</a></li>
                                <li><a href="/kinh-nghiem-du-lich.aspx">Kinh nghiệm du lịch</a></li>
                                <li><a href="/thong-tin-visa.aspx">Th&#244;ng tin visa</a></li>
                            </ul>
                        </li>
                        <li class="hidden-lg hidden-md"><a href="/tin-tuc-du-lich.aspx">Tin tức</a></li>
                        <li class="hidden-lg hidden-md"><a href="/du-lich-bang-hinh-anh.aspx">Cẩm nang du lịch</a></li>
                        <li class="hidden-lg hidden-md"><a href="/kinh-nghiem-du-lich.aspx">Kinh nghiệm du lịch</a></li>
                        <li class="hidden-lg hidden-md"><a href="/thong-tin-visa.aspx">Th&#244;ng tin visa</a></li>
                        <li class="hidden-sm hidden-xs">
                            <a href="/promotion">Khuyến mại</a>
                            <ul class="sub-menu">
                                <li><a href="/tin-tuc-du-lich/khuyen-mai-thu-2019-di-tron-the-gian-thu-vang-hen-uoc-tan-huong-niem-vui-du-lich-mua-thu-v12980.aspx">Khuyến mại Thu 2019</a></li>
                                <li><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-the-trong-tay-cham-ngay-nhat-ban-v12982.aspx">Khuyến mại thẻ JCB</a></li>
                                <li><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-hoan-tien-cung-vietravel-vpbank-v12983.aspx">Khuyến mại thẻ VPBank</a></li>
                                <li><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-vnpay-qr-thu-2019-v12984.aspx">Khuyến mại VNPay</a></li>
                                <li><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-cung-sacombank-v12985.aspx">Khuyến mại Sacombank</a></li>
                                <li><a href="/tin-tuc-du-lich/mua-tour-tra-cham-o-lai-suat-v11921.aspx">Mua tour trả chậm 0%</a></li>
                            </ul>
                        </li>
                        <li class="hidden-lg hidden-md"><a href="/tin-tuc-du-lich/khuyen-mai-thu-2019-di-tron-the-gian-thu-vang-hen-uoc-tan-huong-niem-vui-du-lich-mua-thu-v12980.aspx">Khuyến mại Thu 2019</a></li>
                        <li class="hidden-lg hidden-md"><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-the-trong-tay-cham-ngay-nhat-ban-v12982.aspx">Khuyến mại thẻ JCB</a></li>
                        <li class="hidden-lg hidden-md"><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-hoan-tien-cung-vietravel-vpbank-v12983.aspx">Khuyến mại thẻ VPBank</a></li>
                        <li class="hidden-lg hidden-md"><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-vnpay-qr-thu-2019-v12984.aspx">Khuyến mại VNPay</a></li>
                        <li class="hidden-lg hidden-md"><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-cung-sacombank-v12985.aspx">Khuyến mại Sacombank</a></li>
                        <li class="hidden-lg hidden-md"><a href="/tin-tuc-du-lich/mua-tour-tra-cham-o-lai-suat-v11921.aspx">Mua tour trả chậm 0%</a></li>
                        
                        <li><a href="https://vietravelplus.com/" target="_blank" rel="nofollow">VietravelPlus</a></li>
                        <li><a href="/contact">Li&#234;n hệ</a></li>
                    </ul>
                </div>
                <div class="f-right h-line hidden-lg hidden-md">
                    <img src="/Frontend/travel-image/icon/h-line.png" alt="line">
                </div>
                <div class="f-right lang-info">
                    <div class="obj pos-relative">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/Frontend/travel-image/icon/vn.png" alt="Vietnamese">
                                <span style="padding-left: 5px;" class="hidden-xs">VN</span>
                        </div>
                        <ul class="dropdown-menu">
                            <li style="border-bottom: 1px dashed #ccc;"><a href="https://travel.com.vn"><strong class="mauchudao">VN</strong> - Tiếng Việt</a></li>
                            <li><a href="https://en.travel.com.vn"><strong class="mauchudao">EN</strong> - Tiếng Anh</a></li>
                        </ul>
                    </div>
                </div>
                <div class="f-right h-line">
                    <img src="/Frontend/travel-image/icon/h-line.png" alt="line">
                </div>
                
                <div class="f-right h-line">
                    <img src="/Frontend/travel-image/icon/h-line.png" alt="line">
                </div>

                
                <div class="f-right cart-info ">
                    <div class="obj pos-relative dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/Frontend/travel-image/icon/i-cart.png" alt="line">
                            <div class="frame-cart">
                                <div class="circle-num">
                                    <span class="num">{{ count(session('key'))}}</span>
                                </div>
                            </div>
                        </a>

                        <ul class="dropdown-menu">
                            @if(!empty(session('key')))

                            @foreach(session('key') as $tour)
                                <?php  $image = App\Models\imageTour::where('imageTour_id', $tour->id)->first();  ?>
                            <div class="row item">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="{{ route('tourDetail', ['id' => $tour->url_rewrite]) }}">

                                        <img src="{{ isset($image->image) ? $image->image : '/images/no-image.png' }}" alt="{!! $tour->Name !!}" class="img-responsive pic-cart-h">
                                    </a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <a href="{{ route('tourDetail', ['id' => $tour->url_rewrite]) }}">

                                    {{ $tour->Name }} <a href="#" class="morelink">...</a></span></a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </ul>
                    </div>

                   
                </div>

                <!-- <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown Example
               </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </div> -->


                <div class="f-right hidden-xs">
                    <img src="/Frontend/travel-image/icon/h-line.png" alt="line">
                </div>
                <div class="f-right search-mini hidden-xs">
                    <div class="obj pos-relative">
                        <form action="{{ route('find') }}" method="get">
                            @csrf
                            <input type="text" class="txt-search form-control input-md " name="search" placeholder="Tour du lịch, Điểm đến...">

                            <div class="btn-f">
                                <button type="submit" id="btnSearchTour" style="background-color:rgb(241, 241, 241);border:none;height:40px;">
                                    <img src="{{ asset('Frontend/Content/ThemeHe/img/i-search-mini.png')}} " alt="search">
                                </button>
                            </div>
                        </form>                    
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="h-bot">
        <div class="container">
            <div class="row" id="menu-fixed">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <a href="/">
                        <img src="/Frontend/travel-image/logo.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-8 hidden-sm col-xs-12">
                    <nav class="menu hidden-xs">
                        <ul>

                            <?php   

                                $menuLG  =  App\Models\Menu::all();


                            ?>

                            @foreach ($menuLG as $menu)    
                            <li class="hidden-xs">
                                <a href="{!! $menu->Link !!}"> {{  $menu->Name }} </a>
                                <!-- <ul class="sub-menu"> menu con lg
                                    <li><a href="/du-lich-viet-nam.aspx">Du lịch trong nước</a></li>
                                    <li><a href="/du-lich-nuoc-ngoai.aspx">Du lịch nước ngo&#224;i</a></li>
                                    <li><a href="https://tripu.vn/vi/tours" target="_blank" rel="nofollow">Du lịch tự chọn</a></li>
                                    <li><a href="http://vscc.edu.vn/" target="_blank" rel="nofollow">Du học</a></li>
                                </ul> -->
                            </li>



                            @endforeach
                            <li class="hidden-xs"><a href="https://www.fareastour.com/"> Fareastour </a></li>
                            
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/du-lich-viet-nam.aspx">Du lịch trong nước</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/du-lich-nuoc-ngoai.aspx">Du lịch nước ngo&#224;i</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="https://tripu.vn/vi/tours" target="_blank" rel="nofollow">Du lịch tự chọn</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="http://vscc.edu.vn/" target="_blank" rel="nofollow">Du học</a></li>
                           <!--  <li><a href="https://tripu.vn/vi/hotels" target="_blank" rel="nofollow">Kh&#225;ch sạn</a></li> -->
                            <!-- <li class="hidden-xs">
                                <a href="http://www.worldtrans.vn/" target="_blank" rel="nofollow">Vận chuyển</a>
                                <ul class="sub-menu">
                                    <li><a href="http://car4rent.com/" target="_blank" rel="nofollow">Thu&#234; xe</a></li>
                                    <li><a href="http://www.worldtrans.vn/" target="_blank" rel="nofollow">V&#233; m&#225;y bay</a></li>
                                </ul>
                            </li> -->
                            <li class="hidden-lg hidden-md hidden-sm"><a href="http://car4rent.com/" target="_blank" rel="nofollow">Thu&#234; xe</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="http://www.worldtrans.vn/" target="_blank" rel="nofollow">V&#233; m&#225;y bay</a></li>
                            <!-- <li class="hidden-xs">
                                <a href="/tin-tuc">Tin tức</a>
                                <ul class="sub-menu">
                                    <li><a href="/tin-tuc-du-lich.aspx">Tin tức</a></li>
                                    <li><a href="/du-lich-bang-hinh-anh.aspx">Cẩm nang du lịch</a></li>
                                    <li><a href="/kinh-nghiem-du-lich.aspx">Kinh nghiệm du lịch</a></li>
                                    <li><a href="/thong-tin-visa.aspx">Th&#244;ng tin visa</a></li>
                                </ul>
                            </li> -->
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/tin-tuc-du-lich.aspx">Tin tức</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/du-lich-bang-hinh-anh.aspx">Cẩm nang du lịch</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/kinh-nghiem-du-lich.aspx">Kinh nghiệm du lịch</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/thong-tin-visa.aspx">Th&#244;ng tin visa</a></li>
                            
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/tin-tuc-du-lich/khuyen-mai-thu-2019-di-tron-the-gian-thu-vang-hen-uoc-tan-huong-niem-vui-du-lich-mua-thu-v12980.aspx">Khuyến mại Thu 2019</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-the-trong-tay-cham-ngay-nhat-ban-v12982.aspx">Khuyến mại thẻ JCB</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-hoan-tien-cung-vietravel-vpbank-v12983.aspx">Khuyến mại thẻ VPBank</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-vnpay-qr-thu-2019-v12984.aspx">Khuyến mại VNPay</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/tin-tuc-du-lich/the-le-chuong-trinh-khuyen-mai-cung-sacombank-v12985.aspx">Khuyến mại Sacombank</a></li>
                            <li class="hidden-lg hidden-md hidden-sm"><a href="/tin-tuc-du-lich/mua-tour-tra-cham-o-lai-suat-v11921.aspx">Mua tour trả chậm 0%</a></li>

                           <!--  <li><a href="https://www.fareastour.com/" target="_blank" rel="nofollow">Fareastour</a></li>
                            <li><a href="/contact">Li&#234;n hệ</a></li> -->
                        </ul>
                    </nav>
                    <div class="search-mini-s pos-relative hidden-lg hidden-md hidden-sm">
                        <form action="/Tour/SearchToursByDestinationChild" method="post">
                            <input name="__RequestVerificationToken" type="hidden" value="iKOEkHVU4G6PYWFjkii6FzbicPapvjoJ8I1F49frA3HsB9JZpymRzrrukFlY8NS9ZkmieFKmmiG0pyr6-PrHwDuj7Ew81k9swh2S65W75bE1" />                 
                            <input type="text" class="txt-search form-control input-md " name="" placeholder="Tour du lịch, Điểm đến...">
                            <div class="btn-f">
                                <button type="submit" onclick="ga('event','SearchTop', 'SearchTopClick', 'keywords');" id="btnSearchTour" style="background-color:white;border:none;">
                                    <img src="{{ asset('Frontend/Content/ThemeHe/img/i-search-mini.png')}}" alt="search">
                                </button>
                            </div>
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div id="dangnhap" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ĐĂNG NHẬP</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mg-bot15">
                        <div class="input-container">
                            <i class="fas fa-envelope icon"></i>
                            <input class="input-field" id="EmailLogin" name="EmailLogin" placeholder="Email" type="email" value="" />
                        </div>
                    </div>
                    <div class="col-md-12 mg-bot15">
                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" id="PasswordLogin" name="PasswordLogin" placeholder="Mật khẩu" type="password" value="" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            Bạn chưa c&#243; t&#224;i khoản? <a href="#" data-toggle="modal" data-target="#dangky">Đăng k&#253; ngay ho&#224;n to&#224;n miễn ph&#237;</a><br>
                            Qu&#234;n mật khẩu? <a href="#" data-toggle="modal" data-target="#laymatkhau">Lấy lại mật khẩu</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-md btn-default" onclick="LoginAccount();">Đăng nhập&nbsp;&nbsp;<i class="fas fa-sign-in-alt" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>

<div id="dangky" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ĐĂNG K&#221; TH&#192;NH VI&#202;N</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mg-bot15">
                        <div class="input-container">
                            <i class="fas fa-envelope icon"></i>
                            <input class="input-field" id="EmailRegister" name="EmailRegister" placeholder="Email" type="email" value="" />
                        </div>
                    </div>
                    <div class="col-md-12 mg-bot15">
                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" id="PasswordRegister" name="PasswordRegister" placeholder="Mật khẩu" type="password" value="" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input class="input-field" id="FullnameRegister" name="FullnameRegister" placeholder="Họ tên" type="text" value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-md btn-default" onclick="RegisterAccount();">Đăng k&#253;&nbsp;&nbsp;<i class="fas fa-sign-in-alt" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>
<div id="laymatkhau" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">QU&#202;N MẬT KHẨU?</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mg-bot15">
                        <div class="input-container">
                            <i class="fas fa-envelope icon"></i>
                            <input class="input-field" id="EmailPassword" name="EmailPassword" placeholder="Email" type="email" value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-md btn-default" onclick="ForgotPasswordAccount();">Lấy lại mật khẩu&nbsp;&nbsp;<i class="fas fa-sign-in-alt" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div> -->



<div class="n3-slideshow hidden-xs">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators hidden">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel1" data-slide-to="2" class=""></li>
                <li data-target="#myCarousel1" data-slide-to="3" class=""></li>
                <li data-target="#myCarousel1" data-slide-to="4" class=""></li>
                <li data-target="#myCarousel1" data-slide-to="5" class=""></li>
        </ol>
        <!-- Wrapper for slides -->

        <div class="carousel-inner">
            @if(!empty($banner))
                @foreach($banner as $key=>$banners)
                <div class="item {{ ($key==0)?'active':'' }}">
                    <a href='#' title='{!!  $banners->name !!}'>
                        
                        <img alt="{!!  $banners->name !!}" src="{{ $banners->image }}" />
                        
                    </a>
                </div>
                @endforeach
            @endif    
        </div>



        <!-- Left and right controls -->
        <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right">
                 <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="n3-form-search" style="z-index: initial; position: initial; background: rgb(241, 241, 241);">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="frame-search">
                    <div class="o-dl dltn">
                        <i class="iconT-i-c1 mg-b"></i>
                        <p class="text1">T&#236;m tour</p>
                        <p class="text2 text-dltn">Trong nước</p>
                    </div>
                    <div class="o-dl dlnn">
                        <i class="iconT-i-c2 mg-b"></i>
                        <p class="text1">T&#236;m tour</p>
                        <p class="text2 text-dlnn">Nước ngo&#224;i</p>
                    </div>
                    <div class="o-dl dltc1 hidden-xs">
                        <a href="https://tripu.vn/vi/tours" target="_blank">
                            <i class="iconT-i-c3 mg-b"></i>
                            <p class="text1">Du lịch</p>
                            <p class="text2 text-dltc">Tự chọn</p>
                        </a>
                    </div>
                    <div class="o-dl tttc">
                        <i class="iconT-i-c4 mg-b"></i>
                        <p class="text1">T&#236;m kiếm</p>
                        <p class="text2 text-dltt">Booking</p>
                    </div>
                    <div class="o-dl hvtt">
                        <a href="http://vietravelplus.com/" target="_blank">
                            <i class="iconT-i-c5 mg-b"></i>
                            <p class="text1">Hội vi&#234;n</p>
                            <p class="text2 text-hvtt">Th&#226;n thiết</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-info-search bg-dltn pos-relative" style="display: none;">
    <form action="/Tour/SearchFirst" method="post"><input name="__RequestVerificationToken" type="hidden" value="G7shWWrAlWNLC3B9RAs2QpyDj1x3_prCvcay5AZo7N_UNvXNx_Bh_2qsHDepNkXJl8NqGy7UqQLXHdLNDovBiGzYsbbhg6-9eWhwyj7Ko641" />        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="triangle-up"></div>
                    <div class="pad-tb">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Nơi khởi h&#224;nh:</label>
                                    <select class="form-control input-md" id="departureID" name="DepartureId" style="padding-left:5px !important;"></select>
                                    <input type="hidden" name="TourTypeId" value="1" />
                                    <input type="hidden" name="ConCho" value="-1" />
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Nơi đến:</label>
                                    <select class="form-control input-md" id="group_id" name="GroupId" style="padding-left:5px !important;"></select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Ng&#224;y khởi h&#224;nh:</label>
                                    <div class="pos-relative">
                                        <input autocomplete="off" class="form-control input-md" id="departure_date" name="DepartureDate" placeholder="22/10/2019" type="text" value="22/10/2019" />
                                        <span class="i-calendar">
                                            <i class="fa fa-calendar-alt fa-lg"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">D&#242;ng tour:</label>
                                    <select class="form-control input-md" id="DongTour" name="DongTour" style="padding-left:5px !important;"><option value="0">Tất cả</option>
                                    <option value="1">Cao cấp</option>
                                    <option value="2">Ti&#234;u chuẩn</option>
                                    <option value="3">Tiết kiệm</option>
                                    <option value="4">Gi&#225; Tốt</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Gi&#225;:</label>
                                    <select class="form-control input-md" id="priceID" name="PriceId" style="padding-left:5px !important;"></select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-search btn-mg-t" onclick="return checkSearch('departureID'); ga('event','Search', 'SearchClick', 'keywords');"><i class="fa fa-search"></i>&nbsp;&nbsp;T&#236;m kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>    
</div>
<!-- <div class="form-info-search bg-dlnn pos-relative" style="display: none;">
    <form action="/Tour/SearchFirst" method="post"><input name="__RequestVerificationToken" type="hidden" value="Z_5yUWKEfVf3C7Qwm3YPzXlO_wYAr8eNo8-4zybONAjgxiP_kl7LBXxc2WFu9qsSamfatMIFLANaeOTxBho6gmB3r3fMyOjoEQecLTnhI7s1" />        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="triangle-up"></div>
                    <div class="pad-tb">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Nơi khởi h&#224;nh:</label>
                                    <select class="form-control input-md" id="departureIDob" name="DepartureId" style="padding-left:5px !important;"></select>
                                    <input type="hidden" name="TourTypeId" value="2" />
                                    <input type="hidden" name="ConCho" value="-1" />
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Nơi đến:</label>
                                    <select class="form-control input-md" id="group_idob" name="GroupId" style="padding-left:5px !important;"></select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Ng&#224;y khởi h&#224;nh:</label>
                                    <div class="pos-relative">
                                        <input autocomplete="off" class="form-control" id="departure_dateob" name="DepartureDate" placeholder="22/10/2019" type="text" value="22/10/2019" />
                                        <span class="i-calendar">
                                            <i class="far fa-calendar-alt fa-lg"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">D&#242;ng tour:</label>
                                    <select class="form-control input-md" id="DongTourob" name="DongTour" style="padding-left:5px !important;">
                                        <option value="0">Tất cả</option>
                                        <option value="1">Cao cấp</option>
                                        <option value="2">Ti&#234;u chuẩn</option>
                                        <option value="3">Tiết kiệm</option>
                                        <option value="4">Gi&#225; Tốt</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Gi&#225;:</label>
                                    <select class="form-control input-md" id="priceIDob" name="PriceId" style="padding-left:5px !important;"></select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-search btn-mg-t" onclick="return checkSearch('departureIDob'); ga('event','Search', 'SearchClick', 'keywords');"><i class="fas fa-search"></i>&nbsp;&nbsp;T&#236;m kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   
 </div>
<div class="form-info-search bg-dltc pos-relative" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="triangle-up"></div>
                <div class="pad-tb">
                    <div class="row">
                        <div class="col-lg-2 col-md-1 hidden-sm col-xs-12">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="form-group service-type">
                                <label class="mg-b">Loại dịch vụ:</label>
                                <select class="form-control input-md">
                                    <option>Land tour</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label class="mg-b">Loại tour:</label>
                                <select class="form-control input-md">
                                    <option>Trong nước</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label class="mg-b">Nơi đến:</label>
                                <select class="form-control input-md">
                                    <option>Nha Trang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-md btn-search btn-mg-t"><i class="fas fa-search"></i>&nbsp;&nbsp;Tìm kiếm</button>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-1 hidden-sm col-xs-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-info-search bg-dltt pos-relative" style="display: none;">
    <form action="/Booking/SearchBookingFirst" method="post">        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="triangle-up"></div>
                    <div class="pad-tb">
                        <div class="row">
                            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-12">
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <label class="mg-b">Số booking:</label>
                                    <input type="text" id="pin_code" name="pin_code" class="form-control input-md" placeholder="Số booking">
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-search btn-mg-t"><i class="fas fa-search"></i>&nbsp;&nbsp;T&#236;m kiếm</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>    
</div>
</div> -->

<?php  

    $groupTour  = App\Models\GroupTour::all();
?>

<div class="n3-tour-type">
    <div class="container">
        <div class="row">
            <div id="myCarousel-tourtype" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="0">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        @if(!empty($groupTour))
                        @foreach($groupTour as $logo)
                        <div class="col-md-2 col-sm-4 col-xs-6 mg-bot15">
                            <div class="item-tour-type">
                                <a href="{{ route('GroupTour',['id'=>$logo->url_rewrite] )}}" title="Cao cấp">
                                    <i class="iconT-premium img-responsive"></i>
                                    <p class="tourtype-name"> {{ $logo->Name  }} </p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @endif
                       <!--  <div class="col-md-2 col-sm-4 col-xs-6 mg-bot15">
                            <div class="item-tour-type">
                                <a href="/dong-tour/tour-tieu-chuan.aspx" title="Ti&#234;u chuẩn">
                                    <i class="iconT-deluxe img-responsive"></i>
                                    <p class="tourtype-name">Ti&#234;u chuẩn</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 mg-bot15">
                            <div class="item-tour-type">
                                <a href="/dong-tour/tour-tiet-kiem.aspx" title="Tiết kiệm">
                                    <i class="iconT-tietkiem img-responsive"></i>
                                    <p class="tourtype-name">Tiết kiệm</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 mg-bot15">
                            <div class="item-tour-type">
                                <a href="/dong-tour/tour-gia-soc.aspx" title="Gi&#225; Tốt">
                                    <i class="iconT-giasoc img-responsive"></i>
                                    <p class="tourtype-name">Gi&#225; Tốt</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 mg-bot15">
                            <div class="item-tour-type">
                                <a href="/tim-tour/b%E1%BA%A5t%20%C4%91%E1%BB%99ng%20s%E1%BA%A3n/ket-qua-tim-kiem.aspx?ConCho=1" title="Tour Bất Động Sản">
                                    <img src="/Frontend/travel-image/batdongsan.png" alt="Tour Bất Động Sản" class="img-responsive">
                                    <p class="tourtype-name">Tour Bất Động Sản</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 mg-bot15">
                            <div class="item-tour-type">
                                <a href="/tim-tour/1/2/2019-08-27/0/124/ket-qua.aspx">
                                    <i class="iconT-duthuyen img-responsive"></i>
                                    <p class="tourtype-name">Tour du thuyền</p>
                                </a>
                            </div>
                        </div> -->
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control hidden-xs" href="#myCarousel-tourtype" data-slide="prev">
                    <img class="chevron chevron-left" src="/Frontend/travel-image/icon/i-ac-left.png">
                </a>
                <a class="right carousel-control hidden-xs" href="#myCarousel-tourtype" data-slide="next">
                    <img class="chevron chevron-right" src="/Frontend/travel-image/icon/i-ac-right.png">
                </a>
            </div>
        </div>
    </div>
</div>
 
<!-- header chung -->

<!-- breadcrumb -->



@if(\Request::route()->getName() != 'home') 

@switch(\Request::route()->getName())
    @case("diadiem")
        <div class="n3-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="breadcrumb">
                            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">Địa điểm</span></a></span> » <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/dia-diem/{!! $city->url_rewrite  !!}" itemprop="url"><span itemprop="title">{!! $city->name !!}</span></a></span> »
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    @break

    @case("discount-tour")
        <div class="n3-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="breadcrumb">
                            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Home</span></a></span> » <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ route('discount-tour') }}" itemprop="url"><span itemprop="title">Ưu Đãi thanh toán trực tuyến</span></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @break

    @case("tin tuc")
        <div class="n3-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="breadcrumb">
                            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Home</span></a></span> » <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ route('tin tuc') }}" itemprop="url"><span itemprop="title">Tin Tức</span></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @break

    @case("time-tour")
        <div class="n3-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="breadcrumb">
                            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Home</span></a></span> » <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ route('time-tour') }}" itemprop="url"><span itemprop="title">Tour giờ chót</span></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @break    

    @case("tourDetail")
        <div class="n3-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 ">
                        <div class="breadcrumb">
                            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Home</span></a></span> » <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ route('tourDetail', ['id' => $tourId->url_rewrite]) }}" itemprop="url"><span itemprop="title"> {!! $tourId->Name !!} </span></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @break

    
    @case("newsDetail")
    <div class="n3-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="breadcrumb">
                        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Home</span></a>» <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ route('newsDetail', ['id' => $newsDetail->url_rewrite]) }}" itemprop="url"><span itemprop="title"> {!! $newsDetail->title !!} </span></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @default
@endswitch


@endif
<!-- breadcrumb -->

<!-- Phần Riêng -->
<!-- list-tour -->

@yield('content')

<!-- list-tour -->
<!-- end phần riêng -->

    <!-- other -->
<div class="container n3-other">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mg-bot30">
            <div class="frame-other-destination">
                <img src="/Frontend/travel-image/o-d1.jpg" class="img-responsive pic-o-dest" alt="Du lịch trong nước">
                <p class="other-name">Du lịch trong nước</p>
                <div class="list-destination">
                    <ul class="row">
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-ha-noi.aspx">H&#224; Nội</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-ha-long.aspx">Hạ Long</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-ninh-binh.aspx">Ninh B&#236;nh</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-quang-binh.aspx">Quảng B&#236;nh</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-lao-cai.aspx">L&#224;o Cai</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-da-nang.aspx">Đ&#224; Nẵng</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-qui-nhon.aspx">Qui Nhơn</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-nha-trang.aspx">Nha Trang</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-phan-thiet.aspx">Phan Thiết</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-da-lat.aspx">Đ&#224; Lạt</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-vung-tau.aspx">Vũng T&#224;u</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-can-tho.aspx">Cần Thơ</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-phu-quoc.aspx">Ph&#250; Quốc</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-ca-mau.aspx">C&#224; Mau</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-kien-giang.aspx">Ki&#234;n Giang</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-hue.aspx">Huế</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mg-bot30">
            <div class="frame-other-destination">
                <img src="/Frontend/travel-image/o-d2.jpg" class="img-responsive pic-o-dest" alt="Du lịch nước ngoài">
                <p class="other-name">Du lịch nước ngo&#224;i</p>
                <div class="list-destination">
                    <ul class="row">
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-phap.aspx">Ph&#225;p</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-nga.aspx">Nga</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-hoa-ky.aspx">Mỹ</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-brazil.aspx">Brazil</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-uc.aspx">&#218;c</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-new-zealand.aspx">New Zealand</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-nam-phi.aspx">Nam Phi</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-kenya.aspx">Kenya</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-campuchia.aspx">Campuchia</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-singapore.aspx">Singapore</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-thai-lan.aspx">Th&#225;i Lan</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-nhat-ban.aspx">Nhật Bản</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-han-quoc.aspx">H&#224;n Quốc</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-trung-quoc.aspx">Trung Quốc</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-hong-kong-macau.aspx">Hồng K&#244;ng</a></li>
                        <li class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><a href="/du-lich-dubai.aspx">Dubai</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mg-bot30">
            <div class="frame-other">
                <div class="tour-type-s">
                    <p class="other-name">D&#242;ng tour</p>
                    <div class="list-tour-type">
                        <div class="row">
                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12 mg-bot5">
                                <a href="/dong-tour/tour-cao-cap.aspx" title="Cao cấp">
                                    <div class="f-left"><i class="iconT-i-star"></i></div>
                                    <div class="f-left" style="padding-top: 3px;margin-left: 10px;">Cao cấp</div>
                                    <div class="clear"></div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12 mg-bot5">
                                <a href="/dong-tour/tour-tieu-chuan.aspx" title="Ti&#234;u chuẩn">
                                    <div class="f-left"><i class="iconT-i-star"></i></div>
                                    <div class="f-left" style="padding-top: 3px;margin-left: 10px;">Ti&#234;u chuẩn</div>
                                    <div class="clear"></div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12 mg-bot5">
                                <a href="/dong-tour/tour-tiet-kiem.aspx" title="Tiết kiệm">
                                    <div class="f-left"><i class="iconT-i-star"></i></div>
                                    <div class="f-left" style="padding-top: 3px;margin-left: 10px;">Tiết kiệm</div>
                                    <div class="clear"></div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12 mg-bot5">
                                <a href="/dong-tour/tour-gia-soc.aspx" title="Gi&#225; Tốt">
                                    <div class="f-left"><i class="iconT-i-star"></i></div>
                                    <div class="f-left" style="padding-top: 3px;margin-left: 10px;">Gi&#225; Tốt</div>
                                    <div class="clear"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="other-mobile">
                    <p class="other-name">Ứng dụng di động</p>
                    <div class="app-info">
                        <p class="mg-bot15">Tải ứng dụng</p>
                        <div class="mg-bot15">
                            <div class="f-left gp"><a href="https://play.google.com/store/apps/details?id=vn.com.vietravel" target="_blank" rel="nofollow"><i class="iconT-gp"></i></a></div>
                            <div class="f-left l1"><img src="/Frontend/travel-image/icon/line.png" alt="line"></div>
                            <div class="f-left as"><a href="https://itunes.apple.com/us/app/vietravel/id623123001?l=vi&ls=1&mt=8" target="_blank" rel="nofollow"><i class="iconT-as"></i></a></div>
                            <div class="clear"></div>
                        </div>
                        <p class="mg-bot15">hoặc qu&#233;t QR-code</p>
                        <div>
                            <div class="f-left gp">
                                <a href="https://play.google.com/store/apps/details?id=vn.com.vietravel" target="_blank" rel="nofollow"><i class="iconT-q-gp"></i></a>
                                <p>Android</p>
                            </div>
                            <div class="f-left l2"><img src="/Frontend/travel-image/icon/line.png" alt="line"></div>
                            <div class="f-left as">
                                <a href="https://itunes.apple.com/us/app/vietravel/id623123001?l=vi&ls=1&mt=8" target="_blank" rel="nofollow"><i class="iconT-q-as"></i></a>
                                <p>iOS</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <img src="/Content/ThemeHe/img/bg-app.png" class="pic-bg-app hidden-xs" alt="app">
            </div>
        </div>
    </div>
</div>
<!-- other -->
<!-- footer -->
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
<!-- footer -->
<!-- social -->
<div id="social" class="follow-scroll-social hidden-sm hidden-xs">
    <div class="social-top">
        <a href="https://www.facebook.com/vietravel/" rel="nofollow" target="_blank" title="Facebook">
            <div class="facebook icon">
                <i class="fab fa-facebook-f"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/vietravel/" rel="nofollow" target="_blank" title="instagram">
            <div class="google icon">
                <i class="fab fa-instagram"></i>
            </div>
        </a>
        <a href="https://twitter.com/VietravelGroup" rel="nofollow" target="_blank" title="Twister">
            <div class="twister icon">
                <i class="fab fa-twitter"></i>
            </div>
        </a>
        <a href="https://www.youtube.com/channel/UCY4diIi4ZvrcZIfpLTTM11g" rel="nofollow" target="_blank" title="Youtube">
            <div class="youtube icon">
                <i class="fab fa-youtube"></i>
            </div>
        </a>
        <a href="https://travel.com.vn/huongdan/" target="_blank" title="Hướng dẫn">
            <div class="guide icon">
                <i class="fas fa-book"></i>
            </div>
        </a>
        <a href="http://m.me/vietravel" rel="nofollow" target="_blank" title="Facebook messenger">
            <div class="messenger icon">
                <i class="fab fa-facebook-messenger"></i>
            </div>
        </a>
    </div>
    <div class="social-bot show1">
    </div>
</div>

<style>
    .follow-scroll-splive {
     position: fixed;
     bottom: 10px;
     right: 15px;
   }
   .splive-top {
     width: 30px;
     height: 160px;
   }
</style>

<script language="javascript">
   
		jQuery(document).ready(function($) {
	        var $filter = $('#menu-fixed');
	        var $filterSpacer = $('<div />', {
	            "class": "abc",
	            "height": $filter.outerHeight()

	        });
	       
	 
	        if ($filter.height())
	        {
	            $(window).scroll(function ()
	            {
	                if (!$filter.hasClass('fix1') && $(window).scrollTop() > $filter.offset().top)
	                {	
	                    $filter.before($filterSpacer);
	                    $filter.addClass("fix1");
	                    

	                }

	                else if ($filter.hasClass('fix1')  && $(window).scrollTop() < $filterSpacer.offset().top)
	                {
	                    $filter.removeClass("fix1");
	                    $filterSpacer.remove();
	                }
	            });
	        }
	    });

    $(document).ready(function() {
        var dem = $('#times').html();
        // for (var i = 1; i <= parseInt(dem); i++) {
        //     var di  = parseInt($('#d'+i).html());
        //     var hi  = parseInt($('#h'+i).html());
        // }

        var h1 = parseInt($('#h1').html())
        var s  = parseInt($('#s1').html());
        
       
        // var d = parseInt($('#d').html());

        function start()
        {
            /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
            // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
            //  - giảm số phút xuống 1 đơn vị
            //  - thiết lập số giây lại 59

            if (s === -1){
                s = 59;
    
                for (var pi = 1; pi <=   parseInt(dem); pi++) {

                    var mpi = parseInt($('#m'+pi).html());
                    mpi -= 1;
                    document.getElementById('m'+pi).innerText = mpi;

                }
                
            }
                // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
                //  - giảm số giờ xuống 1 đơn vị
                //  - thiết lập số phút lại 59

                for (var th = 1; th <= parseInt(dem); th++) {
                    var pth = parseInt($('#m'+th).html());
                    var hth = parseInt($('#h'+th).html());
                    if (pth === -1) {
                        pth =59;
                        
                        hth-=1;
                        document.getElementById('h'+th).innerText = hth;
                        document.getElementById('m'+th).innerText = pth;

                    }
                }

                
           
            for (var k = 1; k <= parseInt(dem); k++) {
                var dk =  parseInt($('#d'+k).html());
                var hk =  parseInt($('#h'+k).html());
                // Nếu số giờ = -1 và d >0  lúc này: giảm d xuống 1 đơn vị và thiết lập lại số giờ bằng 23
                if (hk== -1 && dk>0) {
                    
                    dk    -= 1;
                    hk     = 23;
                    document.getElementById('d'+k).innerText = dk;
                    document.getElementById('h'+k).innerText = hk;
                }
            } 

            //thêm 0 vào giây khi giây <10
            if(s<10){
                s = "0"+s;
            }

            for (var zero = 1; zero <= parseInt(dem) ; zero++) {
                var mzero = $('#m'+zero).html();
                
            }
            /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
            timeout = setTimeout(function(){
                s--;
                start();
            }, 1000);
                // BƯỚC 1: HIỂN THỊ ĐỒNG HỒ



                for (var g = 1; g <= parseInt(dem) ; g++) {
                    document.getElementById('s'+g).innerText = s;
                    // document.getElementById('m'+g).innerText = m;
                    // thêm số 0 vào trước m s
                    var pg = parseInt($('#m'+g).html());
                    var gh = parseInt($('#h'+g).html());
                    if (pg <10) {
                        pg = "0"+pg;
                        document.getElementById('m'+g).innerText  = pg;
                    }
                    if (gh<10) {
                        gh = "0"+gh;
                        document.getElementById('h'+g).innerText  = gh;
                    }
                }

                
                
               
                    
                // ($('#d1').html() = m < 0? parseInt($('#d1').html()-1):$('#d1').html());
            }
        start();
    });
    
    
</script>
</body>
</html>