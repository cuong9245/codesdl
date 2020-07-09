<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Code', 'Code:') !!}
    {!! Form::text('Code', null, ['class' => 'form-control']) !!}
</div>

<!-- Departureday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departureDay', 'Departureday:') !!}
    {!! Form::text('departureDay', null, ['class' => 'form-control', 'autocomplete'=>'off']) !!}
</div>

<!-- Departuretime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departureTime', 'Departuretime:') !!}
    {!! Form::text('departureTime', null, ['class' => 'form-control', 'id'=>'timepicker_alt_input', 'autocomplete'=>'off']) !!}
</div>

<!-- Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Time', 'Time:') !!}
    {!! Form::text('Time', null, ['class' => 'form-control']) !!}
</div>

<!-- Startplace Field -->
<div class="form-group col-sm-6">
    {!! Form::label('startPlace', 'Startplace:') !!}
    {!! Form::text('startPlace', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Max Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max', 'Max:') !!}
    {!! Form::number('max', null, ['class' => 'form-control']) !!}
</div>

<!-- Discountprice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discountPrice', 'Discountprice:') !!}
    {!! Form::text('discountPrice', null, ['class' => 'form-control']) !!}
</div>

<!-- Summary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Summary', 'Summary:') !!}
    {!! Form::text('Summary', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control', 'id'=>'editor']) !!}
</div>

<!-- Booked Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booked', 'Booked:') !!}
    {!! Form::text('booked', null, ['class' => 'form-control', 'disabled']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::select('city', $city, null, ['class' => 'form-control']) !!}
</div>


<!-- Group Tour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('groupTour', 'GroupTour:') !!}
    {!! Form::select('groupTour', $GroupTour, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tours.index') }}" class="btn btn-default">Cancel</a>
</div>


