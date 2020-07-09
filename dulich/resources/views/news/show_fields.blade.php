<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $news->id }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $news->image }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $news->title }}</p>
</div>

<!-- Summary Field -->
<div class="form-group">
    {!! Form::label('summary', 'Summary:') !!}
    <p>{{ $news->summary }}</p>
</div>

<!-- Tourrelated Field -->
<div class="form-group">
    {!! Form::label('TourRelated', 'Tourrelated:') !!}
    <p>{{ $news->TourRelated }}</p>
</div>

<!-- Detail Field -->
<div class="form-group">
    {!! Form::label('Detail', 'Detail:') !!}
    <p>{{ $news->Detail }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $news->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $news->updated_at }}</p>
</div>

