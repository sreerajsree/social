@extends('adminlte::page')

@section('title', 'care.training')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <a href="{{ route('admin.items.create', app()->getLocale() ) }}" class="btn btn-primary float-right"><i class="fas fa-plus mr-1"></i>New Item</a>
    <h1 class="text-dark">Menu Items</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif --}}

    <div class="card">
        <div class="card-header">
            Item List
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Ruta</th>
                        <th>State</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse( $items as $item )
                        <tr>
                            <td width="10px">{{ $item->id }}</td>
                            <td class="align-middle {{ (($item->status == 1) ? 'text-muted' : '') }}">{{ $item->name }}</td>
                            <td class="align-middle {{ (($item->status == 1) ? 'text-muted' : '') }}">{{ $item->link }}</td>
                            <td class="align-middle">
                                @switch($item->status)
                                @case(1)
                                    <span class="badge py-2 px-2 text-uppercase text-md text-muted" title="Hidden"><i class="far fa-eye-slash"></i></span>
                                    @break
                                @case(2)
                                    <span class="badge py-2 px-2 text-uppercase text-md" title="Visible"><i class="far fa-eye"></i></span>
                                    @break
                                @default

                            @endswitch
                            </td>
                            <td width="12%" class="align-middle">
                                <a href="{{ route('admin.items.edit', [app()->getLocale(), $item] ) }}" class="btn btn-outline-secondary"><i class="far fa-edit mr-1"></i>Edit</a>
                            </td>
                            <td width="14%" class="align-middle">
                                <form action="{{ route( 'admin.items.destroy', [app()->getLocale(), $item] ) }}" method="POST" class="delete-item">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit"><i class="far fa-trash-alt mr-1"></i>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-light" role="alert">
                                    So far there is no registered menu item.
                                  </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer text-sm text-muted">
            The <strong>items</strong> refer to the links that will be displayed in the main menu.
        </div>
    </div>
@stop

@section('js')

    {{-- Delete confirmed --}}
    @if (session('delete') == 'success')
        <script>
            Swal.fire(
                'Deleted!',
                'The requested item has been removed.',
                'success'
                );
        </script>
    @endif

    <script>

        $('.delete-item').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure you want to remove this menu item?',
            text: "The operation cannot be reversed and the links to the pages associated with this item will be removed.",
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
