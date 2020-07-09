<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $commentClient->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $commentClient->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $commentClient->email }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $commentClient->title }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $commentClient->content }}</p>
</div>

<!-- Star Field -->
<div class="form-group">
    {!! Form::label('star', 'Star:') !!}
    <p>{{ $commentClient->star }}</p>
</div>

<!-- Liked Field -->
<div class="form-group">
    {!! Form::label('liked', 'Liked:') !!}
    <p>{{ $commentClient->liked }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $commentClient->status }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $commentClient->date }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $commentClient->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $commentClient->updated_at }}</p>
</div>

