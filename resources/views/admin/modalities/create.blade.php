@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')
    <h1 class="text-primary"><i class="fas fa-plus mr-1"></i>Create Modality</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.modalities.store']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the modality name']) !!}
                </div>

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                {!! Form::submit('create Modality', ['class' => 'btn btn-primary float-right']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
