<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $rewriteWord->id }}</p>
</div>

<!-- Word Field -->
<div class="form-group">
    {!! Form::label('word', 'Word:') !!}
    <p>{{ $rewriteWord->word }}</p>
</div>

<!-- Rewrite Field -->
<div class="form-group">
    {!! Form::label('rewrite', 'Rewrite:') !!}
    <p>{{ $rewriteWord->rewrite }}</p>
</div>

<!-- Page Field -->
<div class="form-group">
    {!! Form::label('page', 'Page:') !!}
    <p>{{ $rewriteWord->page }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $rewriteWord->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $rewriteWord->updated_at }}</p>
</div>

