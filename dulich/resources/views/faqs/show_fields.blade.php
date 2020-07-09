<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $faqs->id }}</p>
</div>

<!-- Question Field -->
<div class="form-group">
    {!! Form::label('question', 'Question:') !!}
    <p>{{ $faqs->question }}</p>
</div>

<!-- Answer Field -->
<div class="form-group">
    {!! Form::label('answer', 'Answer:') !!}
    <p>{{ $faqs->answer }}</p>
</div>

<!-- Tourid Field -->
<div class="form-group">
    {!! Form::label('tourId', 'Tourid:') !!}
    <p>{{ $faqs->tourId }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $faqs->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $faqs->updated_at }}</p>
</div>

