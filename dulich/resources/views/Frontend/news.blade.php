@extends('Frontend.master')
<!-- list-tour -->
@section('content')
<div class="container n3-news mg-bot40">
    <div class="row">
        <div class="col-xs-12 mg-bot30">
            <div class="title"><h1>TIN TỨC DU LỊCH</h1></div>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 l">
            @foreach($news as $news)
            <div class="row mg-bot30">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mg-bot">
                    <a href="{{ route('newsDetail', ['id' => $news->url_rewrite])  }}" title="{!! $news->title !!}">
                        <img src="{!! $news->image !!}" alt="{!! $news->title !!}" style="width:100%"></a>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="frame-news">
                        <div class="frame-top">
                            <h2 class="news-title-l">
                                <a href="{{ route('newsDetail', ['id' => $news->url_rewrite])  }}" title="Vẻ đẹp Thụy Sĩ vào mùa đông" class="dot-dot cut-name" style="overflow-wrap: break-word;">{!! $news->title !!}</a>
                            </h2>
                            <div class="frame-date">
                                <div class="f-left"><img src="{{ asset('Frontend/Content/themeHe/img/i-date.png') }}" alt="date"></div>
                                <div class="f-left date">{!! ($news->created_at)->format('m/d/Y') !!}</div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="frame-bot">
                            {!! $news->detail !!}
                            <div class="text-right">
                                <a href="/tin-tuc-du-lich/ve-dep-thuy-si-vao-mua-dong-v13073.aspx" class="view_more" title="Vẻ đẹp Thụy Sĩ vào mùa đông">Xem thêm &nbsp;<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@stop