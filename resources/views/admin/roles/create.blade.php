@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')
    <h1 class="text-primary">Add New Role</h1>
@stop

@section('content')
    <div class="card">
        {!! Form::open(['route' => 'admin.roles.store']) !!}

            @include('admin.roles.partials.form')

            <div class="card-footer">
                {!! Form::submit('Create Role', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Code working!'); </script>
@stop
