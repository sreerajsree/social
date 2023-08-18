@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')
    <a href="{{ route( 'admin.prices.create' ) }}" class="btn btn-secondary float-right"><i class="fas fa-plus mr-1"></i>New Price</a>
    <h1 class="text-primary"><i class="far fa-edit mr-1"></i>Edit Price</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($price, ['route' => ['admin.prices.update', $price ], 'method' => 'put' ]) !!}
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

                {!! Form::submit('Update Price', ['class' => 'btn btn-primary float-right']) !!}
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
