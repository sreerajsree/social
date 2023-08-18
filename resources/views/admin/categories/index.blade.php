@extends('adminlte::page')

@section('title', 'Capacítate RD')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1 class="text-dark">Categories</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">       

        <div class="card-header">
            <a href="{{ route('admin.categories.create' ) }}" class="btn btn-primary float-left" data-toggle="tooltip" data-placement="bottom" title="Add a new category">
            <i class="fas fa-plus mr-1"></i>Add Category</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $categories as $category )
                        <tr>
                            <td width="10px">{{ $category->id }}</td>                            
                            <td width="10px" class="text-center" data-toggle="tooltip" data-placement="right" title="{{$category->icon}}">
                                <i class="{{ ($category->icon != '' ? $category->icon : 'fas fa-ban text-red') }}"></i>
                            </td>
                            <td>{{ $category->name }}</td>
                            <!-- button -->
                            <td width="12%">
                                <a href="{{ route('admin.categories.edit', $category ) }}" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="left" title="Edit {{$category->name}}"><i class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%">
                                <form action="{{ route( 'admin.categories.destroy', $category ) }}" method="POST" class="delete-category">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit" data-toggle="tooltip" data-placement="left" title="Delete {{$category->name}}"><i class="far fa-trash-alt mr-1"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-sm text-muted">
            The <strong>categories</strong> allow us to associate a course to a specific category, for a better organization.
        </div>
    </div>
@stop

@section('js')

    <script src="{{ asset('js/admin/categories/form.js') }}"></script>

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Deleted!',
                'The requested category was removed.',
                'success'
                );
        </script>
    @endif

    <script>

        $('.delete-category').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure you want to delete this category?',
            text: "The operation cannot be reversed and the courses that have been assigned to this category will be displayed 'Uncategorized'!",
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
