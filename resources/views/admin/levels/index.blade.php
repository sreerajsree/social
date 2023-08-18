@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <a href="{{ route('admin.levels.create' ) }}" class="btn btn-primary float-right"><i class="fas fa-plus mr-1"></i>New level</a>
    <h1 class="text-dark">Levels</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            List of Levels
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
                    @foreach( $levels as $level )
                        <tr>
                            <td width="10px">{{ $level->id }}</td>
                            <td>{{ $level->name }}</td>
                            <td width="12%">
                                <a href="{{ route('admin.levels.edit', $level ) }}" class="btn btn-outline-secondary"><i class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%">
                                <form action="{{ route( 'admin.levels.destroy', $level ) }}" method="POST" class="delete-level">
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
            <strong>Levels</strong> are used to assign a course the minimum level a user requires to apply.
        </div>
    </div>
@stop

@section('js')

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Deleted!',
                'The requested level has been removed.',
                'success'
                );
        </script>
    @endif

    <script>

        $('.delete-level').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure you want to remove this learning level?',
            text: "The operation cannot be reversed and the courses that have been assigned to this level will be displayed 'No level defined'!",
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
