@extends('Frontend.layout')

@section('content')

<style>
    .search-result-page .banner {
        background-image: url(https://tomap.travelerwp.com/wp-content/uploads/2018/12/gallary_4-1.jpg) !important;
    }    
</style>

<div id="st-content-wrapper" class="search-result-page">
    <div class="banner st_1585535105">
        <div class="container">
            <h1>
                Contact                    
            </h1>
        </div>
    </div>
    <div class="st-breadcrumb hidden-xs">
        <div class="container">
            <ul>
                <li><a href="https://tomap.travelerwp.com">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="vc_row wpb_row st bg-holder">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-12">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="vc_empty_space" style="height: 75px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row wpb_row st bg-holder">
            <div class="container ">
                <div class="row">
                    <div class="wpb_column column_container col-md-5">
                        <div class="vc_column-inner wpb_wrapper">
                            <div role="form">
                                <div class="screen-reader-response"></div>
                                <form action="http://127.0.0.1:8000/contactsClients" method="post"  id="contact-form">
                                    @csrf
                                    <div class="st-contact-form">
                                        <div class="contact-header">
                                            <h3>We'd love to hear from you</h3>
                                            <p>Send us a message and we'll respond as soon as possible</p>
                                            <p></p>
                                        </div>
                                        <div class="contact-form">
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Name">
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email">
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap your-message">
                                                    <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Message">
                                                        
                                                    </textarea>
                                                </span>
                                            </div>
                                            <p>
                                                <input type="submit" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit btn btn-primary">
                                            </p>

                                        </div>

                                    </div>
                                    
                                </form>
                            </div>
                            <div class="vc_empty_space" style="height: 25px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-2">
                        <div class="vc_column-inner wpb_wrapper">
                        </div>
                    </div>
                    <div class="wpb_column column_container col-md-5">
                        <div class="vc_column-inner wpb_wrapper">
                            <div class="st-contact-info">
                                <div class="info-bg">
                                    <img src="https://tomap.travelerwp.com/wp-content/uploads/2018/12/bg-contact-1.jpg" class="img-responsive" alt="Background Contact Info">    
                                </div>
                                <div class="info-content">
                                    <h3>Fareastour</h3>
                                    <div class="sub">
                                        <p></p>
                                        <p>Tell. (+84) 917 620 980</p>
                                        <p> sales@fareastour.com.vn</p>
                                        <p class="address">No.9A, 108 Lane, Lo Duc Street, Hai Ba Trung District, Hanoi, Vietnam.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="vc_empty_space" style="height: 75px"><span class="vc_empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row st bg-holder vc_custom_1543398264656 vc_row-no-padding" style="position: relative; left: -74.5px; box-sizing: border-box; width: 1349px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="wpb_column column_container col-md-12 vc_custom_1543213048580">
                        <div class="vc_column-inner wpb_wrapper">
                            <div id="contact-map-new" data-lat="21.034470" data-lng="105.765930" style="width: 100%; height: 500px; position: relative; overflow: hidden;">
                                <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                    <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                        <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                            <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                        <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -195, -56);">
                                                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                                                <div style="width: 256px; height: 256px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                    <div style="width: 88px; height: 90px; overflow: hidden; position: absolute; left: -44px; top: -90px; z-index: 0;"><img alt="" src="https://tomap.travelerwp.com/wp-content/themes/traveler-2-7-8-5/v2/images/markers/ico_location_3.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; width: 88px; height: 90px; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                        <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -195, -56);">
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: -256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div>
                                                            <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -195, -56);">
                                                        <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6500!3i3607!4i256!2m3!1e0!2sm!3i504220892!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=107663" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6500!3i3605!4i256!2m3!1e0!2sm!3i504220892!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=37048" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6500!3i3606!4i256!2m3!1e0!2sm!3i504220892!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=6820" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6503!3i3606!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=2184" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6502!3i3606!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=4148" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6502!3i3605!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=34376" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6503!3i3605!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=32412" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6504!3i3605!4i256!2m3!1e0!2sm!3i504220940!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=12438" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6504!3i3606!4i256!2m3!1e0!2sm!3i504220940!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=113281" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6504!3i3607!4i256!2m3!1e0!2sm!3i504220940!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=83053" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6502!3i3607!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=104991" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6501!3i3607!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=106955" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6501!3i3606!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=6112" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6503!3i3607!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=103027" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6501!3i3605!4i256!2m3!1e0!2sm!3i504221120!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=36340" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6505!3i3607!4i256!2m3!1e0!2sm!3i504220940!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=81089" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6505!3i3605!4i256!2m3!1e0!2sm!3i504220940!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=10474" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i13!2i6505!3i3606!4i256!2m3!1e0!2sm!3i504220940!2m3!1e2!6m1!3e5!3m17!2svi-VN!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;key=AIzaSyBmnIbuu3FxSs_WHz7UUalkedPBe_t1cKo&amp;token=111317" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;">
                                                <p class="gm-style-pbt">Sử dụng ctrl + cuộn để thu phóng bản đồ</p>
                                            </div>
                                            <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                        <div title="" style="width: 88px; height: 90px; overflow: hidden; position: absolute; opacity: 0; cursor: pointer; touch-action: none; left: -44px; top: -90px; z-index: 0;"><img alt="" src="https://tomap.travelerwp.com/wp-content/themes/traveler-2-7-8-5/v2/images/markers/ico_location_3.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; width: 88px; height: 90px; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                        <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                            <a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=21.03447,105.76593&amp;z=13&amp;t=m&amp;hl=vi-VN&amp;gl=US&amp;mapclient=apiv3" title="Mở khu vực này trong Google Maps (mở cửa sổ mới)" style="position: static; overflow: visible; float: none; display: inline;">
                                                <div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                            </a>
                                        </div>
                                        <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 525px; top: 160px;">
                                            <div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Dữ liệu Bản đồ</div>
                                            <div style="font-size: 13px;">Dữ liệu bản đồ ©2020</div>
                                            <button draggable="false" title="Đóng" aria-label="Đóng" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
                                        </div>
                                        <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 215px; bottom: 0px; width: 109px;">
                                            <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span>Dữ liệu bản đồ ©2020</span></div>
                                            </div>
                                        </div>
                                        <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                            <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2020</div>
                                        </div>
                                        <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 115px; bottom: 0px;">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi-VN_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div>
                                        </div>
                                        <button draggable="false" title="Chuyển đổi chế độ xem toàn màn hình" aria-label="Chuyển đổi chế độ xem toàn màn hình" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button>
                                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@21.03447,105.76593,13z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                                    <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div>
                                    <div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Trang này không thể tải Google Maps đúng cách.</span></div>
                                    <table style="width: 100%;">
                                        <tr>
                                            <td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Bạn có sở hữu trang web này không?</a></td>
                                            <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End .row-->
            </div>
            <!--End .container-->
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>
</div>
<script type="text/javascript">

    var msg = '{{Session::get('contact')}}';
    var exist = '{{Session::has('contact')}}';
    if(exist){

        alert(msg);
    }

    $("#contact-form").validate({
        rules: {
            name: {
                required: true,
                maxlength: 255,
            },
            email: {
                    required: true,
                    email: true,
                },
            message: "required"
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
            message: "Message is required",
        }
    });
    
</script>
@stop