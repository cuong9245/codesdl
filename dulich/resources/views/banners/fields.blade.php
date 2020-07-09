<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
@if(!empty($banner))
	<div class="col-sm-6 disbanner">
		<div class="col-sm-3"><img src="{!!  $banner->image !!}" alt="{!! $banner->image !!}" class="img-responsive" width="150" height="150"></div>
		<div class="edit-image col-sm-3" id="image-edit">
			<input type="button" value="sửa ảnh">
		</div>
	</div>
	
	<div id="add" class="col-sm-6"></div>
	<div class="form-group col-sm-6 addClass" id="remove">
	    {!! Form::label('image', 'Image:') !!}
	    {!! Form::file('image') !!}
	</div>

@else

<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
@endif

<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('banners.index') }}" class="btn btn-default">Cancel</a>
</div>
