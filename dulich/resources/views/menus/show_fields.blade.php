<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $menu->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $menu->Name }}</p>
</div>

<!-- Originalmenu Field -->
<div class="form-group">
    {!! Form::label('originalMenu', 'Originalmenu:') !!}
    <p>{{ $menu->originalMenu }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('Link', 'Link:') !!}
    <p>{{ $menu->Link }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $menu->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $menu->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $menu->updated_at }}</p>
</div>

