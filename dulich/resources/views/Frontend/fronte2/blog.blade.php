@extends('Frontend.layout')

@section('content')

 <style>
                
    .st_1592552423{
        background-image: url(https://tomap.travelerwp.com/wp-content/uploads/2018/12/united.jpg) !important;
    }
.vc_custom_1542265299369{background-color: #ffffff !important;}.vc_custom_1543220007372{margin-bottom: 20px !important;}.vc_custom_1543221092622{border-left-width: 3px !important;padding-left: 20px !important;border-left-color: #5191fa !important;border-left-style: solid !important;}.vc_custom_1543221080532{border-left-width: 3px !important;padding-left: 20px !important;border-left-color: #5191fa !important;border-left-style: solid !important;}.vc_custom_1544512778823{margin-bottom: 15px !important;border-left-width: 3px !important;padding-left: 20px !important;border-left-color: #5191fa !important;border-left-style: solid !important;}.vc_custom_1543220015251{margin-bottom: 20px !important;}.vc_custom_1543220022219{margin-bottom: 20px !important;}.vc_custom_1543220028834{margin-bottom: 20px !important;}            </style>

<style id="stassets_footer_css">

    
</style>

<div id="st-content-wrapper" class="search-result-page">
    <div class="banner st_1592552423 ">
        <div class="container">
            <h1>
                Blog                    
            </h1>
        </div>
    </div>
    <div class="st-breadcrumb hidden-xs ">
        <div class="container">
            <ul>
                <li><a href="https://tomap.travelerwp.com">Home</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="st-blog">
            <div class="row">
                <div class="col-sm-9 col-xs-12 ">
                    <div class="content">
                        @if(count($new))
                        @foreach($new as $news)
                        <div class="blog-wrapper">
                            <div class="article post post-8012 type-post status-publish format-image has-post-thumbnail hentry category-parks-and-carnivals tag-beaches tag-beauty tag-cultural post_format-post-format-image">
                                <div class="header">
                                    <header class="post-header">
                                        <a class="hover-img" href="{{ route('tinChiTiet',['id'=>$news->url_rewrite]) }}">
                                        <img width="870" height="500" src="{{ $news->image }}" class="attachment-870x500 size-870x500 wp-post-image" alt="{{ $news->title }}">    </a>
                                    </header>
                                    <!-- <div class="cate">
                                        <ul>
                                            <li style="background: #f9ca24"><a href="https://tomap.travelerwp.com/category/parks-and-carnivals/">Parks and Carnivals</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="post-inner">
                                    <h4 class="post-title"><a class="text-darken" href="{{ route('tinChiTiet',['id'=>$news->url_rewrite]) }}">{{ $news->title }}</a></h4>
                                    <div class="meta">
                                        <ul>
                                            
                                            <li>
                                                {{ $news->created_at->format('d/m/Y')  }}       
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="post-desciption">
                                       {!!  $news->summary !!}
                                    </div>
                                    <a class="btn-readmore" href="{{ route('tinChiTiet',['id'=>$news->url_rewrite]) }}">Read More</a>
                                </div>
                            </div>  
                        </div>
                        @endforeach
                        {!!  $new->links() !!}
                        @endif
                       

                    </div>
                </div>
                <div class="col-sm-3 col-xs-12">
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
                       <!--  <div id="tag_cloud-2" class="sidebar-widget widget_tag_cloud">
                            <div class="sidebar-title">
                                <h4>TAGS</h4>
                            </div>
                            <div class="tagcloud"><a href="https://tomap.travelerwp.com/tag/beaches/" class="tag-cloud-link tag-link-103 tag-link-position-1" style="font-size: 22pt;" aria-label="beaches (2 items)">beaches</a>
                                <a href="https://tomap.travelerwp.com/tag/beauty/" class="tag-cloud-link tag-link-104 tag-link-position-2" style="font-size: 22pt;" aria-label="Beauty (2 items)">Beauty</a>
                                <a href="https://tomap.travelerwp.com/tag/carnivals/" class="tag-cloud-link tag-link-100 tag-link-position-3" style="font-size: 22pt;" aria-label="Carnivals (2 items)">Carnivals</a>
                                <a href="https://tomap.travelerwp.com/tag/cultural/" class="tag-cloud-link tag-link-105 tag-link-position-4" style="font-size: 22pt;" aria-label="Cultural (2 items)">Cultural</a>
                                <a href="https://tomap.travelerwp.com/tag/mountains/" class="tag-cloud-link tag-link-36 tag-link-position-5" style="font-size: 8pt;" aria-label="Mountains (1 item)">Mountains</a>
                                <a href="https://tomap.travelerwp.com/tag/museums/" class="tag-cloud-link tag-link-106 tag-link-position-6" style="font-size: 8pt;" aria-label="Museums (1 item)">Museums</a>
                                <a href="https://tomap.travelerwp.com/tag/national/" class="tag-cloud-link tag-link-101 tag-link-position-7" style="font-size: 22pt;" aria-label="National (2 items)">National</a>
                                <a href="https://tomap.travelerwp.com/tag/parks/" class="tag-cloud-link tag-link-102 tag-link-position-8" style="font-size: 22pt;" aria-label="Parks (2 items)">Parks</a>
                                <a href="https://tomap.travelerwp.com/tag/tiptoe/" class="tag-cloud-link tag-link-97 tag-link-position-9" style="font-size: 8pt;" aria-label="Tiptoe (1 item)">Tiptoe</a>
                                <a href="https://tomap.travelerwp.com/tag/tulips/" class="tag-cloud-link tag-link-98 tag-link-position-10" style="font-size: 8pt;" aria-label="Tulips (1 item)">Tulips</a>
                                <a href="https://tomap.travelerwp.com/tag/washington/" class="tag-cloud-link tag-link-99 tag-link-position-11" style="font-size: 8pt;" aria-label="Washington (1 item)">Washington</a>
                            </div>
                        </div> -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>

@stop