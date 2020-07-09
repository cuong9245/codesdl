@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Faqs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($faqs, ['route' => ['faqs.update', $faqs->id], 'method' => 'patch']) !!}

                        @include('faqs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection