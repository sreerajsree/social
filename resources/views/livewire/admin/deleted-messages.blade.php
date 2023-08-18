<div>
    <div class="card">

        <div class="card-header bg-white">
            <div class="row mb-4">
                <div class="col col-md-6">
                    <h4 class="font-weight-bold">
                        {{ $componentName }} | {{ $pageTitle }}
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12" x-data="{ isTyped: false }">
                    <input class="form-control w-100" type="search" name="searchContact" id="searchContact"
                        x-ref="searchField" x-on:input.debounce.400ms="isTyped = ($event.target.value != '')"
                        placeholder='Look for...' autocomplete="off" wire:keydown="clear"
                        wire:model.debounce.500ms="search"
                        x-on:keydown.window.prevent.slash="$refs.searchContact.focus()"
                        x-on:keyup.escape="isTyped = false; $refs.searchContact.blur()">
                </div>
            </div>
        </div>

        @if ($deleted_messages->count())

            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-white bg-light">
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th class="text-center">Mail</th>
                            <th class="text-center">Telephone</th>
                            <th class="text-center">Options</th>
                            {{-- <th></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deleted_messages as $deleted_message)
                            <tr>
                                <td class="align-middle">{{ $deleted_message->updated_at }}</td>
                                <td class="align-middle">{{ $deleted_message->name }}</td>
                                <td class="align-middle text-center">{{ $deleted_message->email }}</td>
                                <td class="align-middle text-center">
                                    {{ $deleted_message->phone != null ? $deleted_message->phone : 'N/D' }}</td>
                                <!-- button -->
                                <td class="align-middle text-center d-flex flex-nowrap">


                                    <button class="btn btn-outline-secondary mr-2"
                                        wire:click="Show({{ $deleted_message->id }})"><i
                                            class="far fa-envelope mr-1"></i>Open</button>

                                    <button class="btn btn-outline-info mr-2"
                                        wire:click="Restore({{ $deleted_message->id }})"><i
                                            class="fas fa-trash-restore mr-1"></i>To restore</button>

                                    <button class="btn btn-outline-danger"
                                        wire:click="deleteMessageConfirm({{ $deleted_message->id }})"><i
                                            class="far fa-trash-alt mr-2"></i>Eliminate</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-4">
                {{ $deleted_messages->links() }}
            </div>

            <div class="card-footer text-sm text-muted">
                These <strong>messages</strong> son visualizados desde el buzón: <strong
                    class="text-primary">test@care.training.com</strong>. You can view the messages in more detail by opening
                    said mailbox. Keep in mind that the messages you delete on this platform will only be deleted from the
                    system, but they will still be in the mailbox.
            </div>
        @else
            <div class="alert alert-light" role="alert">
                <strong>Nothing here!</strong>
            </div>
        @endif


    </div>

    @include('livewire.admin.partials.message-modal')

</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.livewire.on('show-modal', msg => {
            $('#modal').modal('show');
        });
    });
</script>
