@extends('Frontend.layout')

@section('content')

<div id="st-content-wrapper">
    <div class="blog-header" style="background-image: url(https://travelhotel.wpengine.com/wp-content/uploads/2018/12/united.jpg)">
        <div class="container">
            <h2 class="blog-header-title">Blog</h2>
        </div>
    </div>
    <div class="st-breadcrumb hidden-xs ">
        <div class="container">
            <ul>
                <li><a href="https://tomap.travelerwp.com">Home</a></li>
                <li class="active">Pure Luxe in Punta Mita</li>
            </ul>
        </div>
    </div>
    <div class=" st-blog ">
        <div class="container">
            <div class="blog-content content">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <div class="article">
                            <div class="header">
                                <header class="post-header">
                                    <span class="hover-img" href="https://tomap.travelerwp.com/pure-luxe-in-punta-mita/">
                                    <img width="1500" height="1000" src="https://tomap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3.jpg" class="attachment-full size-full wp-post-image" alt="WordPress Booking Theme" srcset="https://tomap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3.jpg 1500w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3-600x400.jpg 600w, https://tomap.travelerwp.com/wp-content/uploads/2018/11/los_angeles_3-768x512.jpg 768w" sizes="(max-width: 1500px) 100vw, 1500px">    </span>
                                </header>
                                <div class="cate">
                                    <ul>
                                        <li style="background: #f9ca24"><a href="https://tomap.travelerwp.com/category/parks-and-carnivals/">Parks and Carnivals</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h2 class="title">Pure Luxe in Punta Mita</h2>
                            <div class="post-info">
                                <span class="date">
                                Nov 30, 2018                                </span>
                              
                            </div>
                            <div class="post-content">
                                {!! $newsDetail->Detail !!}
                            </div>
                            <div class="st-flex space-between">
                                <div class="tags">
                                    <a href="https://tomap.travelerwp.com/tag/beaches/" class="tag-item">beaches</a>
                                    <a href="https://tomap.travelerwp.com/tag/beauty/" class="tag-item">Beauty</a>
                                    <a href="https://tomap.travelerwp.com/tag/cultural/" class="tag-item">Cultural</a>
                                </div>
                                <div class="share">
                                    Share                                            <a class="facebook share-item" href="https://www.facebook.com/sharer/sharer.php?u=https://tomap.travelerwp.com/pure-luxe-in-punta-mita/&amp;title=Pure Luxe in Punta Mita" target="_blank" rel="noopener" original-title="Facebook"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a class="twitter share-item" href="https://twitter.com/share?url=https://tomap.travelerwp.com/pure-luxe-in-punta-mita/&amp;title=Pure Luxe in Punta Mita" target="_blank" rel="noopener" original-title="Twitter"><i class="fa fa-twitter fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="author-info">
                                <div class="media">
                                    <div class="media-left">
                                        <img alt="avatar" width="100" height="100" src="https://tomap.travelerwp.com/wp-content/uploads/bfi_thumb/people_8-1-37qqt0y3415pa01mbqq4n4.jpg" class="avatar avatar-96 photo origin round">                                            
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Travis Tan</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination clearfix">
                                <nav class="navigation post-navigation" role="navigation" aria-label="Posts">
                                    <h2 class="screen-reader-text">Post navigation</h2>
                                    <div class="nav-links">
                                        <div class="nav-previous"><a href="https://tomap.travelerwp.com/all-aboard-the-rocky-mountaineer/" rel="prev"><span class="meta-nav" aria-hidden="true"><i class="fa fa-angle-left"></i>Previous</span> </a></div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <!--Sidebar-->
                        <aside class="sidebar-right">
                            <div id="search-4" class="sidebar-widget widget_search">
                                <form role="search" method="get" class="search" action="https://tomap.travelerwp.com/">
                                    <input type="text" class="form-control" value="" name="s" placeholder="Search ...">
                                    <input type="hidden" name="post_type" value="post">
                                    <button type="submit">
                                        <i class="input-icon field-icon fa">
                                            <svg height="15px" width="15px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <g fill="#ffffff">
                                                    <path d="M23.245,23.996c-0.2,0-0.389-0.078-0.53-0.22L16.2,17.26c-0.761,0.651-1.618,1.182-2.553,1.579
                                                        c-1.229,0.522-2.52,0.787-3.837,0.787c-1.257,0-2.492-0.241-3.673-0.718c-2.431-0.981-4.334-2.849-5.359-5.262
                                                        c-1.025-2.412-1.05-5.08-0.069-7.51S3.558,1.802,5.97,0.777C7.199,0.254,8.489-0.01,9.807-0.01c1.257,0,2.492,0.242,3.673,0.718
                                                        c2.431,0.981,4.334,2.849,5.359,5.262c1.025,2.413,1.05,5.08,0.069,7.51c-0.402,0.996-0.956,1.909-1.649,2.718l6.517,6.518
                                                        c0.292,0.292,0.292,0.768,0,1.061C23.634,23.918,23.445,23.996,23.245,23.996z M9.807,1.49c-1.115,0-2.209,0.224-3.25,0.667
                                                        C4.513,3.026,2.93,4.638,2.099,6.697c-0.831,2.059-0.81,4.318,0.058,6.362c0.869,2.044,2.481,3.627,4.54,4.458
                                                        c1.001,0.404,2.048,0.608,3.112,0.608c1.115,0,2.209-0.224,3.25-0.667c0.974-0.414,1.847-0.998,2.594-1.736
                                                        c0.01-0.014,0.021-0.026,0.032-0.037c0.016-0.016,0.031-0.029,0.045-0.039c0.763-0.771,1.369-1.693,1.786-2.728
                                                        c0.831-2.059,0.81-4.318-0.059-6.362c-0.868-2.044-2.481-3.627-4.54-4.458C11.918,1.695,10.871,1.49,9.807,1.49z"></path>
                                                </g>
                                            </svg>
                                        </i>
                                    </button>
                                </form>
                            </div>
                            <div id="text-2" class="sidebar-widget widget_text">
                                <div class="sidebar-title">
                                    <h4>ABOUT US</h4>
                                </div>
                                <div class="textwidget">
                                    <p><img class="alignnone wp-image-8013 size-full" src="{{ asset('newpub/images/introduction-far-east-tour-team.jpg') }}" alt="" width="270" height="151"></p>
                                    <p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa</p>
                                </div>
                            </div>
                           
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop