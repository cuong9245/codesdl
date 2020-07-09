<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $programTour->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $programTour->title }}</p>
</div>

<!-- Detail Field -->
<div class="form-group">
    {!! Form::label('detail', 'Detail:') !!}
    <p>{{ $programTour->detail }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $programTour->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $programTour->updated_at }}</p>
</div>

