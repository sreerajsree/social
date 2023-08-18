@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <a href="{{ route('admin.roles.create', app()->getLocale() ) }}" class="btn btn-primary float-right"><i class="fas fa-plus mr-1"></i>New Role</a>
    <h1 class="text-dark">Roles</h1>
@stop

@section('content')

    @if( session('rol_created'))
        <div class="alert alert-success" role="alert">
            <strong>Congratulations!</strong> {{session('rol_created')}}
        </div>
    @endif

    {{-- @if( session('rol_destroyed'))
        <div class="alert alert-danger" role="alert">
            <strong>¡Registro eliminado!</strong> {{session('rol_destroyed')}}
        </div>
    @endif --}}

    <div class="card">
        {{-- <div class="card-header">
            <a href="{{ route('admin.roles.create') }}">Añadir nuevo</a>
        </div> --}}
        <div class="card-body shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $roles as $role )
                        @if(  $role->id != 1 )
                        <tr>
                            <td width="10px">{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px">
                                <a class="btn btn-outline-secondary" href="{{ route('admin.roles.edit', $role ) }}">Edit</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.roles.destroy', $role ) }}" method="POST" class="delete-role">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @empty
                        <tr>
                            <td colspan="4" class="text-gray">
                                <div class="info-box bg-gradient-warning">
                                <span class="info-box-icon"><i class="fas fa-info-circle"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">At the moment a role has not been added, click on Add new to create it.</span>
                                </div>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    {{-- Create confirmed --}}
    @if (session('create') == 'success')
    <script>
        Swal.fire(
            'Created!',
            'You have successfully created a new role.',
            'success'
            );
    </script>
    @endif

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Deleted!',
                'The role has been removed',
                'success'
                );
        </script>
    @endif

    <script>

        $('.delete-role').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure you want to delete this role?',
            text: "The operation cannot be reversed and the users that have been assigned to this role will remain 'No defined role' and without the permissions that were assigned!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete!',
            cancelButtonText: 'Cancel'
            }).then((result) => {
            if (result.value) {

                // Submit the form
                this.submit();

            }
            })
        });
    </script>
@stop
