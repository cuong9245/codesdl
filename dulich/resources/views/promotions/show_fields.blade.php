<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $promotion->id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('Title', 'Title:') !!}
    <p>{{ $promotion->Title }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $promotion->image }}</p>
</div>

<!-- Detail Field -->
<div class="form-group">
    {!! Form::label('Detail', 'Detail:') !!}
    <p>{{ $promotion->Detail }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $promotion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $promotion->updated_at }}</p>
</div>

