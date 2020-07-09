@extends('Frontend.layout')

@section('content')
    <link rel="stylesheet" href="https://www.fareastour.asia/templates/fareastour2016/css/responsive.css">
    <link rel="stylesheet" href="https://www.fareastour.asia/templates/fareastour2016/css/style.css">
    <div class="container">
            <div class="clearfix main-content">
                <div class="left-content">
                    <h2 class="h1-title">CREATE YOUR TAILOR MADE TRIP</h2>
                    <form name="fbook_tour" id="fbook_tour" method="post" class="form-booktour">
                        This form allows us to establish a tour proposal suitable for your need. It is free and without obligation<br />
                        <font color="red">(*): Required fields</font>
                        <div class="form-row">
                            <div class="title-form clearfix"><span>1</span>contact information:</div>
                            <div class="group-form-book">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row-book clearfix">
                                            <div class="title-form-book">Full name <font color="red">(*)</font></div>
                                            <div class="right-form-book"><input type="text" name="name" value=""></div>
                                        </div>
                                        <div class="row-book clearfix">
                                            <div class="title-form-book ">Email <font color="red">(*)</font></div>
                                            <div class="right-form-book"><input type="text" name="email" class="input-text" value=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="row-book clearfix">
                                            <div class="title-form-book ">Country</div>
                                            <div class="right-form-book"><input type="text" name="country" class="input-text" value=""></div>
                                        </div>
                                        <div class="row-book clearfix">
                                            <div class="title-form-book ">Phone <font color="red">(*)</font></div>
                                            <div class="right-form-book"><input type="text" name="phone" class="input-text" value=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">I prefer to be contacted by</div>
                                    <div class="col-md-9 col-sm-9 col-xs-12"><label class="lable-contact"><input type="radio" name="contactby" value="Phone"> Phone</label><label class="lable-contact"><input checked="checked" type="radio" name="contactby" value="Email"> Email</label></div>
                                </div>
                            </div>
                            <div class="title-form clearfix"><span>2</span>Group Information:</div>
                            <div class="group-form-book">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">Have you already booked the International flight?</div>
                                    <div class="col-md-5 col-sm-5 col-xs-12"><label style="margin-right: 20px"><input name="evertraveled" type="radio" value="Yes" /> Yes</label> <label><input name="evertraveled" type="radio" value="No" /> No</label></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="clearfix row-book">
                                            <div class="title-form-book">Arrival City</div>
                                            <div class="right-form-book"><input type="text" name="cityarive" class="input-text" value=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="clearfix row-book">
                                            <div class="title-form-book">Departure City</div>
                                            <div class="right-form-book"><input type="text" name="citydepart" class="input-text" value=""></div>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="clearfix row-book">
                                            <div class="title-form-book">Departure date <font color="red">(*)</font></div>
                                            <div class="right-form-book"><input class="input-date" type="text" id="departure" name="departure" value=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="clearfix row-book">
                                            <div class="title-form-book ">Tour Duration <font color="red">(*)</font></div>
                                            <div class="right-form-book">
                                                <select class="select-package" name="duration">
                                                    <option value="">Duration *</option>
                                                    <option value="1 days">1 day</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix row-book">
                                    <div class="title-form-book mstrong ">Number of people</div>
                                    <div class="right-form-book">
                                        <div class="row row-book">
                                            <div class="col-md-2 col-sm-2 col-xs-3"><input type="text" name="adult" value="1"></div>
                                            <div class="col-md-7 col-sm-7 col-xs-9">Adults <font color="red">(*)</font></div>
                                        </div>
                                        <div class="row row-book">
                                            <div class="col-md-2 col-sm-2 col-xs-3"><input type="text" name="children" value="0"></div>
                                            <div class="col-md-7 col-sm-7 col-xs-9">Over 2 and under 12 years old</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-3"><input type="text" name="baby" value="0"></div>
                                            <div class="col-md-7 col-sm-7 col-xs-9">Under 2 years old</div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            Budget per person(Not included international Air-ticket):
                            <div class="group-form-book">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="clearfix">
                                            <div class="title-form-book">Maximum amount</div>
                                            <div class="right-form-book"><input type="text" name="maxamount" value=""></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="clearfix">
                                            <div class="title-form-book">Currency</div>
                                            <div class="right-form-book">
                                                <select name="currency" class="select-book">
                                                    <option value="USD">$ USD</option>
                                                    <option value="GBP">&pound; GBP</option>
                                                    <option value="ERO">&euro; ERO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="title-form-book mstrong">Accommodation:</div>
                                <div class="right-form-book">
                                    <div class="row row-book">
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="acc[]" type="checkbox" value="home stay" />Home stay </label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="acc[]" type="checkbox" value="under 3 star" />Under 3 star </label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="acc[]" type="checkbox" value="3 star" />3 star </label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="acc[]" type="checkbox" value="4 star" />4 star </label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="acc[]" type="checkbox" value="5 star" />5 star </label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="acc[]" type="checkbox" value="Combine" />Combine </label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="title-form-book mstrong">Traveller type:</div>
                                <div class="right-form-book">
                                    <div class="row row-book">
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="transport[]" type="checkbox" value="Romantic Escape" />Romantic Escape</label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="transport[]" type="checkbox" value="adventure" />Adventure</label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="transport[]" type="checkbox" value="With Friends" />With Friends</label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="transport[]" type="checkbox" value="Family" />Family</label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="transport[]" type="checkbox" value="Solo Travel" />Solo Travel</label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="transport[]" type="checkbox" value="Expert Traveler" />Expert Travelert</label></div>
                                        <div class="col-md-2 col-sm-2 col-xs-6"><label><input name="transport[]" type="checkbox" value="Joint a Group" />Joint a Group</label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-form clearfix"><span>3</span>More Request:</div>
                            <div class="group-form-book">
                                <div class="row-book clearfix">
                                    <div class="title-form-book">Please tell our experts more about your expectations for coming trip!</div>
                                    <div class="right-form-book"><textarea class="textarea-more-request" name="request"></textarea></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">How did you know about Far East Tour?</div>
                                <div class="col-md-3 col-sm-3 col-xs-12"><input type="text" name="howknow" class="input-text" value=""></div>
                            </div>
                            &nbsp;
                            <div class="row-book clearfix">
                                <div class="title-form-book">Sercurity code</div>
                                <div class="right-form-book">
                                    <div class="clearfix"><img id="siimage" src="/plugins/captcha/securimage/lib/securimage_show.php?sid=f2bc13754f37ad740016aa8b342f37b5alt="" /> <a class="a_securimage_refress" tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = '/plugins/captcha/securimage/lib/securimage_show.php?sid=' + Math.random(); this.blur(); return false"><i class="fa fa-refresh"></i></a>
                                        <span class="confirm-code">Confirm Code (*)</span><input type="text" name="captcha" class="securimage_input"/>
                                    </div>
                                </div>
                            </div>
                            <div class="group-form-book">
                                <div class="row-book row">
                                    <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-4 col-sm-offset-4"><a class="a-button-tour" id="sendbook"><i class="fa fa-envelope"></i> Send request</a></div>
                                </div>
                            </div>
                        </div>
                        <div id="message"></div>
                        <span id="LoadingImage" style="display: none;"></span>
                        <input type="hidden" name="act" value="book">
                    </form>
                    <script type="text/javascript">
                        $(function(){
                            jQuery( "#fbook_tour #departure" ).datepicker({
                                minDate:+1,
                                maxDate:"+2Y +1M +10D",
                                numberOfMonths:1,
                                dateFormat: 'dd-mm-yy',
                                constrainInput: true
                            });
                        
                            var f = $("#fbook_tour");
                            $("#sendbook").click(function(e){
                                var regex = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                                var err = 0;
                                var msg = new Array();
                                if ($("#fbook_tour #departure").val() == "") {
                                    $("#fbook_tour #departure").css("border","1px solid red");
                                    err++;
                                } else {
                                    $("#fbook_tour #departure").css("border","");
                                }
                                if ($("#fbook_tour select[name=duration]").val() == "") {
                                    $("#fbook_tour select[name=duration]").css("border","1px solid red");
                                    err++;
                                } else {
                                    $("#fbook_tour select[name=duration]").css("border","");
                                }
                                if ($("#fbook_tour input[name='adult']").val() == "") {
                                    $("#fbook_tour input[name='adult']").css("border","1px solid red");
                                    err++;
                                } else {
                                    $("#fbook_tour input[name='adult']").css("border","");
                                }
                                if ($("#fbook_tour input[name='name']").val() == "") {
                                    $("#fbook_tour input[name='name']").css("border","1px solid red");
                                    err++;
                                } else {
                                    $("#fbook_tour input[name='name']").css("border","");
                                }
                        
                                if ($("#fbook_tour input[name='email']").val() == "" || !regex.test($("#fbook_tour input[name='email']").val())) {
                                    $("#fbook_tour input[name='email']").css("border","1px solid red");
                                    err++;
                                } else {
                                    $("#fbook_tour input[name='email']").css("border","");
                                }
                        
                                if ($("#fbook_tour input[name='phone']").val() == "") {
                                    $("#fbook_tour input[name='phone']").css("border","1px solid red");
                                    err++;
                                } else {
                                    $("#fbook_tour input[name='phone']").css("border","");
                                }
                        
                                if ($("input:text[name='captcha']").val()=="") {
                                    $("input:text[name='captcha']").css("border","1px solid red");
                                    err++;
                                } else {
                                    $("input:text[name='captcha']").css("border","");
                                }
                                if (err == 0) {
                                    $.ajax({
                                        type: "POST",
                                        url: '/?com=tour&act=tailormade&ajax=1',
                                        data: $("#fbook_tour").serialize(),
                                        beforeSend: function(){
                                            $("#LoadingImage").show();
                                        },
                                        success: function(response) {
                                            $("#LoadingImage").hide();
                                            $('#message').html(response);
                                        }
                                    });
                                }else {
                                    alert("Check filled red");
                                    return false;
                                }
                        
                            });
                        });
                    </script>
                </div>
                <div class="right-content">
                    <div class="box-best-price box-customize">
                        <div class="text-center">
                            <div class="title-best-price-1" style="font-size: 15px">Thanks for choosing us</div>
                            <div class="title-best-price-2">Far East Tour</div>
                            <div style="border-bottom: 1px solid #fff;padding-bottom: 10px">Our travel expert will contact to you within 24h</div>
                        </div>
                        <div class="row-info-boook clearfix">
                            <div class="left-info-book"><span>1</span></div>
                            <div class="right-info-book">
                                <div class="info-book-black">more than 52.000 guests</div>
                                96% satisfied travellers in 10 years
                            </div>
                        </div>
                        <div class="row-info-boook clearfix">
                            <div class="left-info-book"><span>2</span></div>
                            <div class="right-info-book">
                                <div class="info-book-black">customized tips and assitance</div>
                                24/7 by an international team
                            </div>
                        </div>
                        <div class="row-info-boook clearfix">
                            <div class="left-info-book"><span>3</span></div>
                            <div class="right-info-book">
                                <div class="info-book-black">Experience and security</div>
                                90 travel experts in Asia
                            </div>
                        </div>
                        <div class="row-info-boook clearfix">
                            <div class="left-info-book"><span>4</span></div>
                            <div class="right-info-book">
                                <div class="info-book-black">100% local travel agency</div>
                                Based in Vietnam, Cambodia, Laos and Myanmar
                            </div>
                        </div>
                        <div class="row-info-boook clearfix">
                            <div class="left-info-book"><span>5</span></div>
                            <div class="right-info-book">
                                <div class="info-book-black">Unique and customisable Tours</div>
                                Every one of the tours we design is unique &ndash; because each of our clients is unique
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@stop   