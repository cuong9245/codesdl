<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $groupTour->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $groupTour->Name }}</p>
</div>

<!-- Url Rewrite Field -->
<div class="form-group">
    {!! Form::label('url_rewrite', 'Url Rewrite:') !!}
    <p>{{ $groupTour->url_rewrite }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $groupTour->image }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $groupTour->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $groupTour->updated_at }}</p>
</div>

