@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1 class="text-dark">Tags</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">

        <div class="card-header">
            <a href="{{ route('admin.tags.create') }}" class="btn btn-primary float-left" data-toggle="tooltip"
                data-placement="bottom" title="Add a new tag">
                <i class="fas fa-plus mr-1"></i>Add Label</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th class="text-center">Parent Subcategory</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td width="10px">{{ $tag->id }}</td>
                            <td width="10px" class="text-center" data-toggle="tooltip" data-placement="right"
                                title="{{ $tag->icon }}">
                                <i class="{{ $tag->icon != '' ? $tag->icon : 'fas fa-ban text-red' }}"></i>
                            </td>
                            <td>{{ $tag->name }}</td>
                            <td class="text-center">{{ $tag->topic->name }}</td>
                            <td width="12%">
                                <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-outline-secondary"
                                    data-toggle="tooltip" data-placement="left" title="Edit {{ $tag->name }}"><i
                                        class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST" class="delete-tag">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit" data-toggle="tooltip"
                                        data-placement="left" title="Delete {{ $tag->name }}"><i
                                            class="far fa-trash-alt mr-1"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-sm text-muted">
            <strong>Labels</strong> allow us to associate a course with a label, and this in turn is associated with a
            specific subcategory, for better organization.
        </div>
    </div>
@stop

@section('js')

    <script src="{{ asset('js/admin/tags/form.js') }}"></script>

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Delete!',
                'The requested tag has been removed.',
                'success'
            );
        </script>
    @endif

    <script>
        $('.delete-tag').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Are you sure you want to remove this tag?',
                text: "The operation cannot be reversed and the courses that have been assigned to this label will be displayed 'No label'!",
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
