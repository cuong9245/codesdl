<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $contactsClient->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $contactsClient->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $contactsClient->email }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $contactsClient->message }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $contactsClient->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $contactsClient->updated_at }}</p>
</div>

