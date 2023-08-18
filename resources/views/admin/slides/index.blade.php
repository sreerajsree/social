@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <a href="{{ route('admin.slides.create' ) }}" class="btn btn-primary float-right"><i class="fas fa-plus mr-1"></i>New Slide</a>
    <h1 class="text-dark">Sliders</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">
        <div class="card-header">
            slide list
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $slides as $slide )
                        <tr>
                            <td width="10px">{{ $slide->id }}</td>
                            <td>{{ $slide->title }}</td>
                            <td width="12%">
                                <a href="{{ route('admin.slides.edit', $slide ) }}" class="btn btn-outline-secondary"><i class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%">
                                <form action="{{ route( 'admin.slides.destroy', $slide ) }}" method="POST" class="delete-slide">
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
            The <strong>slides</strong> are shown on the cover, in the Hero section, if a slide is not created, one will be assigned by default.
        </div>
    </div>
@stop

@section('js')

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Delete!',
                'The slide has been removed.',
                'success'
                );
        </script>
    @endif

    <script>

        $('.delete-slide').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure you want to delete this slide?',
            text: "The operation cannot be reversed and this slide will not be shown on the front page'!",
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
