@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <a href="{{ route( 'admin.prices.create' ) }}" class="btn btn-primary float-right"><i class="fas fa-plus mr-1"></i>New Price</a>
    <h1 class="text-dark">Prices</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">
        <div class="card-header">
            Price List
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
                    @foreach( $prices as $price )
                        <tr>
                            <td width="10px">{{ $price->id }}</td>
                            <td>{{ $price->name }}</td>
                            <td width="12%">
                                <a href="{{ route('admin.prices.edit', $price ) }}" class="btn btn-outline-secondary"><i class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%">
                                <form action="{{ route( 'admin.prices.destroy', $price ) }}" method="POST" class="delete-price">
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
            The <strong>price</strong> or cost of the course. If it is Free, the value must be equal to zero (0).
        </div>
    </div>
@stop


@section('js')

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Delete!',
                'The price has been removed.',
                'success'
                );
        </script>
    @endif

    <script>

        $('.delete-price').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure you want to remove this price?',
            text: "The operation cannot be reversed and the courses that have been assigned to this price will be shown 'Without defined price'!",
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
