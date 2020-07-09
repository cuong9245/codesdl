<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $tour->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $tour->Name }}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('Code', 'Code:') !!}
    <p>{{ $tour->Code }}</p>
</div>

<!-- Departureday Field -->
<div class="form-group">
    {!! Form::label('departureDay', 'Departureday:') !!}
    <p>{{ $tour->departureDay }}</p>
</div>

<!-- Departuretime Field -->
<div class="form-group">
    {!! Form::label('departureTime', 'Departuretime:') !!}
    <p>{{ $tour->departureTime }}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('Time', 'Time:') !!}
    <p>{{ $tour->Time }}</p>
</div>

<!-- Startplace Field -->
<div class="form-group">
    {!! Form::label('startPlace', 'Startplace:') !!}
    <p>{{ $tour->startPlace }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $tour->price }}</p>
</div>

<!-- Max Field -->
<div class="form-group">
    {!! Form::label('max', 'Max:') !!}
    <p>{{ $tour->max }}</p>
</div>

<!-- Discountprice Field -->
<div class="form-group">
    {!! Form::label('discountPrice', 'Discountprice:') !!}
    <p>{{ $tour->discountPrice }}</p>
</div>

<!-- Summary Field -->
<div class="form-group">
    {!! Form::label('Summary', 'Summary:') !!}
    <p>{{ $tour->Summary }}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    <p>{{ $tour->note }}</p>
</div>

<!-- Booked Field -->
<div class="form-group">
    {!! Form::label('booked', 'Booked:') !!}
    <p>{{ $tour->booked }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'City:') !!}
    <p>{!! $tour->citytour->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tour->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tour->updated_at }}</p>
</div>

