@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')
    <h1 class="text-primary"><i class="fas fa-user-edit mr-2"></i>Assign Roles</h1>
@stop

@section('content')

    <div class="container">

        @if (session('rol_granted'))
            <div class="alert alert-success" role="alert">
                <strong>Filled!</strong> {{ session('rol_granted') }}
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <span class="text-primary text-uppercase">User</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <label class="text-muted">Name: </label>
                        <p class="form-control">{{ $user->name }} {{ $user->lastname }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <label class="text-muted">Mail: </label>
                        <p class="form-control">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="card">
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            <div class="card-header">
                <span class="text-primary text-uppercase">Roles</span>
            </div>
            <div class="card-body">

                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach

            </div>
            <div class="card-footer">
                {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Code working!');
    </script>
@stop
