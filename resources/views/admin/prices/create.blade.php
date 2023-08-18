@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')
    <h1 class="text-primary"><i class="fas fa-plus mr-1"></i>Create Price</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.prices.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Alias') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter an alias for this price']) !!}
            </div>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-group">
                {!! Form::label('value', 'Value') !!}
                {!! Form::number('value', null, ['class' => 'form-control', 'placeholder' => 'Enter the price value']) !!}
            </div>
            @error('value')
                <span class="text-danger">{{ $message }}</span>
            @enderror

            {!! Form::submit('Create Price', ['class' => 'btn btn-primary float-right']) !!}
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
