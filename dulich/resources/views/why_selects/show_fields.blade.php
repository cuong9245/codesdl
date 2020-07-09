<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $whySelect->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $whySelect->name }}</p>
</div>

<!-- Detail Field -->
<div class="form-group">
    {!! Form::label('detail', 'Detail:') !!}
    <p>{{ $whySelect->detail }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $whySelect->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $whySelect->updated_at }}</p>
</div>

