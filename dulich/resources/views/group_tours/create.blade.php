@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Group Tour
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'groupTours.store', 'files' => true]) !!}

                        @include('group_tours.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
