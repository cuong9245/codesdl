@extends('Frontend.master')
<!-- list-tour -->
@section('content')
<div class="container n3-contact mg-bot40">
    <div class="row">
        <div class="col-xs-12 mg-bot15">
            <div class="title mg-bot15"><h1>LIÊN HỆ</h1></div>
            <div style="display: none"><h2>Hệ thống chi nhánh</h2></div>
            <div class="text-center">Để có thể đáp ứng được các yêu cầu và các ý kiến đóng góp của quý vị một cách nhanh chóng xin vui lòng liên hệ</div>
        </div>
        <div class="col-xs-12 mg-bot50">
            <form action="/StaticPage/SendEmail" id="SendEmail" method="post">
                <div class="frame-contact">
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mg-bot15">
                            <label>Họ tên (<span class="star">*</span>)</label>
                            <input type="text" class="form-control" required="required" name="txtHoTen" id="txtHoTen">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mg-bot15">
                            <label>Email (<span class="star">*</span>)</label>
                            <input type="email" class="form-control" required="required" name="txtEmail" id="txtEmail">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mg-bot15">
                            <label>Điện thoại (<span class="star">*</span>)</label>
                            <input type="text" class="form-control" required="required" name="txtDienThoai" id="txtDienThoai">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mg-bot15">
                            <label>Tên công ty</label>
                            <input type="text" class="form-control" name="txtTenCongTy">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mg-bot15">
                            <label>Số khách</label>
                            <input type="text" class="form-control" name="txtSoKhach">
                        </div>
                        <div class="col-xs-12 mg-bot15">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="txtDiaChi">
                        </div>
                        <div class="col-xs-12 mg-bot15">
                            <label>Tiêu đề (<span class="star">*</span>)</label>
                            <input type="text" class="form-control" required="required" name="txtTieuDe">
                        </div>
                        <div class="col-xs-12 mg-bot30">
                            <label>Nội dung (<span class="star">*</span>)</label>
                            <textarea class="form-control" rows="4" cols="5" required="required" name="txtNoiDung"></textarea>
                        </div>
                        
                        <div class="col-xs-12 text-center">
                            <button type="submit" class="btn btn-md btn-general">Gửi đi &nbsp;&nbsp;<i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </form>        
        </div>
    </div>
</div>
@stop