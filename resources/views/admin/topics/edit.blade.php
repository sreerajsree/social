@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')
    <h1 class="text-primary"><i class="far fa-edit mr-1"></i>Edit Subcategory</h1>
@stop

@section('content')

    <div class="row">
        <div class="col col-md-12">

            @if (session('info'))
                <div class="alert alert-success">{{ session('info') }}</div>
            @endif

            <div class="card">
                <div class="card-body">
                    {!! Form::model($topic, ['route' => ['admin.topics.update', $topic], 'method' => 'put']) !!}

                    @include('admin.topics.partials.form')

                    <a href="{{ url()->previous() }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                        title="Ignore the changes and go back to the previous view"><i
                            class="fas fa-arrow-circle-left mr-2"></i>Go back</a>

                    {!! Form::submit(trans('Guardar cambios'), [
                        'class' => 'btn btn-primary float-right',
                        'data-toggle' => 'tooltip',
                        'data-placement' => 'left',
                        'title' => 'Save changes made to this subcategory',
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
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script src="{{ asset('js/admin/topics/form.js') }}"></script>
@stop
