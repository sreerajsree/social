@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1 class="text-dark">Subcategories</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">

        <div class="card-header">
            <a href="{{ route('admin.topics.create') }}" class="btn btn-primary float-left" data-toggle="tooltip"
                data-placement="bottom" title="Add a new subcategory">
                <i class="fas fa-plus mr-1"></i>Add Subcategory</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th class="text-center">Parent Category</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topics as $topic)
                        <tr>
                            <td width="10px">{{ $topic->id }}</td>
                            <td width="10px" class="text-center" data-toggle="tooltip" data-placement="right"
                                title="{{ $topic->icon }}">
                                <i class="{{ $topic->icon != '' ? $topic->icon : 'fas fa-ban text-red' }}"></i>
                            </td>
                            <td>{{ $topic->name }}</td>
                            <td class="text-center">{{ $topic->category->name }}</td>
                            <!-- button -->
                            <td width="12%">
                                <a href="{{ route('admin.topics.edit', $topic) }}" class="btn btn-outline-secondary"
                                    data-toggle="tooltip" data-placement="left" title="Edit {{ $topic->name }}"><i
                                        class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <!-- button -->
                            <td width="14%">
                                <form action="{{ route('admin.topics.destroy', $topic) }}" method="POST"
                                    class="delete-topic">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit" data-toggle="tooltip"
                                        data-placement="left" title="Delete {{ $topic->name }}"><i
                                            class="far fa-trash-alt mr-1"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-sm text-muted">
            The <strong>subcategories</strong> allow us to associate a course to a subcategory or topic, and this to its
            time is associated with a specific category, for better organization.
        </div>
    </div>
@stop

@section('js')

    <script src="{{ asset('js/admin/topics/form.js') }}"></script>

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Deleted!',
                'Removed requested subcategory.',
                'success'
            );
        </script>
    @endif

    <script>
        $('.delete-topic').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Are you sure you want to delete this subcategory?',
                text: "The operation cannot be reversed and the courses that have been assigned to this subcategory will be displayed 'No subcategory'!",
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
