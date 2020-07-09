@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Program Tour
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($programTour, ['route' => ['programTours.update', $programTour->id], 'method' => 'patch']) !!}

                        @include('program_tours.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection