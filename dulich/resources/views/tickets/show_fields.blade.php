<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ticket->id }}</p>
</div>

<!-- From Field -->
<div class="form-group">
    {!! Form::label('from', 'From:') !!}
    <p>{{ $ticket->from }}</p>
</div>

<!-- To Field -->
<div class="form-group">
    {!! Form::label('to', 'To:') !!}
    <p>{{ $ticket->to }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $ticket->type }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $ticket->price }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ticket->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ticket->updated_at }}</p>
</div>

