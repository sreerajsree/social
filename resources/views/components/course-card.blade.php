@props(['course'])


<!-- Card -->
<article class="flex flex-col" :key="{{ 'course-card-' . $course->id }}">

    <!-- card image -->
    <div class="overflow-hidden relative">

        @if ($course->user_id === Auth::id())
            @hasrole('Creator')
                <div class="absolute z-50 right-2 top-2">
                    <a href="{{ route('creator.courses.edit', [app()->getLocale(), $course]) }}"
                        class="text-white cursor-pointer z-50"><i class="fas fa-edit"></i></a>
                </div>
            @endhasrole

            @hasrole('Instructor')
                <div class="absolute z-50 right-2 top-2">
                    <a href="{{ route('instructor.courses.edit', [app()->getLocale(), $course]) }}"
                        class="text-white cursor-pointer z-50"><i class="fas fa-edit"></i></a>
                </div>
            @endhasrole
        @endif
    </div>

    <style>
        .bd:hover {
            border-bottom-width: 4px;
        }
    </style>
    <a class="hidden md:block" href="{{ route('courses.show', [app()->getLocale(), $course]) }}">
        <div
            class='w-full max-w-md mx-auto bg-white shadow-xl overflow-hidden cursor-pointer border-purple-700 bd hover:shadow-2xl'>
            <div class='max-w-md mx-auto'>
                @isset($course->image)
                    <div :key="{{ 'image-' . $course->id }}" class='h-60'
                        style='background-image:url({{ Storage::url($course->image->url) }});background-size:cover;background-position:center'>
                    @else
                        <div :key="{{ 'image-' . $course->id }}" class='h-60'
                            style='background-image:url({{ asset('images/courses/default.jpg') }});background-size:cover;background-position:center'>
                        @endisset
                    </div>
                    <div class='p-4'>
                        <p class='text-gray-700 text-2xl leading-7 my-1'>{{ Str::limit($course->title, 55) }}</p>
                        <div class='flex justify-between my-10 text-lg items-center'>
                            <div class="flex items-center"><i
                                    class="far fa-clock mr-1"></i>{{ $course->duration_in_minutes }}m</div>
                            <div class="flex items-center">From <span class="font-bold text-3xl ml-1">
                                    @if ($course->price->value > 0)
                                        £ {{ $course->price->value }}
                                    @else
                                        {{ __('Free') }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </a>

    <div class="grid grid-cols-2 gap-2">
        <a class="block md:hidden" href="">
            <img class="h-32 w-full" :key="{{ 'image-' . $course->id }}" src="{{ Storage::url($course->image->url) }}"
                alt="">
            <div class="text-gray-700 text-xl leading-7 p-3">
                {{ Str::limit($course->title, 35) }}
        </a>
    </div>

</article>
