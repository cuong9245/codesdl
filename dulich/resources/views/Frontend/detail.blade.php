@extends('Frontend.master')

@section('content')
<?php  
    use \App\Http\Controllers\Frontend\TourController; 

    $ngaykhac = App\Models\Tour::where('Code', $tourId->Code)->get();

    // print_r($tourId->departureDay);
    if(count($ngaykhac)>1){
        foreach ($ngaykhac as $key) {
            $date[] = $key->departureDay;
        }
       
        $key = array_search($tourId->departureDay, $date);
        unset($date[$key]);

        foreach ($date as $ngaykhac2) {
            $ngay =  $ngaykhac2;
        }
    }    

    $amount = (int)$tourId->discountPrice*100;
?>

<style type="text/css">
    
    .red{
        color: #fc3400;
    }
    #booktour .modal-body{
        width: 100%;
        height: 500px;

    }

    .select-pay{
        color: red;
        background: yellow !important;
    }
    .cut-ttt{
        height:auto !important;
    }

</style>
<div class="container n3-tour-description mg-bot40" itemscope="" itemtype="http://data-vocabulary.org/Product">
    <div class="row">
        <div class="col-xs-12 mg-bot15">
            <h1 class="tour-name" itemprop="name"><a>{!! $tourId->Name !!}</a></h1>
            <!-- <span itemprop="brand" style="display: none;">Vietravel</span>
            <img itemprop="image" style="display: none;" src="https://travel.com.vn/Images/destination/tf_191101101558_660651.jpg" alt="Ân Thi - Phù Dung Trấn - Phượng Hoàng Cổ Trấn - Trương Gia Giới - Thiên Môn Sơn - Hoàng Long Động - Ân Thi (Khách sạn 5 sao, 6 Ngày 5 Đêm, Bay thẳng đến Ân Thi, Tour Mua Ngay)"> -->
            <div class="tour-code"><i class="fa fa-barcode"></i>{{ $tourId->Code }}</div>
        </div>


        <div class="slideshow-pt col-lg-8 col-md-12 col-sm-12 col-xs-12 pos-relative">
            @if(count($image)>0)
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">

                    @foreach($image as $key=>$img )
                        <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="slider {{ ($key == 0)?'active':''}} slide" id="slider{{ $key }}"></li>
                    @endforeach    
                        
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($image as $key=>$img )
                    <div class="items slider{{ $key }}  item {{($key == 0)?'active':''}}">
                        <img src="{{ $img->image }}" class="img-responsive pic-ss-pt">
                    </div>
                    @endforeach
                    
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control hidden" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control hidden" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
           

            @else
                <div class="items item ">
                    <img src="/images/no-image.png" class="img-responsive pic-ss-pt">
                </div>
             @endif
            <div class="frame-func">
                <a class="ic">
                    <i class="fa fa-heart" id="red-heart" data-target="{{ $tourId->id }}"></i>
                </a>
                <a target="_blank" class="ic " onclick=" window.print() ">
                    <i class="fa fa-print"></i>
                </a>
                
                <div class="clear"></div>
            </div>
            
        </div>
        <div class="info col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="frame-info pos-relative">
                <div class="sec1">
                    <div class="f-left frame-rating">
                        <div style="float:left;margin:8px 0px" data-tourid="272316f4-bce1-4e8c-a000-831cf987ecf2" class="rateit" data-rateit-value="4.47" data-rateit-resetable="false"><button id="rateit-reset-2" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-2" style="display: none;"></button><div id="rateit-range-2" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4.47" aria-readonly="false" style="width: 80px; height: 16px;"><div class="rateit-selected" style="height: 16px; width: 71.52px; display: block;"></div><div class="rateit-hover" style="height: 16px; width: 0px; display: none;"></div></div></div>
                        <div style="float: left; margin-top:8px" class="hidden-xs">
                            <span class="hreview-aggregate">
                                <span class="item">
                                    <span class="fn">
                                        <span class="rating"><span class="average"><strong>4.47</strong></span><strong>/<span class="best">5 </span></strong>trong <span class="votes"><strong>391</strong></span> Đánh giá<span class="summary"></span></span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="viewed">
                        <i class="fa fa-eye"></i>&nbsp;&nbsp;<span>286</span>&nbsp;&nbsp;
                        <i class="fa fa-thumbs-up" style="color: #777"></i>&nbsp;&nbsp;<span>126</span>&nbsp;&nbsp;
                        <i class="fa fa-comment" style="color: #777"></i>&nbsp;&nbsp;<span>0</span>
                    </div>
                </div>
                <div class="sec2">
                    <div class="row mg-bot10">
                        <div class="col-lg-4 col-md-2 col-sm-3 col-xs-6">Khởi hành:</div>
                        <div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
                            <div class="mg-bot-date">
                                {{ $tourId->departureDay }}

                                @if(count($ngaykhac)>1)


                                <div class="hide ngaykhaccode">{{ $ngay }}</div>
                                <span class="hidden-xs">
                                    <i class="fa fa-calendar-alt"></i>&nbsp;
                                    <a  class="b" data-toggle="modal" data-target="#exampleModalCenter">Ngày khác</a>
                                </span>

                                <script type="text/javascript">
                                    $(document).ready(function() {
                                         function stringToDate(_date,_format,_delimiter)
                                        {
                                            var formatLowerCase=_format.toLowerCase();
                                            var formatItems=formatLowerCase.split(_delimiter);
                                            var dateItems=_date.split(_delimiter);
                                            var monthIndex=formatItems.indexOf("mm");
                                            var dayIndex=formatItems.indexOf("dd");
                                            var yearIndex=formatItems.indexOf("yyyy");
                                            var month=parseInt(dateItems[monthIndex]);
                                            month-=1;
                                            var formatedDate = new Date(dateItems[yearIndex],month,dateItems[dayIndex]);
                                            return formatedDate;
                                        }

                                       
                                        var date = new Date();

                                        var ngaykhac =  $('.ngaykhaccode').html();

                                        // console.log(ngaykhac);

                                        var today = stringToDate(ngaykhac,"dd-MM-yyyy","-");
                                        // var today2 = stringToDate("30/12/2019","dd/MM/yyyy","/");

                                         $("#datepicker2").datepicker({
                                            dateformat: "dd-mm-yy",
                                            todayHighlight: true,
                                          
                                            
                                        });

                                         $( '#datepicker2').datepicker('setDate', today);
                                       
                                    });   

                                </script>
                                @endif
                            </div>

                            <!-- Modal ngày khác -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Ngày Khác</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="datepicker2"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- end Modal ngày khác -->

                            <div class="hidden-lg hidden-md hidden-sm">
                                <i class="fa fa-calendar-alt"></i>&nbsp;<a href="/danh-sach-tour/NNSGN4206/an-thi-phu-dung-tran-phuong-hoang-co-tran-truong-gia-gioi-thien-mon-son-hoang-long-dong-an-thi-khach-san-5-sao,-6-ngay-5-dem,-bay-thang-den-an-thi,-tour-mua-ngay.aspx" class="b">Ngày khác</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mg-bot10">
                        <div class="col-lg-4 col-md-2 col-sm-3 col-xs-6">Thời gian:</div>
                        <div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
                            {{ $tourId->Time }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-2 col-sm-3 col-xs-6" style="padding-right: 0px !important;">Nơi khởi hành:</div>
                        <div class="col-lg-8 col-md-10 col-sm-9 col-xs-6">
                            {{ $tourId->startPlace }}
                        </div>
                    </div>
                </div>
                <div class="sec3">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <div style="margin-bottom: 7px;" itemscope="" itemtype="http://schema.org/PriceSpecification">
                                    <span class="price" itemprop="price" content="14990000">{!! $tourId->discountPrice !!}</span>&nbsp;<span class="unit" itemprop="priceCurrency" content="VND">$</span>
                                </div>
                            <div>
                                <?php $sit = (int)$tourId->max-(int)$tourId->booked  ?>

                                Số chỗ còn nhận:
                                    <span class="sit">{{ $sit }}</span>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right">
                            <a href="#" class="btn btn-book1 btn-md"  data-toggle="modal" data-target="#booktour">Đặt ngay</a>
                        </div>

                        <!-- Modal booktour -->
                            <div class="modal fade" id="booktour" tabindex="-1" role="dialog" aria-labelledby="booktour" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Booktour  {!!  $tourId->Name  !!}</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/booktour" method="post" id="booktours">
                                                @csrf
                                                <div class="col-xs-12 mg-bot30">
                                                    <div class="title">THÔNG TIN LIÊN LẠC</div>
                                                </div>
                                                <div class="col-xs-12 form-input mg-bot30">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Họ tên (<span class="star">*</span>)</label>
                                                                <div>
                                                                    <input class="form-control" id="contact_name" name="contact_name" required="required" type="text" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Di động (<span class="star">*</span>)</label>
                                                                <div>
                                                                    <input class="form-control" id="mobilephone" name="mobilephone" onchange="CheckMobile();" onkeypress="return funCheckInt(event)" required="required" type="text" value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Địa chỉ</label>
                                                                <div>
                                                                    <input class="form-control" id="address" name="address" type="text" value="" required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Email (<span class="star">*</span>)</label>
                                                                <div>
                                                                    <input class="form-control" id="email" name="email" required="required" type="email" value="" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Điện thoại</label>
                                                                <div>
                                                                    <input class="form-control" id="phone" name="phone" onkeypress="return funCheckInt(event)" type="text" value="" required="required">
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 mg-bot15">
                                                                        <label>Người lớn</label>
                                                                        <div>
                                                                            <input class="form-control" id="adult" name="adult" onblur="javascript:clear_text(this);" onclick="javascript:show_text('Từ 12 tuổi trở lên',this)" onkeypress="return funCheckInt(event)" type="text" value="1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-3 col-xs-6  mg-bot15">
                                                                        <label>Trẻ em</label>
                                                                        <div>
                                                                            <input class="form-control" id="children" name="children" onblur="javascript:clear_text(this);" onclick="javascript:show_text('Từ 2 tuổi đến dưới 12 tuổi',this)" onkeypress="return funCheckInt(event)" type="text" value="0" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-3 col-xs-6 mg-bot15">
                                                                        <label>Trẻ nhỏ</label>
                                                                        <div>
                                                                            <input class="form-control" id="small_children" name="small_children" onblur="javascript:clear_text(this);" onclick="javascript:show_text('Dưới 2 tuổi',this)" onkeypress="return funCheckInt(event)" type="text" value="0" required="required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                                                        <label>Số khách</label>
                                                                        <div>
                                                                            <input class="form-control" id="guests" name="guests" readonly="readonly" type="text" value="1" required="required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Hình thức thanh toán</label>
                                                                <select  name="pay" class="select-pay">
                                                                    <option value="cash">Tiền mặt </option>
                                                                    <option value="online">Trực tuyến</option>
                                                                </select>

                                                            </div>

                                                            <div class="form-group  hide">
                                                                <input class="form-control" id="guests" name="amount" type="text" value="{!!  $tourId->discountPrice !!}">
                                                            </div>

                                                            <input type="hidden" name="vpc_TicketNo" value="{{ $_SERVER['REMOTE_ADDR'] }}" />
                                                                
                                                                <input type="hidden" name="vpc_Amount" value="{{ $amount }}" />
                                                                <input type="hidden" name="vpc_MerchTxnRef" value=" {{ microtime(false) }}?>" />
                                                                <input type="hidden" name="vpc_OrderInfo" value="tour_<?php echo date('ymdHis').rand(11,99) ?>" />
                                                                <input type="hidden" name="vpc_ReturnURL" value="http://catba.guidevoyagevietnamlaos.com/result" />
                                                                <input type="hidden" name="vpc_Version" value="2" />
                                                                <input type="hidden" name="vpc_Command" value="pay" />
                                                                <input type="hidden" name="vpc_Locale" value="en" />
                                                                <input type="hidden" name="virtualPaymentClientURL" value="https://onepay.vn/vpcpay/vpcpay.op" />
                                                                <input type="hidden" name="Title" value="FareastourTour"/>
                                                                <input type="hidden" name="tourId" value="{{ $tourId->id }}"/> 
                                                                
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Ghi chú</label>
                                                                <div>
                                                                    <textarea class="form-control" cols="20" id="note" name="note" rows="4"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                           <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- end Modal booktour -->
                    </div>
                </div>
                <!-- tour qr code -->
                <div class="sec0 hidden-lg hidden-md hidden-sm">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=NNSGN4206-003-080120BL-H-9&amp;choe=UTF-8" class="img-responsive " alt="QRCode - NNSGN4206-003-080120BL-H-9" style="width:50px;height:50px;">
                        </div>
                        <div class="col-xs-9">
                            <div style="font-weight: 400;line-height: 17px;">
                                Giảm <span style="color: red;font-weight: bold;">200,000đ/khách</span> khi mua tour qua ứng dụng di động
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tour qr code -->
                <div class="sec5">
                    <div style="margin-bottom: 8px;">Bạn cần hỗ trợ?</div>
                    <div>
                        <div class="f-left btn-s1">
                            <a href="https://webcall.talking.vn/frame-click-to-call/new?code=tCEZl1-MKPuA6JU-czVAScCb0pPkHmPt" onclick="javascript:window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=375,height=667');return false;" target="_blank">
                                    <img src="{{ asset('Frontend/Content/ThemeHe/img/btn-call1.png') }}" alt="phone">
                            </a>
                        </div>
                        <div class="f-left btn-s2" data-toggle="modal" data-target="#divTuVan" style="cursor:pointer;">
                            <img src="{{ asset('Frontend/Content/ThemeHe/img/btn-call2.png') }}" alt="phone">
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="bg-phone hidden-md hidden-sm hidden-xs">
                    <img src="{{ asset('Frontend/Content/ThemeHe/img/bg-phone.png')}}" alt="phone">
                </div>
            </div>
        </div>
    </div>
<div class="container n3-tour-detail">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <div class="menu-left mg-bot30">
                <div class="panel panel-default panel-side-menu">
                    <div class="panel-body panel-body-nav">
                        <div class="side-menu">
                            <ul class="list-unstyled">
                                <li id="cct" class="tab-chuongtrinhtour active">
                                    <a>
                                        <i class="fa fa-spinner"></i> &nbsp;&nbsp;
                                        <span>chương trình tour</span>
                                    </a>
                                </li>
                                <!-- <li class="tab-chitiettour" id="tabChiTiet">
                                    <a href="#">
                                        <i class="fa fa-list"></i> &nbsp;&nbsp;
                                        <span>Chi tiết tour</span>
                                    </a>
                                </li> -->
                                <li class="tab-luuy">
                                    <a>
                                        <i class="fa fa-exclamation-triangle"></i> &nbsp;&nbsp;
                                        <span>Lưu ý</span>
                                    </a>
                                </li>
                                <li class="tab-ngaykhac" id="tabNgayKhac">
                                    <a>
                                        <i class="fa fa-calendar-alt"></i> &nbsp;&nbsp;
                                        <span>Ngày khác</span>
                                    </a>
                                </li>
                               <!--  <li class="tab-ykien">
                                    <a href="#">
                                        <i class="fa fa-comments"></i> &nbsp;&nbsp;
                                        <span>Ý kiến khách hàng</span>
                                    </a>
                                </li> -->
                                <li class="tab-lienhe" id="tabLienHe">
                                    <a>
                                        <i class="fa fa-podcast"></i> &nbsp;&nbsp;
                                        <span>Liên hệ</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="title-lg">Dịch vụ đi kèm</div>
                <div class="frame-service">
                    <ul class="list-service">
                        <li>Bữa ăn theo chương trình</li>
                        <li>Bảo hiểm</li>
                        <li>Hướng dẫn viên</li>
                        <li>Vé tham quan</li>
                        <li>Vận chuyển</li>
                    </ul>
                </div>
            </div>
            <div class="mg-bot30 hidden-xs">
                <a href="/visa/khao-sat-visa.aspx">
                    <img src="{{ asset('Frontend/Content/ThemeHe/img/tylevisa.jpg') }}" alt="visa" class="img-responsive">
                </a>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="sec-info">
                <div class="chuongtrinhtour mg-bot30 mg-50">
                    <div class="title-lg">
                        <h2>chương trình tour</h2></div>
                    <div style="line-height: 20px; text-align: justify;padding:20px 20px 0px 20px">
                            {!! $tourId->Summary !!}
                    </div>
                    <div class="sec-content itinerary">
                        <div class="list">

                            @if(count($ProgramTour)>0)
                            @foreach($ProgramTour as $key =>$program)
                            <div class="list__item">
                                <div class="list__time">
                                    <div class="num">{{ $key+1 }}</div>
                                </div>
                                <div class="list__border"></div>
                                <div class="list__desc">
                                    <h3 class="font500 name"><img src="{{ asset('Frontend/Content/ThemeHe/img/i-marker.png') }}" alt="marker">{{ $program->title}} </h3>
                                    <div class="d1">

                                        <title></title>

                                        <div style="text-align: justify;">
                                            {!! $program->detail !!}
                                        </div>

                                    </div>
                                    <!-- <div class="an-hien ah1">
                                        <div class="hienra">
                                            <a href="#"> Xem thêm &nbsp;<i class="fa fa-arrow-down"></i></a>
                                        </div>
                                        <div class="andi" style="display: none;">
                                            <a href="#"> Ẩn đi &nbsp;<i class="fa fa-arrow-up"></i></a>
                                        </div>
                                    </div> -->
                                    <div class="border"></div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="clear"></div>
                        <div class="destination">
                            <div class="title"><img src="{{ asset('/Frontend/Content/ThemeHe/img/i-des.png') }}" alt="destination">&nbsp;&nbsp;Nơi đến</div>
                            <div class="row">

                                <?php 
                                    $places = App\Models\places::where('places_id', $tourId->id)->get();

                                ?>
                                @if(count($places)>0)

                                @foreach($places as $place)

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mg-bot30">
                                    <div class="pos-relative">
                                        <div>
                                            <img src="{{ $place->image }}" alt="{{ $place->name }}" class="img-responsive pic-nd">
                                            <div class="frame-item">
                                                <p class="des-name dot-dot cut-name" style="overflow-wrap: break-word;">{{ $place->name }}</p>
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
                <div class="chitiettour mg-bot30 mg-50" style="display: none;">
                    <div class="title-lg">
                        <h2>Chi tiết tour</h2></div>
                    <div class="sec-content tour-detail">
                        <div id="divThongTinVanChuyen"></div>
                        <div id="divThongTinKhachSan">
                        </div>

                        <div id="divThongTinHDV">
                        </div>
                        <div id="divThongTinHDVTien"></div>
                        <div class="info">
                            <div class="title">
                                <span class="hidden-xs"><img src="/Content/ThemeHe/img/i-info.png" alt="info">&nbsp;&nbsp;</span> Thông tin tập trung
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Ngày giờ tập trung</td>
                                                <td>
                                                    21/12/2019 04:30
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nơi tập trung
                                                </td>
                                                <td>
                                                    <span> Vietravel </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tour-price">
                            <div class="title">
                                <span class="hidden-xs"><img src="/Content/ThemeHe/img/i-tourprice.png" alt="tourprice">&nbsp;&nbsp;</span> Giá tour &amp; Phụ thu phòng đơn
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="bold">
                                                <td>Loại khách</td>
                                                <td>Giá tour</td>
                                                <td>Land tour</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-title="Loại khách">Người lớn (Từ 12 tuổi trở lên)</td>
                                                <td data-title="Giá tour">4,990,000<span> đ</span></td>
                                                <td data-title="Land tour">0 đ</td>
                                            </tr>
                                            <tr>
                                                <td data-title="Loại khách">Trẻ em (Từ 5 tuổi đến dưới 12 tuổi)</td>
                                                <td data-title="Giá tour">2,495,000<span> đ</span></td>
                                                <td data-title="Land tour">0 đ</td>
                                            </tr>
                                            <tr>
                                                <td data-title="Loại khách">Trẻ nhỏ (Từ 2 tuổi đến dưới 5 tuổi)</td>
                                                <td data-title="Giá tour">0<span> đ</span></td>
                                                <td data-title="Land tour">0 đ</td>
                                            </tr>
                                            <tr>
                                                <td data-title="Loại khách">Em bé (Dưới 2 tuổi)</td>
                                                <td data-title="Giá tour">0 đ</td>
                                                <td data-title="Land tour">0 đ</td>
                                            </tr>
                                            <tr style="color: #cd2c24">
                                                <td data-title="Loại khách">Phụ thu phòng đơn</td>
                                                <td data-title="Giá tour">2,500,000<span> đ</span></td>
                                                <td data-title="Land tour">0 đ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="note">
                            <div class="title">
                                <span class="hidden-xs">
                                    <img src="/Content/ThemeHe/img/i-note.png" alt="note">&nbsp;&nbsp;
                                </span> Ghi chú
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="note-content">
                                        Tổng đài tư vấn, đặt chỗ (08h đến 23h) : 1900 1839 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="luuy mg-bot30 mg-50" style="display: none;">
                    <div class="title-lg">
                        <h2>Lưu ý</h2></div>
                    <div class="sec-content attention">
                        {!! $tourId->note !!}

                    </div>
                    <div style="text-transform: uppercase;font-weight: 500;font-size: 16px;padding: 15px;">Thông tin:</div>
                    <div class="sec-content attention">

                        <title></title>

                    </div>
                </div>
                <div class="ngaykhac mg-bot30 mg-50" style="display: none;">
                    <div class="title-lg">
                        <h2>Ngày khác</h2></div>
                    <div class="sec-content other-day">
                        <div class="row hidden-xs">

                            <div id="datepicker"></div>

                           

                            <div style="margin: 15px 15px 0px 15px;">
                                <div style="float: left; width: 33%;">
                                    <div style="float:left;margin-right:10px;"><img src="{{ asset('Frontend\Content\ThemeHe\img\CurrentDay.jpg') }}" alt="Ngày hiện tại"></div>
                                    <div style="float:left;padding-top:3px;">Ngày hiện tại</div>
                                </div>

                                 <div id="datepicker1"></div>
                                <div style="float: left; width: 33%">
                                    <div style="float:left;margin-right:10px;"><img src="{{ asset('Frontend\Content\ThemeHe\img\DayOther.jpg') }}" alt="Ngày đã chọn"></div>
                                    <div style="float:left;padding-top:3px;">Ngày đã chọn</div>
                                </div>
                                
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ykien mg-bot30 mg-50" style="display: none;">
                    <!--Ý kiến khách hàng-->

                    <div class="title-lg">Ý KIẾN KHÁCH HÀNG (4)</div>
                    <div class="sec-content customer-idea">

                        <div id="comment-list">
                            <div class="per-ques mg-bot20">
                                <div class="mg-bot10">
                                    <div class="f-left hidden-xs">
                                        <div class="ques-avatar">Q</div>
                                    </div>
                                    <div class="f-left">
                                        <div style="margin-bottom: 8px;">
                                            <span class="name">
                                                Võ Tấn Phát
                                                <span class="hidden-xs">&nbsp;&nbsp;&nbsp;|</span>
                                            </span>
                                            <span class="ques-email hidden-xs">&nbsp;&nbsp;&nbsp;votanphatvn@icloud.com</span>
                                        </div>
                                        <div>02/06/2016 14:23</div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div>
                                    <div class="content">Đã đi tour xong. Nói chung là tuyệt vời HDV chu đáo nhiệt tình tận tâm Tài xế và phụ xe chuyên nghiệp Đoàn thì thân thiện, vui vẻ dễ hoà đồng Tuy nhiên TV trong xe và đầu nhạc hay bị vấp nên thay đổi tv khác Nếu đi luyên tuyến thì nên ở khách sạn 3* mặc dù chênh lệch vài trăm. Bổ sung do hôm nọ chưa ghi xong</div>
                                    <p class="btn-ans"><a data-toggle="modal" data-target="#divComment" onclick="LoadComment('3769')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Trả lời</a></p>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="per-ans frame-ans mg-bot30">
                                <div class="mg-bot10">
                                    <div class="f-left hidden-xs">
                                        <div class="ans-avatar">A</div>
                                    </div>
                                    <div class="f-left">
                                        <div style="margin-bottom: 8px;">
                                            <span class="name">
                                                Vietravel
                                            </span>
                                            <span class="ans-email hidden-xs">&nbsp;&nbsp;&nbsp;</span>
                                        </div>
                                        <div>02/06/2016 14:59</div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div>
                                    <p class="content">Kính chào Anh Phát! Rất cảm ơn Anh đã luôn quan tâm và tin tưởng sử dụng dịch vụ của Vietravel ạ. Vietravel sẽ ghi nhận ý kiến của cải thiện chất lượng dịch vụ để Quý khách ngày càng hài lòng hơn ạ. Cảm ơn Quý khách!</p>
                                </div>
                            </div>
                            <div class="per-ques mg-bot20">
                                <div class="mg-bot10">
                                    <div class="f-left hidden-xs">
                                        <div class="ques-avatar">Q</div>
                                    </div>
                                    <div class="f-left">
                                        <div style="margin-bottom: 8px;">
                                            <span class="name">
                                            Suong Nguyen
                                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;|</span>
                                            </span>
                                            <span class="ques-email hidden-xs">&nbsp;&nbsp;&nbsp;nguyenhuyensuong0603@gmail.com</span>
                                        </div>
                                        <div>10/07/2016 19:51</div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div>
                                    <div class="content">Minh vua di chuyen Nha Trang Phu Yen bang xe .minh thay Viettravel to chuc tot .minh mong co nhung chuyen du lich bang xe nhu vay de nhung nguoi thich ngam canh duong di co dip di .</div>
                                    <p class="btn-ans"><a data-toggle="modal" data-target="#divComment" onclick="LoadComment('4283')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Trả lời</a></p>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="per-ques mg-bot20">
                                <div class="mg-bot10">
                                    <div class="f-left hidden-xs">
                                        <div class="ques-avatar">Q</div>
                                    </div>
                                    <div class="f-left">
                                        <div style="margin-bottom: 8px;">
                                            <span class="name">
                                                Ngô Văn Dương
                                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;|</span>
                                            </span>
                                            <span class="ques-email hidden-xs">&nbsp;&nbsp;&nbsp;danghanguyen76@gmail.com</span>
                                        </div>
                                        <div>09/06/2017 21:50</div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div>
                                    <div class="content">đẹp</div>
                                    <p class="btn-ans"><a data-toggle="modal" data-target="#divComment" onclick="LoadComment('7537')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Trả lời</a></p>
                                </div>
                            </div>
                            <div class="clear"></div>

                            <div id="divComment" class="modal fade" role="dialog">
                                <form action="/Comment/Reply" id="mainform" method="post">
                                    <input name="__RequestVerificationToken" type="hidden" value="USE3maw7tnAx0tWBGfDKU0dNuJaaeRkgMnIn-9q6hFMRGSmXhRQJLYdMgpz4qZQ4rSwmUpFvnkKS8Te7fTbrnKTBn9eOB3mx-txF3ad6_H81">
                                    <input id="HeaderTour" name="HeaderTour" type="hidden" value="NDSGN523">

                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                <div class="modal-title">Gửi ý kiến</div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12 mg-bot15">
                                                        <div class="input-container">
                                                            <i class="fa fa-user icon"></i>
                                                            <input class="form-control input-md" id="UserName" name="UserName" placeholder="Họ tên(*)" required="required" type="text" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mg-bot15">
                                                        <div class="input-container">
                                                            <i class="fa fa-envelope icon"></i>
                                                            <input class="form-control input-md" id="Email" name="Email" placeholder="Email(*)" required="required" type="email" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mg-bot15">
                                                        <div class="input-container">
                                                            <i class="fa fa-th-list icon"></i>
                                                            <textarea class="form-control" cols="20" id="Content" name="Content" placeholder="Ý kiến của bạn(*)" required="required" rows="5"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-md btn-detail" id="btn_submitmainform">Gửi đi&nbsp;&nbsp;<i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>

                        <form action="/Comment/Reply" id="mainform" method="post">
                            <input name="__RequestVerificationToken" type="hidden" value="wOLpNhS88hNoDgAaZEHKyLWhHC_rBLHQpbyud59pdeHV43u4oQmWj9Y9TLZldQv5ZJFiaS8JD1t56UPlw4VnHBsil203ZubvH2URD2QwU4k1">
                            <input id="HeaderTour" name="HeaderTour" type="hidden" value="NDSGN523">
                            <div class="frame-feedback">
                                <div class="title">
                                    <img src="/Content/ThemeHe/img/i-feedback.png" alt="feedback">&nbsp;&nbsp;Gửi ý kiến
                                </div>
                                <div class="form-feedback">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12 mg-bot15">
                                            <input class="form-control input-md" id="UserName" name="UserName" placeholder="Họ tên(*)" required="required" type="text" value="">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 mg-bot15">
                                            <input class="form-control input-md" id="Email" name="Email" placeholder="Email(*)" required="required" type="email" value="">
                                        </div>
                                    </div>
                                    <div class="row mg-bot15">
                                        <div class="col-xs-12">
                                            <textarea class="form-control" cols="20" id="Content" name="Content" placeholder="Ý kiến của bạn(*)" required="required" rows="5"></textarea>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 text-center mg-bot15">
                                            <button type="submit" class="btn btn-md btn-detail" id="btn_submitmainform">Gửi đi&nbsp;&nbsp;<i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                        <div class="clear"></div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function() {

                           

                            $("#datepicker").datepicker({
                                dateformat: "dd-mm-yy",
                                 todayHighlight: true,
                            });

                            
                        });
                        
                    </script>
                </div>
                <div class="lienhe mg-bot30 mg-50" style="display: none;">
                    <div class="title-lg">
                        <h2>Liên hệ</h2></div>
                    <div class="sec-content contact">
                        <div class="row vpc">
                            <div class="col-xs-12 title">
                                Trụ sở chínhfo
                            </div>
                            <div class="col-sm-6 col-xs-12 mg-bot30">
                                <p class="address mg-bot10"><strong>Địa chỉ: </strong> 190 Pasteur, Phường 6, Quận 3, Tp. Hồ Chí Minh</p>
                                <p class="mg-bot10"><strong>Điện thoại:</strong> (84-28) 3822 8898</p>
                                <p class="mg-bot10"><strong>Fax:</strong> (84-28) 3829 9142</p>
                                <p><strong>Email:</strong> info@vietravel.com</p>
                            </div>
                        </div>
                        <div class="row cn">
                            <div class="col-xs-12 mg-bot30">
                                <ul class="list-mien list-inline">
                                    <li class="active item-mn" id="tabMienNam"><a href="#">Miền Nam</a></li>
                                    <li class="item-mb"><a href="#" id="tabMienBac">Miền Bắc</a></li>
                                    <li class="item-mt"><a href="#" id="tabMienTrung">Miền Trung</a></li>
                                </ul>
                            </div>
                            <div class="mien miennam" id="divMienNam">
                            </div>
                            <div class="mien mienbac" id="divMienBac">
                            </div>
                            <div class="mien mientrung" id="divMienTrung">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xs-12">
            <div class="line-ct">&nbsp;</div>
        </div>
        <div class="col-xs-12 tour-similar">
            <div class="row">
                <div class="col-xs-12 mg-bot20">
                    <div class="title-ft">Tour ngẫu nhiên</div>
                </div>
                <div id="theogia">
                
                    @if(count($tour)>0)    
                    @foreach($tour as $tours)

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mg-bot30">
                        <a href="{{route('tourDetail', ['id' => $tours->url_rewrite]) }}" title="{!! $tours->Name !!}">
                            <div class="pos-relative">

                                <img src="{{ (TourController::imageTourFirst($tours->id)==''?asset('images/no-image.png')  :TourController::imageTourFirst($tours->id)->image) }}" style="width: 100%">
                                <div class="frame-ttt1">
                                    <div class="f-left">
                                        <img src="{{ asset('Frontend/Content/ThemeHe/img/i-date-w.png') }}" alt="date">
                                    </div>
                                    <div class="f-left date">
                                        <span class="yellow">{{ $tours->departureDay }}</span> -
                                        <span class="yellow">{{ $tours->Time }} ngày</span> - <span class="yellow">{{ $tours->max}} chỗ</span></div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                        <div class="frame-ttt2">
                            <a href="{{route('tourDetail', ['id' => $tours->url_rewrite]) }}">
                                <div class="ttt-title dot-dot cut-ttt">{!! $tours->Name !!}</div>
                            </a>
                            <div class="ttt-line"></div>
                            <div>
                                <img src="{{ asset('Frontend/Content/ThemeHe/img/i-price.png') }}" class="f-left" alt="price">
                                <div class="f-left ttt-info">
                                    <span class="price-n">{!! $tours->discountPrice !!}$ </span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endif
                    
                    
                </div>
                <div id="ngaykhoihanh">
                </div>

            </div>
        </div>
        <div class="col-xs-12">
            <div class="line-ct">&nbsp;</div>
        </div>
        <div class="col-xs-12 news-relate">
            <div class="row">
                <div class="col-xs-12 mg-bot20">
                    <div class="title-ft">Bài viết liên quan</div>
                </div>
                <div class="col-xs-12" id="PictureNewsSearch">
                    <ul class="row list-news">
                        @if(!empty($newsRelated))
                        @foreach($newsRelated as $news)
                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-12 cut-name dot-dot-ajax" style="overflow-wrap: break-word;">
                            <a href="{{route('newsDetail', ['id' => $news->url_rewrite]) }}"> {!! $news->title !!} </a>
                        </li>
                        @endforeach

                        @endif
                        
                    </ul>
                    <div id="divNewsArticle" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="max-width:900px;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                    <h4 class="modal-title font500" id="divHeaderArticle"></h4>
                                </div>
                                <div class="modal-body" id="divContentArticle">

                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>    
                    <script>

                       $(".slider").click(function() {
                            id = $(this).attr('id');
                            $(".slider").removeClass('active');
                            $('#'+id).addClass('active');
                            $('.items').removeClass('active');
                            $('.'+id).addClass('active');
                        });

                        $(".side-menu ul li").click(function() {
                            $(".side-menu ul li").removeClass('active');

                            cl = $(this).attr('class');

                            $('.'+cl).addClass('active');
                            $('.mg-50').css('display','none');

                            $('.'+cl.substring(4)).css('display','block')  ;

                        });   

                        $("#red-heart").click(function() {
                            data = $(this).attr('data-target');
                            // window.localStorage.setItem('heart', data);
                                
                                if ($("#red-heart").hasClass('red')) {
                                    $.notify("bạn đã yêu thích tour này ", "warning");
                                }
                                else{
                                    $.notify("cảm ơn bạn đã yêu thích tour của chúng tôi!", "success");
                                }
                        
                                $("#red-heart").addClass('red');
                            // alert('cảm ơn bạn đã yêu thích tour của chúng tôi!')

                            // localStorage.setItem("heart", JSON.stringify(select));

                            //lấy giá trị store lúc ban đầu chuyển đổi sang dạng array
                            var store  =  JSON.parse(localStorage.getItem('heart')); 

                            if (store == null) {
                                store = [];
                            }
                            

                            var heart = [];

                            var select = { heart: $("#red-heart").attr('data-target')};

                            heart.push(select);

                            //đẩy heart vào store 
                            store.push(heart);

                            // đẩy lại store vào localstore và chuyển sang dạng json


                            localStorage.setItem("heart", JSON.stringify(store));

                            
                        }); 

                        
                        $(document).ready(function() {

                            myheart  =    JSON.parse(localStorage.getItem('heart'));
                            // console.log(localStorage.getItem('heart'));
                            arrayHeart = [];
                             
                            jQuery.each( myheart, function( i, val ) {
                                
                                arrayHeart.push(val[0].heart);

                            });

                            //xóa phần tử mảng giống nhau trong arrayHeart
                            var heartt = arrayHeart.filter((v, i, a) => a.indexOf(v) === i); 
                           
                           
                            if (heartt.indexOf($("#red-heart").attr('data-target'))>-1 ) {
                                $("#red-heart").addClass('red');
                            } 

                        });  

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@stop