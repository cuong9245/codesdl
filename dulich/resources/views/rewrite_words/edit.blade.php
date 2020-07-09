@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Rewrite Word
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($rewriteWord, ['route' => ['rewriteWords.update', $rewriteWord->id], 'method' => 'patch']) !!}

                        @include('rewrite_words.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection