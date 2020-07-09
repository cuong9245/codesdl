
<?php 

 $page = array('home.blade.php'=>'Trang chủ', 'news.blade.php'=>'Tin tức', 'contact.blade.php'=>'Liên hệ', 'timetour.blade.php'=>'Tour giờ chót', 'discount.blade.php'=>'Ưu đãi thanh toán trực tuyến','promotion.blade.php'=>'Khuyến mãi chi tiết','detail.blade.php'=>'Tour chi tiết','city.blade.php'=>'Điểm đến yêu thích') ;
 ?>
<div class="table-responsive">
    <table class="table" id="rewriteWords-table">
        <thead>
            <tr>
                <th>Word</th>
        <th>Rewrite</th>
        <th>Page</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rewriteWords as $rewriteWord)
            <tr>
                <td>{{ $rewriteWord->word }}</td>
            <td>{{ $rewriteWord->rewrite }}</td>
            <td>{{ $page[$rewriteWord->page] }}</td>
                <td>
                    {!! Form::open(['route' => ['rewriteWords.destroy', $rewriteWord->id], 'method' => 'delete']) !!}
                    
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
