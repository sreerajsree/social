@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')
    <h1 class="text-primary"><i class="fas fa-plus mr-1"></i>Add Label</h1>
@stop

@section('content')
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.tags.store', 'autocomplete' => 'off']) !!}

                    @include('admin.tags.partials.form')

                    <a href="{{ url()->previous() }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                        title="Skip and return to previous view"><i class="fas fa-arrow-circle-left mr-2"></i>Return
                        back</a>

                    {!! Form::submit('Add Label', [
                        'class' => 'btn btn-primary float-right',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'left',
                        'title' => 'add this tag',
                    ]) !!}
                    {!! Form::close() !!}
                </div>
            </div>


        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- jQuery-Plugin-stringToSlug --}}
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script src="{{ asset('js/admin/tags/form.js') }}"></script>

@stop
