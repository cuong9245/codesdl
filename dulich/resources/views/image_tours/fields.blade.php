<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

@if(!empty($id))

<input type="" name="imageTour_id" class="hide" value="{{ $id }}">

@endif

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('imageTours.index') }}" class="btn btn-default">Cancel</a>
</div>
