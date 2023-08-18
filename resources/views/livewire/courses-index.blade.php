<div>
    <div class="container grid grid-cols-1 md:grid-cols-4 gap-10" style="margin-top: -170px">
        @foreach ($featuredcourses as $fc)
            <a href="{{ route('courses.show', [app()->getLocale(), $fc] ) }}">
                <div
                    class='w-full max-w-md  mx-auto bg-white shadow-xl overflow-hidden cursor-pointer border-purple-700 bd hover:shadow-2xl'>
                    <div class='max-w-md mx-auto'>
                        <div class='h-52'
                            style='background-image:url({{ Storage::url( $fc->image->url ) }});background-size:cover;background-position:center'>
                        </div>
                        <div class='p-4'>
                            <p class='text-gray-700 text-2xl leading-7 my-1'>{{ $fc->title }}</p>
                            <div class='flex justify-between my-10 text-lg items-center'>
                                <div class="flex items-center"><i class="far fa-clock mr-1"></i>{{ $fc->duration_in_minutes }}</div>
                                <div class="flex items-center">From <span class="font-bold text-3xl ml-1">€1.49</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
    </div>
    <!-- Filters -->
    <div class="bg-gray-200 py-4 mt-20 mb-16 z-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <div class="relative mr-4 flex items-center">
                {{-- <i class="fas fa-sliders-h text-gray-500 text-2xl md:text-sm md:mr-2"></i> --}}
                <i class="fas fa-filter text-gray-500 text-2xl md:text-sm md:mr-2"></i>
                <span class="hidden md:inline">{{ __('Filter by') }}</span>
            </div>

            <!-- dropdown categories -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded text-gray-700 overflow-hidden focus:outline-none"
                    x-on:click="open = true">
                    <i class="fas fa-tags text-2xl md:text-sm md:mr-2"></i><span
                        class="hidden md:inline">{{ __('Category') }}<i
                            class="fas fa-caret-down text-sm ml-2"></i></span>
                </button>
                <!-- dropdown body -->
                <div class="absolute left-0 w-40 mt-2 py-2 bg-white rounded shadow" x-show="open"
                    x-on:click.away="open = false">
                    @foreach ($categories as $category)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-700 hover:bg-blue-600 hover:text-white"
                            wire:click="$set('category_id', {{ $category->id }} )" x-on:click="open = false">
                            {{ __($category->name) }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- dropdown types -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded text-gray-700 overflow-hidden focus:outline-none"
                    x-on:click="open = true">
                    <i class="fas fa-photo-video text-2xl md:text-sm md:mr-2"></i><span
                        class="hidden md:inline">{{ __('Type') }}<i
                            class="fas fa-caret-down text-sm ml-2"></i></span>
                </button>
                <!-- dropdown body -->
                <div class="absolute left-0 w-60 mt-2 py-2 bg-white rounded shadow" x-show="open"
                    x-on:click.away="open = false">
                    @foreach ($types as $type)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-700 hover:bg-blue-600 hover:text-white"
                            wire:click="$set('type_id', {{ $type->id }} )" x-on:click="open = false">
                            {{ __($type->name) }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- dropdown levels -->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded text-gray-700 overflow-hidden focus:outline-none"
                    x-on:click="open = true">
                    <i class="fas fa-layer-group text-2xl md:text-sm md:mr-2"></i><span
                        class="hidden md:inline">{{ __('Level') }}<i
                            class="fas fa-caret-down text-sm ml-2"></i></span>
                </button>
                <!-- dropdown body -->
                <div class="absolute left-0 w-40 mt-2 py-2 bg-white rounded shadow" x-show="open"
                    x-on:click.away="open = false">
                    @foreach ($levels as $level)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-700 hover:bg-blue-600 hover:text-white"
                            wire:click="$set('level_id', {{ $level->id }} )" x-on:click="open = false">
                            {{ __($level->name) }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- dropdown modalities -->
            {{-- <div class="relative mr-4" x-data="{ open: false }">
                <button class="block bg-white shadow h-12 px-4 rounded text-gray-700 overflow-hidden focus:outline-none"
                    x-on:click="open = true">
                    <i class="fas fa-laptop-house text-2xl md:text-sm md:mr-2"></i><span
                        class="hidden md:inline">{{ __('Modality') }}<i
                            class="fas fa-caret-down text-sm ml-2"></i></span>
                </button>
                <!-- dropdown body -->
                <div class="absolute left-0 w-60 mt-2 py-2 bg-white rounded shadow" x-show="open"
                    x-on:click.away="open = false">
                    @foreach ($modalities as $modality)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-700 hover:bg-blue-600 hover:text-white"
                            wire:click="$set('modality_id', {{ $modality->id }} )" x-on:click="open = false">
                            {{ __($modality->name) }}
                        </a>
                    @endforeach
                </div>
            </div> --}}

            <!-- Clear filters -->
            <button class="bg-blue-100 shadow h-12 px-4 rounded text-gray-500 focus:outline-none mr-4"
                wire:click="resetFilters">
                <i class="fas fa-eraser text-2xl md:text-sm md:mr-2"></i><span
                    class="hidden md:inline">{{ __('Clear filters') }}</span>
            </button>

        </div>
    </div>

    <!-- Latest Courses -->
    <section class="pt-24" style="background: #EBEFF9">
        <h2 class="text-center text-gray-600 text-xl sm:text-3xl md:text-5xl mb-20">
            {{ __('Find the right online course for your staff') }}</h2>
        <!-- courses -->
        <div
            class="container mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach
        </div>
    </section>

    <!-- Pagination -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-4 pb-8">
        {{ $courses->links() }}
    </div>

    <div style="background: #823d80" class="text-white relative pt-10">
        <section class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="text">
                    <p class="text-3xl">Try a FREE sample course</p>
                    <p class="my-10 text-xl">You can see the quality of our e-learning courses by trying one for
                        yourself. Watch the video, answer the multiple choice questions and receive your certificate.
                        The sample course will take around 70 minutes to complete.</p>
                    <a class="hover:opacity-75 btn-primary text-xl px-6 py-3" href="">{{ __('Start the course') }}</a>
                </div>
                <div class="hidden md:block">
                    <img src="https://www.social-care.tv/images/ipad.png" alt="" class="absolute bottom-0">
                </div>
            </div>
        </section>
    </div>


    <!-- Page Footer -->
    <x-slot name="footer">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @livewire('link.social-media')
            <div>
                <ul>
                    <li>
                        <a target="none" href=""
                            class="text-sm text-gray-200 hover:text-gray-100">{{ __('About us') }}</a>
                    </li>
                    <li class="mt-1">
                        <a target="none" href=""
                            class="text-sm text-gray-200 hover:text-gray-100">{{ __('Contact') }}</a>',
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>
                        <a target="none" href="{{ route('terms.show') }}"
                            class="text-sm text-gray-200 hover:text-gray-100">{{ __('Terms of Service') }}</a>
                    </li>
                    <li class="mt-1">
                        <a target="none" href="{{ route('policy.show') }}"
                            class="text-sm text-gray-200 hover:text-gray-100">{{ __('Privacy Policy') }}</a>',
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <!-- Page Copyright -->
    <x-slot name="copyright">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap justify-center gap-x-6 gap-y-8 ">
            &copy; care.training
        </div>
    </x-slot>

</div>
