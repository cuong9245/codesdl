@extends('Frontend.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('newpub/css/responsives.css') }}">
    <link rel="stylesheet" href="{{ asset('newpub/css/stylebooking.css') }}">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation-unobtrusive/3.2.11/jquery.validate.unobtrusive.min.js"></script>

    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
 <!--  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script> -->

    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

    <style type="text/css">
        .tour-book{
            border-right: 1px solid #dddd;
        }
        
        .center{
            text-align: center;
        }
        .step{
            background: #ddd;
            color: #fff;
        }
        .quantity{
            width: 50%;
        }
        .total{
            
            text-align: left;
        }
        .modals{
            width: 750px;
        }
        .icon-top{
            position: absolute;
            top: 50%;
            z-index: 5;
            display: inline-block;
        }
        .book{
            padding: 20px;
            background: #FEC67B;
            height: 353px;
        }
        .carousel-inner, .carousel-inner .item, .carousel-inner .item img{
            height: 353px;
        }

        .a-button-tour{
            border: 0;
        }
        .loader {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3498db;
          width: 120px;
          height: 120px;
          margin: 0 auto;
          -webkit-animation: spin 2s linear infinite; /* Safari */
          animation: spin 2s linear infinite;
        }
        .waiting{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>
    <div class="center">
        <h2>Buy Ticket</h2>
    </div>
    
    <div class="container ">
        <div class="col-md-7 col-xs-12 book">
            <form>
                <div class="form-group row" id="booker"> 
                    <label for="From" class="col-sm-6 col-form-label">From</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control ticker" id="from" placeholder="From">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="to" class="col-sm-6 col-form-label">To</label>
                    <div class="col-sm-6">
                        <input class="form-control ticker" id="to" placeholder="To">
                    </div>
                </div>
                
            </form>


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col"></th>
                        <th scope="col">Promotion</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody id="render-table">
                   <!--  <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr> -->
                </tbody>
            </table>
        </div>

           


        <div class="code col-md-5">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

              <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://cms.luatvietnam.vn/uploaded/Images/Original/2018/03/06/gia-ve-may-bay-2018_0603175251.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Ha noi</h3>
                        <p>Beauty!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="https://cms.luatvietnam.vn/uploaded/Images/Original/2018/03/06/gia-ve-may-bay-2018_0603175251.jpg" alt="Chicago">
                    <div class="carousel-caption">
                        <h3>Ho Chi Minh</h3>
                        <p>Thank you, Ho Chi Minh!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="https://cms.luatvietnam.vn/uploaded/Images/Original/2018/03/06/gia-ve-may-bay-2018_0603175251.jpg" alt="New York">
                    <div class="carousel-caption">
                            <h3>Da Nang</h3>
                            <p>We love Da Nang!</p>
                        </div>
                    </div>
                </div>



            <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon icon-top"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon icon-top"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
       

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modals">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title-ticket">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 col-xs-12 tour-book book2 ">
                            <form name="fbook_tours" id="fbook_tours" method="post" class="form-booktour">
                                This form allows us to establish a tour proposal suitable for your need. It is free and without obligation
                                <br>
                                @csrf
                                <font color="red">(*): Required fields</font>
                                <div class="form-row">
                                    <div class="title-form clearfix"><span>1</span>contact information:</div>
                                    <div class="group-form-book">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="row-book clearfix">
                                                    <div class="title-form-book">Full name <font color="red">(*)</font></div>
                                                    <div class="right-form-book"><input type="text" name="name" ></div>
                                                </div>
                                                <div class="row-book clearfix">
                                                    <div class="title-form-book ">Email <font color="red">(*)</font></div>
                                                    <div class="right-form-book"><input type="text" name="emails" class="input-text"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="row-book clearfix">
                                                    <div class="title-form-book ">Country</div>
                                                    <div class="right-form-book"><input type="text" name="country" class="input-text"></div>
                                                </div>
                                                <div class="row-book clearfix">
                                                    <div class="title-form-book ">Phone <font color="red">(*)</font></div>
                                                    <div class="right-form-book"><input type="text" name="phone" class="input-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-12">I prefer to be contacted by</div>
                                            <div class="col-md-9 col-sm-9 col-xs-12"><label class="lable-contact"><input type="radio" name="contactby" value="Phone"> Phone</label><label class="lable-contact"><input checked="checked" type="radio" name="contactby" value="Email"> Email</label></div>
                                        </div>
                                    </div>
                              
                                  
                                    <div class="title-form clearfix"><span>2</span>Time:</div>
                                    <!-- <div class="group-form-book">
                                        <div class="row-book clearfix">
                                            <div class="title-form-book">Please tell our experts more about your expectations for coming trip!</div>
                                            <div class="right-form-book"><textarea class="textarea-more-request" name="request"></textarea></div>
                                        </div>
                                    </div> -->
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <td scope="col">Departure Date</td>
                                                <td scope="col" class="return">Return Date</td>
                                            </tr>
                                        </thead>
                                        <tbody id="date-book">
                                           
                                        </tbody>
                                    </table>
                                    
                                  
                                    <div class="row-book clearfix">
                                        <div class="title-form-book">Sercurity code</div>
                                        <div class="right-form-book">
                                            <div class="clearfix">
                                            <?php  
                                                session_start();
                                                
                                                $img = imagecreate(100, 30);
                                                
                                                $textbgcolor = imagecolorallocate($img, 150, 239, 255);
                                                $textcolor = imagecolorallocate($img, 74, 143, 74);

                                                $txt =rand(100000, 999999);

                                                // The capcha will be stored 
                                                // for the session 
                                                $_SESSION["captchaticket"] = $txt;   

                                                imagestring($img, 5, 9, 5, $txt, $textcolor);
                                                ob_start();
                                                imagepng($img);
                                                printf('<img src="data:image/png;base64,%s"/ >', base64_encode(ob_get_clean()));
                                            ?>

                                            <span class="confirm-code">Confirm Code (*)</span><input type="text" name="captcha" class="securimage_input"/><span class="error captcha"></span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="group-form-book">
                                        <div class="row-book row">
                                            <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-4 col-sm-offset-4">
                                             
                                                <button type="submit" class="a-button-tour"><i class="fa fa-envelope"></i>Send request</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                       
                                <input type="hidden" name="act" value="book">
                            </form>
                        </div> 
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                    </div>

                    <fieldset class="waiting">
                        <div class="loader"></div>
                    </fieldset>
                </div>
            </div>
        </div> 
        
        <!-- loadder -->
       

        <div class="vc_row wpb_row st bg-holder">
            <div class='container '>
                <div class='row'>
                    <div class="wpb_column column_container col-md-12 vc_custom_1542167696382">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>
                            <div class="wpb_text_column wpb_content_element  fs-28 fs-normal">
                                <div class="wpb_wrapper">
                                    <h2>Local Experiences You&#8217;ll Love</h2>
                                </div>
                            </div>
                            <div class="search-result-page st-tours service-slider-wrapper">
                                <div class="st-hotel-result">
                                    <div class="owl-carousel st-service-slider ">
                                        @foreach($tourLocal as $tours)    
                                        <?php    $image    =  App\Models\imageTour::where('imageTour_id', $tours->id)->first(); ?> 
                                        <div class="item-service grid-item has-matchHeight">
                                            <div class="service-border">
                                                <div class="thumb">
                                                   
                                                    <a href="{{ route('tourDetails',['id' => $tours->url_rewrite]) }}    /tour-detail/{{ $tours->url_rewrite }}" class="login" data-toggle="modal" data-target="#st-login-form">
                                                        <div class="service-add-wishlist" title="Add to wishlist">
                                                            <i class="fa fa-heart"></i>
                                                            <div class="lds-dual-ring"></div>
                                                        </div>
                                                    </a>
                                                    
                                                    <a href="{{ route('tourDetails',['id' => $tours->url_rewrite]) }}">
                                                    <img width="680" height="500" src="{{ $image->image }}" class="img-responsive wp-post-image" alt="WordPress Booking Theme" /> </a>
                                                </div>
                                                
                                                <h4 class="service-title plr15"><a href="{{ route('tourDetails',['id' => $tours->url_rewrite]) }}">{{ $tours->Name }}</a></h4>
                                                <div class="service-review plr15">
                                                    <ul class="icon-group text-color booking-item-rating-stars">
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star"></i></li>
                                                        <li><i class="fa  fa-star-half-o"></i></li>
                                                        <li><i class="fa  fa-star-o"></i></li>
                                                        <li><i class="fa  fa-star-o"></i></li>
                                                    </ul>
                                                    <span class="review">
                                                        3 Reviews            
                                                    </span>
                                                </div>
                                                <div class="section-footer">
                                                    <div class="footer-inner plr15">
                                                        <div class="service-duration">
                                                            <i class="input-icon field-icon fa">
                                                                <svg height="16px" width="16px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                    <g fill="#5E6D77">
                                                                        <path d="M12,23.25C5.797,23.25,0.75,18.203,0.75,12C0.75,5.797,5.797,0.75,12,0.75c6.203,0,11.25,5.047,11.25,11.25
                                                                            C23.25,18.203,18.203,23.25,12,23.25z M12,2.25c-5.376,0-9.75,4.374-9.75,9.75s4.374,9.75,9.75,9.75s9.75-4.374,9.75-9.75
                                                                            S17.376,2.25,12,2.25z"/>
                                                                        <path d="M15.75,16.5c-0.2,0-0.389-0.078-0.53-0.22l-2.25-2.25c-0.302,0.145-0.632,0.22-0.969,0.22c-1.241,0-2.25-1.009-2.25-2.25
                                                                            c0-0.96,0.615-1.808,1.5-2.121V5.25c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v4.629c0.885,0.314,1.5,1.162,1.5,2.121
                                                                            c0,0.338-0.075,0.668-0.22,0.969l2.25,2.25c0.292,0.292,0.292,0.768,0,1.061C16.139,16.422,15.95,16.5,15.75,16.5z M12,11.25
                                                                            c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75S12.414,11.25,12,11.25z"/>
                                                                    </g>
                                                                </svg>
                                                            </i>
                                                            8 hours 
                                                        </div>
                                                        <div class="service-price">
                                                            <span>
                                                                <i class="input-icon field-icon fa">
                                                                    <svg width="10px" height="16px" viewBox="0 0 11 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
                                                                        <desc>Created with Sketch.</desc>
                                                                        <defs></defs>
                                                                        <g id="Hotel-layout" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <g id="Room_Only_Detail_1" transform="translate(-135.000000, -4858.000000)" fill="#ffab53" fill-rule="nonzero">
                                                                                <g id="nearby-hotel" transform="translate(130.000000, 4334.000000)">
                                                                                    <g id="h1-g" transform="translate(5.000000, 136.000000)">
                                                                                        <g id="hotel-grid">
                                                                                            <g id="price" transform="translate(0.000000, 383.000000)">
                                                                                                <g id="thunder" transform="translate(0.000000, 5.000000)">
                                                                                                    <path d="M10.0143234,6.99308716 C9.91102517,6.83252576 9.73362166,6.73708716 9.54386728,6.73708716 L5.61404272,6.73708716 L5.61404272,0.561648567 C5.61404272,0.296666111 5.42877956,0.0676134793 5.16941114,0.0125959355 C4.90555149,-0.0435444154 4.64730587,0.0923152337 4.5395164,0.333718743 L0.0482883306,10.4389819 C-0.0291853536,10.6118942 -0.0123432484,10.8139994 0.0909549973,10.9723152 C0.194253243,11.1317538 0.371656752,11.2283152 0.561411138,11.2283152 L4.4912357,11.2283152 L4.4912357,17.4037538 C4.4912357,17.6687363 4.67649886,17.8977889 4.93586728,17.9528065 C4.97516552,17.9606661 5.01446377,17.9651573 5.05263921,17.9651573 C5.27046377,17.9651573 5.47369184,17.8382801 5.56576201,17.6316837 L10.0569901,7.5264205 C10.133341,7.35238541 10.1187445,7.15252576 10.0143234,6.99308716 Z" id="Shape"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </i>
                                                                <span class="fr_text">from</span>
                                                            </span>
                                                            <span class="price">
                                                            <span class="text-small lh1em item onsale ">{{ $tours->price }}$</span><span class="text-lg lh1em item "> {{ $tours->discountPrice }}$</span> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
    </div>
    <script type="text/javascript">
         


          $('.return').addClass('hidden');

           $('.waiting').hide();

       
        $.ajax({
            type: 'get',
            url:  "/address",
            success:function(data){

                var result = Object.keys(data).map(function(key) {
                    return data[key];
                });

                $(function() {

                    $('#from').autocomplete({
                      source: result
                    });

                    $('#to').autocomplete({
                      source: result
                    });
                });
            }    
            
        })



        $('.ticker').blur(function(){
            if ($('#from').val()!=" "&& $('#to').val()!="") {

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: "/find-ticket",
                    data: {
                        'from': $('#from').val(), 
                        'to' : $('#to').val(),
                    },
                    success:function(data){
                        
                        if(Array.isArray(data)){
                            var kqs =[]; 
                            for (var i = 0; i < data.length; i++) {
                                if (data[i].type=="0") {

                                    data[i].type ="One Way";
                                }
                                else{
                                    data[i].type ="Round trip";
                                }

                                var kq ='<tr> <th scope="row"><input type="radio" id="radio'+i+'"  value='+i+' name="ticket" class="radio"> </th><td>'+data[i].from+'</td> <td>'+data[i].to+' <td>'+data[i].type+'</td></td><td id="promotion'+i+'">'+data[i].promotion+'%</td><td><select class="form-control quantity" id="quantity'+i+'"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option></td> <td id="price'+i+'">'+data[i].price+'$</td> </tr>'
                                kqs.push(kq);
                            }  
                            var total = ['<tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="total">Total: 0$</td></tr><tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="booker hidden"><button class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">Book</button></td></tr>'];
                            var html  = kqs.concat(total);

                            // render information modal bootstrap


                            function renderHtml(html) {

                                function total(k) {
                                    
                                    let quantity = parseInt($('#quantity'+k+'').val());
                                    let price    = parseInt($('#price'+k+'').text());
                                    let promotion = parseInt($('#promotion'+k+'').text())

                                    price = price*quantity-price*quantity*(promotion/100);

                                    // $('tbody tr').append('<tr><td></td><td></td><td></td><td></td><td></td><td>total:'+price+'</td></tr>');
                                    $('.total').html('Total: '+price+'$');

                                    if (price>0) {
                                        $('.booker').removeClass('hidden');
                                    }
                                    else{
                                        $('.booker').addClass('hidden');   
                                    }
                                }  

                                $('#render-table').html(html);

                                $('.radio').click(function(){

                                    const k = $(this).val();

                                    total(k);

                                });

                                $('.quantity').change(function(){
                                    val = $(this).val();
                                    id  = $(this).attr('id');
                                    const k   = id.trim().substr(8);
                                    $("#radio"+k+"").attr('checked', 'checked');
                                    total(k);
                                })
                            }

                            $('#exampleModalCenter').on('shown.bs.modal', function (e) {

                                function price(k) {
                                
                                    let quantity = parseInt($('#quantity'+k+'').val());
                                    let price    = parseInt($('#price'+k+'').text());
                                    let promotion = parseInt($('#promotion'+k+'').text())

                                    price = price*quantity-price*quantity*(promotion/100);

                                    return price;
                                }

                                let id = $('input[name="ticket"]:checked').val();

                               
                                var price = price(id);


                                let nameTicket = data[id].from+' To '+data[id].to+' ('+data[id].type+')';

                                $('#title-ticket').html(nameTicket);

                                var htmltable = [];

                                // let number = parseInt($('#quantity'+id+'').val());

                                if (data[id].type=="One Way") {
                                    $('.return').addClass('hidden');
                                    
                                    let htmls ='<tr><th scope="row"></th><td><input type="" name="departure" class="datepicker" id="departure'+i+'" required></td></tr>';
                                    htmltable.push(htmls); 
                                    
                                }
                                else{
                                    if($('.return').hasClass('hidden')){
                                        $('.return').removeClass('hidden');

                                    }
                                    
                                    let htmls ='<tr><th scope="row"></th><td><input type="text" name="departure" class="datepicker" id="departures" required autocomplete="off"></td><td><input type="text" name="return" class="datepicker" id="returns" required autocomplete="off"></td></tr>';
                                    htmltable.push(htmls);   
                                }
                                
                                $('#date-book').html(htmltable);
                                $(".datepicker").datepicker({ dateFormat: 'dd-mm-yy',minDate:0 });

                                $("#fbook_tours").validate({
                                    rules: {
                                        name: {
                                            required: true,
                                            maxlength: 255,
                                        },
                                        email: {
                                                required: true,
                                                email: true,
                                            },
                                        phone: {
                                            required: true,
                                        
                                        },

                                        phone: {
                                            required: true,
                                            
                                            minlength:10, 
                                            maxlength:10
                                        },
                                        departure:"required",
                                        
                                    },
                                    messages: {
                                        name: {
                                            required: "Name is required",
                                            maxlength: "maximum character are 255",
                                        },
                                        email: {
                                            required: "Email is required",
                                            email: "Email is false",
                                        },

                                        phone:{
                                            required:"Phone is required",
                                            minlength:"phone is 10 numbers",
                                            maxlength:"phone is 10 numbers",
                                        }
                                        
                                    },

                                    submitHandler: function(form) {
                                        
                                        $.ajaxSetup({
                                            headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            }
                                        });

                                        $.ajax({
                                            type: 'post',
                                            url: "/buy-ticket",
                                            data: {
                                                'name': $("[name=name]").val(), 
                                                'email' : $("[name=emails]").val(),
                                                'phone' : $("[name=phone]").val(),
                                                'captcha': $("[name=captcha]").val(),
                                                'departure':$("[name=departure]").val(),
                                                'return'   :$("[name=return]").val(),
                                                'ticketName': $('#title-ticket').text(),
                                                'contactby' :  $("[name=contactby]").val(),
                                                'price':price
                                            },
                                            beforeSend: function() {
                                                $('.waiting').show();
                                            },

                                            success:function(data){
                                                 $('.waiting').hide();
                                                 
                                                if (data.trim() !="Captcha false") {

                                                    setTimeout(function(){
                                                        $('#exampleModalCenter').modal('hide');
                                                        alert(data); 
                                                    }, 600);
                                                   
                                                }
                                                else{
                                                    $('.captcha').text('Captcha false');
                                                    
                                                    $("[name=captcha]").focus();
                                                }  
                                            }    
                                        });  
                                    }
                                });

                            });

                            renderHtml(html);
                        }
                        else{
                            var html = "no result";
                        }
                    }    
                });     
            }
        });


        $('.step').click(function() {
            if ($('#from').val()=="") {
                alert('From is required');
                $('#from').focus();

            }
            else if($('#to').val()==""){
                alert('To is required');
                $('#to').focus();
            }
            else if($('#Departure')==""){
                alert('Departure is required');
                $('#Departure').focus();
                
            }
            else{
                $('.book').addClass('hidden');
                $('.book2').removeClass('hidden');
            }
        });

        $('.carousel').carousel();

    </script>
    
@stop