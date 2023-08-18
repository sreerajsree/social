@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <a href="{{ route('admin.platforms.create' ) }}" class="btn btn-primary float-right"><i class="fas fa-plus mr-1"></i>New Platform</a>
    <h1 class="text-dark">Platforms</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">
        <div class="card-header">
            Platform List
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $platforms as $platform )
                        <tr>
                            <td width="10px">{{ $platform->id }}</td>
                            <td>{{ $platform->name }}</td>
                            <td width="12%">
                                <a href="{{ route('admin.platforms.edit', $platform ) }}" class="btn btn-outline-secondary"><i class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%">
                                <form action="{{ route( 'admin.platforms.destroy', $platform ) }}" method="POST" class="delete-platform">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit"><i class="far fa-trash-alt mr-1"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-sm text-muted">
            The <strong>platforms</strong> help us to associate a video shared from an external URL with a lesson. Also, it is used to embed said video within the system.
        </div>
    </div>
@stop

@section('js')

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Delete!',
                'The platform has been removed.',
                'success'
                );
        </script>
    @endif

    <script>

        $('.delete-platform').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure you want to remove this platform?',
            text: "The operation cannot be reversed and the courses that have been assigned to this platform will be shown 'No platform defined'!",
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
