<div>
    {{-- <x-slot name="course">
        {{ $course->slug }}
    </x-slot> --}}

    <h1 class="text-2xl font-bold"><i class="fas fa-chalkboard-teacher mr-2"></i>{{ __('Modules') }}</h1>
    <hr class="mt-2 mb-6">

    <!-- course sections -->
    @foreach( $course->sections as $key => $item )

        <article class="card mb-6" x-data="{open: true}">
            <div class="card-body bg-gray-100">

                @if($section->id == $item->id)
                    <form wire:submit.prevent="update">
                        <label class="font-bold text-md pb-2">Module Title</label>
                        <input wire:model="section.name" class="form-input w-full {{($errors->has('section.name') ? ' border-red-600' : '')}}" type="text" placeholder="Enter the module title">
                        <p class="text-gray-500 text-sm pt-2">Click on the text box and press Enter to save or stop editing</p>
                        @error('section.name')
                            <span class="invalid-feedback">
                                <strong class="text-xs text-red-700">{{ $message }}</strong>
                            </span>
                        @enderror
                    </form>
                @else
                    <!-- Show instructor sections -->
                    <header class="flex justify-between items-center">
                        <h2 x-on:click="open = !open" class="cursor-pointer text-xl"><strong>{{ __('Module') }} {{ ($key + 1) }}: </strong>{{ $item->name }}</h2>
                        <div>
                            {{-- <i class="fas fa-edit text-gray-500 cursor-pointer" wire:click="edit({{$item}})"></i> --}}
                            <i class="fas fa-edit text-gray-500 cursor-pointer" wire:click="editConfirm({{ $item }})"></i>
                            <i class="far fa-trash-alt text-red-500 cursor-pointer ml-2" wire:click="deleteConfirm({{ $item->id }})"></i>
                        </div>
                    </header>
                    <!-- Show instructor lessons -->
                    <div x-show="open">
                        <!-- when we call a component more than once, we must pass it a key -->
                        @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
                    </div>
                @endif

            </div>
        </article>

    @endforeach

    <div x-data="{ open: false }">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer mb-2 justify-end">
            <i class="far fa-plus-square text-2xl text-blue-600 mr-2"></i>
            <span class="text-gray-500 font-bold">Add Module</span>
        </a>

        <article class="card" x-show="open">
            <div class="card-body bg-gray-100">
                <h2 class="text-xl font-bold mb-4">Add New Module</h2>
                <div class="mb-4">
                    <input wire:model="name" class="form-input w-full rounded {{($errors->has('name') ? ' border-red-600' : '')}}" type="text" placeholder="Enter the module title">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong class="text-xs text-red-700">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button class="btn bg-white text-red-500 hover:bg-red-500 hover:text-white border border-red-500" x-on:click="open = false">Cancel</button>
                    <button class="btn btn-primary ml-2" wire:click="store">Add</button>
                </div>
            </div>
        </article>
    </div>

</div>
