@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Group Tour
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('group_tours.show_fields')
                    <a href="{{ route('groupTours.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
