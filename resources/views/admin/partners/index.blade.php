@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <a href="{{ route('admin.partners.create') }}" class="btn btn-primary float-right"><i class="fas fa-plus mr-1"></i>New
        Agreement</a>
    <h1 class="text-dark">Agreements</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">
        <div class="card-header">
            List of Companies
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Name</th>
                        <th>State</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($partners as $partner)
                        <tr>
                            <td class="align-middle" width="15%">

                                @isset($partner->image)
                                    <img id="picture" class="img-fluid" src="{{ Storage::url($partner->image->url) }}"
                                        alt="" style="max-height: 75px;">
                                @else
                                    <img id="picture" class="img-fluid" src="{{ asset('images/courses/logo-cloud.png') }}"
                                        alt="" style="max-height: 75px;">
                                @endisset

                            </td>
                            <td class="align-middle {{ $partner->status == 1 ? 'text-muted' : '' }}">
                                {{ $partner->title }}</td>
                            <td class="align-middle">
                                @switch($partner->status)
                                    @case(1)
                                        <span class="badge py-2 px-2 text-uppercase text-md text-muted" title="Hidden"><i
                                                class="far fa-eye-slash"></i></span>
                                    @break

                                    @case(2)
                                        <span class="badge py-2 px-2 text-uppercase text-md" title="Visible"><i
                                                class="far fa-eye"></i></span>
                                    @break

                                    @default
                                @endswitch
                            </td>
                            <td width="12%" class="align-middle">
                                <a href="{{ route('admin.partners.edit', $partner) }}" class="btn btn-outline-secondary"><i
                                        class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%" class="align-middle">
                                <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST"
                                    class="delete-partner">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit"><i
                                            class="far fa-trash-alt mr-1"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="alert alert-light" role="alert">
                                        So far no companies or agreements have been registered.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-sm text-muted">
                The companies whose status is "VISIBLE" will be displayed on the main page, in the section
                "Partnerships". They refer to those institutions or companies with which there is an agreement or
                agreement.
            </div>
        </div>
    @stop


    @section('js')

        {{-- Delete confirmed --}}
        @if (session('delete') == 'success')
            <script>
                Swal.fire(
                    'Deleted!',
                    'The association has been successfully removed.',
                    'success'
                );
            </script>
        @endif

        <script>
            $('.delete-partner').submit(function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Are you sure you want to delete this company?',
                    text: "The operation cannot be reversed and the information will not be displayed on the page!",
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
