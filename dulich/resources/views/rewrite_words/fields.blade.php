<!-- Word Field -->
<?php  
	
	$page = array('home.blade.php'=>'Trang chủ', 'news.blade.php'=>'Tin tức', 'contact.blade.php'=>'Liên hệ', 'timetour.blade.php'=>'Tour giờ chót', 'discount.blade.php'=>'Ưu đãi thanh toán trực tuyến','promotion.blade.php'=>'Khuyến mãi chi tiết','detail.blade.php'=>'Tour chi tiết','city.blade.php'=>'Điểm đến yêu thích')

?>
<div class="form-group col-sm-6">
    {!! Form::label('word', 'Word:') !!}
    {!! Form::text('word', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Rewrite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rewrite', 'Rewrite:') !!}
    {!! Form::text('rewrite', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Page Field -->
<div class="form-group col-sm-6">
    {!! Form::label('page', 'Page:') !!}
   	{!! Form::select('page', $page, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rewriteWords.index') }}" class="btn btn-default">Cancel</a>
</div>
