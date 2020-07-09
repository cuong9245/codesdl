<!-- Name Field -->
<?php  
    $originalMenu = array("Trang chủ","About", "blog", "become local express", "contact","Faqs", "Tour");
    $active       = array("hide", "show");
?>
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Originalmenu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('originalMenu', 'Originalmenu:') !!}
    {!! Form::select('originalMenu', $originalMenu, null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Link', 'Link:') !!}
    {!! Form::text('Link', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active:') !!}
    {!! Form::select('active', $active, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('menus.index') }}" class="btn btn-default">Cancel</a>
</div>
