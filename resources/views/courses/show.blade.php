<x-app-layout>

    <div class="relative">
        <div class="trapezoid-bg trapezoid-bg--top trapezoid-bg--top-grey"></div>
        <main style="overflow: hidden;z-index:10;" class="relative">
            <div class="container mx-auto text-grey text-center">
                <h2 class="text-3xl md:text-5xl text-left mt-20">{{ $course->title }}</h2>
                <p class="text-xl md:text-3xl text-left mt-10">{{ $course->subtitle }}</p>
            </div>
            <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-12">

                <div class="order-2 md:col-span-1 lg:col-span-2 md:order-1 lg:order-1">

                    <figure class="mt-20 mb-12">
                        <!-- card image -->
                        @isset($course->image)
                            <img src="{{ Storage::url($course->image->url) }}" alt=""
                                class="h-auto w-full object-cover shadow" />
                        @else
                            <img id="picture" class="h-80 w-full object-cover shadow"
                                src="{{ asset('images/courses/default.jpg') }}" alt="">
                        @endisset
                    </figure>
                    <!-- section description -->
                    <section class="mb-12">
                        <h2 class="text-4xl text-gray-600">{{ __('About the course') }}</h2>
                        <div class="text-gray-600 text-xl mt-4">
                            {!! $course->summary !!}
                        </div>
                    </section>

                    <!-- section requirements  -->
                    <section class="mb-12">
                        <h2 class="text-4xl text-gray-600">{{ __('Who is this course for?') }}</h2>

                        <ul class="list-disc list-inside mt-4">

                            @forelse ($course->requirements as $requirement)
                            <li class="text-gray-600 text-xl flex justify-start">
                                <i class="fas fa-circle text-sm text-gray-500 mr-3 pt-1 clear-left"></i>
                                {{ $requirement->name }}
                            </li>
                            @empty
                                <p class="text-gray-600 text-xl">
                                    No prerequisites
                                </p>
                            @endforelse

                        </ul>
                    </section>

                    <!-- section goals -->
                    <section class="mb-12">

                        <h2 class="text-4xl mb-2 text-gray-600">{{ __('What does the course cover?') }}</h2>
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2 mt-4">

                            {{-- @foreach ($course->goals as $goal)
                                <li class="text-gray-600 text-xl flex justify-start">
                                    <i class="fas fa-circle text-sm text-gray-500 mr-3 pt-1 clear-left"></i>
                                    {{ $goal->name }}
                                </li>
                            @endforeach --}}

                            @foreach ($course->sections as $section)
                                <li class="text-gray-600 text-xl flex justify-start">
                                    <i class="fas fa-circle text-sm text-gray-500 mr-3 pt-1 clear-left"></i>
                                    {{ $section->name }}
                                </li>
                            @endforeach

                        </ul>

                    </section>

                    <section class="mb-12">
                        <h2 class="text-4xl text-gray-600">{{ __('How is the course assessed?') }}</h2>
                        <div class="text-gray-600 text-xl mt-4">
                            After each module you will be asked a set of multiple-choice questions. The answers are
                            marked automatically so you instantly know your score.
                        </div>
                        <div class="text-gray-600 text-xl mt-4">
                            Every trainee receives a FREE training certificate on completion of the course as evidence
                            for your records.
                        </div>
                    </section>
                    <hr>
                    <section class="mt-5 text-gray-600">
                        <h2 class="text-4xl mb-10">Contributes to Care Certificate Standards 1, 3, 5, 7 & 10</h2>
                        <div class="text-xl">
                            <img class="float-right"
                                src="https://www.social-care.tv/templates/default/images/the-care-certificate-logo.png"
                                alt="">
                            <p class="mb-10">All new health and social care workers should be inducted according to the
                                Care
                                Certificate framework. This replaces the Common Induction Standards and National Minimum
                                Training Standards.</p>
                            <p class="mb-10">Social Care TV have a wide range of training that satisfies the
                                requirements of the Care
                                Certificate. Furthermore, our training covers, at the same time, important aspects of
                                further vocational training.</p>
                            <a class="hover:opacity-75 btn-primary px-6 py-3"
                                href="{{ route('pages.wcu', [app()->getLocale()]) }}"
                                :active="request() - > routeIs('wcu')">{{ __('Learn about the Care Certificate') }}</a>
                        </div>
                    </section>

                    <!-- section subjects -->
                    {{-- <section class="mb-12">
                        <h2 class="font-bold text-2xl text-gray-600">{{ __('Course content') }}</h2>

                        @foreach ($course->sections as $section)
                            <article class="mt-4 shadow"
                                @if ($loop->first) x-data="{ open: true}"  @else x-data="{ open: false}" @endif>
                                <header
                                    class="border border-gray-200 px-4 pt-2 cursor-pointer bg-gray-100 bg-opacity-25 transition duration-700 ease-in-out"
                                    x-on:click=" open = !open ">
                                    <h3 class="font-bold text-xl mb-2 text-gray-600 flex justify-between items-center">
                                        {{ $section->name }}
                                        <i class="fas fa-chevron-down ml-2 text-gray-400" x-show=" !open "></i>
                                        <i class="fas fa-chevron-right ml-2 text-gray-400" x-show=" open "></i>
                                    </h3>
                                </header>
                                <div class="bg-white py-2 px-4" x-show=" open ">
                                    <ul class="grid grid-cols-1 gap-x-3 gap-y-4">

                                        @foreach ($section->lessons as $lesson)
                                            <li class="text-gray-600 text-base"><i
                                                    class="far fa-play-circle text-sm text-gray-500 mr-4"></i>{{ $lesson->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </article>
                        @endforeach

                    </section> --}}

                    @livewire('courses-tags', ['course' => $course])

                    @livewire('courses-reviews', ['course' => $course])

                </div>

                <div class="order-1  md:order-2 lg:order-2">
                    <section class="mb-12">
                        <div class="mt-20">
                            <!-- Author info -->
                            {{-- <div class="flex items-center">
                                <figure>
                                    <img class="h-12 w-12 object-cover rounded-full shadow"
                                        src="{{ $course->editor->profile_photo_url }}"
                                        alt="Foto de perfil de {{ $course->editor->name }}" />
                                </figure>
                                <div class="ml-4">
                                    <p class="font-bold text-lg text-gray-600">
                                        {{ $course->editor->name . ' ' . $course->editor->lastname }}</p>
                                    @foreach ($course->editor->roles as $role)
                                        @if ($role->name == 'Creator')
                                            <p class="text-md text-gray-600 mr-2">Analista de Empleo</p>
                                        @endif
                                        @if ($role->name == 'Instructor')
                                            <p class="text-md text-gray-600 mr-2">Instructor</p>
                                        @endif
                                    @endforeach
                                    <a class="text-gray-400 hover:text-gray-600 text-sm font-bold"
                                        href="mailto:{{ $course->editor->email }}" target="_blank"><i
                                            class="far fa-envelope fa-lg"></i></a>
                                </div>
                            </div> --}}

                            {{-- @if (auth()->check() && !Auth::user()->hasRole(['Administrator', 'Manager', 'Creator', 'Instructor'])) --}}
                            @cannot('create-course')

                                @can('enrolled', $course)
                                    @if ($course->completed && !is_null($course->completed))
                                        <a href=""
                                            class="btn-cta btn-success btn-block mt-4 hover:shadow">{{ __('See Certificate') }}</a>
                                    @else
                                        <!-- CTA button : user enrolled -->
                                        <a href="{{ route('courses.status', [app()->getLocale(), $course]) }}"
                                            class="btn-cta btn-success btn-block mt-4 hover:shadow">{{ __('Continue with the course') }}</a>
                                    @endif
                                @else
                                    {{-- @if ($course->students_count < $course->audiences->name) --}}
                                    @if ($course->price->value == 0)
                                        <div class="text-center">
                                            <p class="text-6xl font-bold text-black mt-3 mb-8">{{ __('Free') }}</p>
                                            <form action="{{ route('courses.enrolled', [app()->getLocale(), $course]) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit"
                                                    class="btn-secondary hover:shadow uppercase font-bold px-12 py-5 text-2xl">{{ __('Start this course') }}</button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="text-center">
                                            <p>From Only</p>
                                            <p class="text-6xl font-bold text-black mt-3 mb-8">£ {{ $course->price->value }}
                                            </p>
                                            <a href="{{ route('payment.checkout', $course) }}"
                                                class="btn-secondary hover:shadow uppercase font-bold px-12 py-5 text-2xl">{{ __('Buy Credits') }}</a>
                                            <p class="text-base mt-5">*Excludes VAT. Based on bulk credit pricing</p>
                                        </div>
                                    @endif
                                @endcan
                            @endcannot

                        </div>
                    </section>

                    <aside>
                        <hr>
                        <div class="my-5 text-xl text-center">
                            <p class="telephone"><i class="far fa-clock mr-2 text-3xl"></i>Duration:
                                {{ $course->duration_in_minutes }}m</a>&nbsp;
                            <p class="contact_email"><i class="fas fa-th mr-2 text-3xl"></i>Modules: </p>
                        </div>
                        <hr>
                        <ul class="tick text-xl mt-10 hidden md:block">
                            <li>CPD Accredited and Skills for Care Endorsed</li>
                            <li>Free certification</li>
                            <li>Standards compliant</li>
                            <li>Access course on desktop & mobile, from work or home</li>
                            <li>No time limits, work at your own pace</li>
                            <li>Monitor and track staff progress</li>
                        </ul>

                        <div style="background: #f1f4fa; border-bottom: 4px solid #000" class="p-10 mt-20 hidden md:block">
                            <p class="text-7xl"><i class="far fa-question-circle"></i></p>
                            <p class="text-2xl my-10">For help with ordering courses, please get in touch.</p>
                            <div class="font-bold flex flex-col text-xl">
                                <a href="tel:">019895695685</a>
                                <a class="underline" style="text-decoration-color: #03ABC9; text-decoration-offset: 2px" href="mailto:info@care.training">info@care.training</a>
                            </div>
                        </div>
                        <div class="w-full pt-4 text-center hidden md:block">
                            <a class="text-blue-400 text-xl"
                                href="{{ route('courses.category', [app()->getLocale(), $course->category]) }}">{{ __('More courses in') }}
                                {{ $course->category->name }}</a>
                        </div>

                    </aside>

                </div>

            </div>
        </main>
    </div>

    <div class="container">
        @if (count($related_courses))
            <h2 class="text-5xl text-center text-gray-600 mt-20 mb-12">{{ __('Related courses') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-20">
                @foreach ($related_courses as $related_course)
                    <a href="{{ route('courses.show', [app()->getLocale(), $related_course]) }}">
                        <div
                            class='w-full max-w-md  mx-auto bg-white shadow-xl overflow-hidden cursor-pointer border-purple-700 bd hover:shadow-2xl'>
                            <div class='max-w-md mx-auto'>
                                <div class='h-52'
                                    style='background-image:url({{ Storage::url($related_course->image->url) }});background-size:cover;background-position:center'>
                                </div>
                                <div class='p-4'>
                                    <p class='text-gray-700 text-2xl leading-7 my-1'>
                                        {{ Str::limit($related_course->title, 40) }}</p>
                                    <div class='flex justify-between my-10 text-lg items-center'>
                                        <div class="flex items-center"><i
                                                class="far fa-clock mr-1"></i>{{ $related_course->duration_in_minutes }}
                                        </div>
                                        <div class="flex items-center">From <span class="font-bold text-3xl ml-1">€
                                                {{ $related_course->price->value  }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

        @endif
    </div>


    <x-slot name="js">
        <!-- CDN CKEditor 5 Classic -->
        <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
        <!-- instructor js -->
        <script src="{{ asset('js/student/courses/review.js') }}"></script>
    </x-slot>

</x-app-layout>
