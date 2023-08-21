<section>
    <h1 class="text-2xl font-bold"><i class="far fa-check-square mr-2"></i>Who is this course for?</h1>
    <hr class="mt-2 mb-6">

    @foreach ($course->requirements as $item)
        <article class="card mb-4">
            <div class="card-body bg-gray-100">

                @if ($requirement->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model="requirement.name"
                            class="form-input w-full {{ $errors->has('requirement.name') ? ' border-red-600' : '' }}"
                            type="text" placeholder="Enter Details">
                        @error('requirement.name')
                            <span class="invalid-feedback">
                                <strong class="text-xs text-red-700">{{ $message }}</strong>
                            </span>
                        @enderror
                    </form>
                @else
                    <header class="flex items-center justify-between">
                        <h2 class="text-xl">{{ $item->name }}</h2>

                        <div>
                            <i wire:click="edit({{ $item }})"
                                class="fas fa-edit text-gray-500 cursor-pointer"></i>
                            <i wire:click="destroy({{ $item }})"
                                class="far fa-trash-alt text-red-500 cursor-pointer ml-2"></i>
                        </div>
                    </header>
                @endif

            </div>
        </article>
    @endforeach

    <article class="card">
        <div class="card-body bg-gray-100">
            <form wire:submit.prevent="store">
                <input wire:model="name" type="text"
                    class="form-input w-full rounded {{ $errors->has('name') ? 'border-red-600' : '' }}"
                    placeholder="Add the detail">
                @error('name')
                    <span class="invalid-feedback">
                        <strong class="text-xs text-red-700">{{ $message }}</strong>
                    </span>
                @enderror
                <div class="flex justify-end mt-2">
                    <button type="submit" class="btn btn-primary">Add Details</button>
                </div>
            </form>
        </div>
    </article>

</section>
