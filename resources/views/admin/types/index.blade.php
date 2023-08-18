@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <a href="{{ route( 'admin.types.create' ) }}" class="btn btn-primary float-right"><i class="fas fa-plus mr-1"></i>New Type</a>
    <h1 class="text-dark">Course Types</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">
        <div class="card-header">
            List of course types
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
                    @foreach( $types as $type )
                        <tr>
                            <td width="10px">{{ $type->id }}</td>
                            <td>{{ $type->name }}</td>
                            <td width="12%">
                                <a href="{{ route('admin.types.edit', $type ) }}" class="btn btn-outline-secondary"><i class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%">
                                <form action="{{ route( 'admin.types.destroy', $type ) }}" method="POST" class="delete-type">
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
            <strong>Types</strong> are used to differentiate between a learning path, module, or video course.
        </div>
    </div>
@stop

@section('js')

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Deleted!',
                'The requested course type has been removed.',
                'success'
                );
        </script>
    @endif

    <script>

        $('.delete-type').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure you want to delete this type of course?',
            text: "The operation cannot be reversed and the courses that have been assigned to this type of course will be displayed 'No type defined'!",
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

