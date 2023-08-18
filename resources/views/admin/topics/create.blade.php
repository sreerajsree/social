@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')
    <h1 class="text-primary"><i class="fas fa-plus mr-1"></i>Add Subcategory</h1>
@stop

@section('content')
    <div class="row">
        <div class="col col-md-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.topics.store', 'autocomplete' => 'off']) !!}

                    @include('admin.topics.partials.form')

                    <a href="{{ url()->previous() }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                        title="Skip and return to previous view"><i class="fas fa-arrow-circle-left mr-2"></i>Return
                        back</a>

                    {!! Form::submit('Add Subcategory', [
                        'class' => 'btn btn-primary float-right',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'left',
                        'title' => 'Add this subcategory',
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

    <script src="{{ asset('js/admin/topics/form.js') }}"></script>

@stop
