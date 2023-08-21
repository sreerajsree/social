<x-app-layout>
    <!-- Component app/view/components/applayout -->

    {{-- <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @livewire('search')
        </div>
    </section> --}}
    <div class="p-4 md:p-6 text-left md:text-center flex flex-col md:flex-row items-start md:items-center justify-center"
        style="background: #ffa333;color: #404040;">
        <p class="font-semibold text-2xl">Monthly payment options now available!</p>
        <button class="mt-2 md:ml-5 py-2 px-4 border-2 border-gray-700 rounded-md font-semibold text-xl">Enquire
            now</button>
    </div>

    @if (count($publish_slides))
        <div class="slide-one-item home-slider owl-carousel">

            @foreach ($publish_slides as $item)
                <div class="site-blocks-cover"
                    style="background-image: url('{{ Storage::url($item->image->url) }}'); background-repeat: no-repeat; background-size: 100vw;"
                    data-aos="fade" data-stellar-background-ratio="0.5">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-32 md:h-96 flex items-center py-32 ">
                        <div
                            class="w-full md:w-3/4 lg:w-1/2 px-8 py-8 {{ $item->background_color != '' && $item->background_color != 'bg-white' ? $item->background_color . '-' . $item->background_color_saturation : 'bg-white' }} {{ $item->background_color_opacity != '' ? $item->background_color_opacity : 'bg-opacity-25' }} ">
                            <!-- titulo -->
                            <h1
                                class="{{ $item->title_color != '' && $item->title_color != 'text-white' ? $item->title_color . '-' . $item->title_color_saturation : 'text-white' }} font-extrabold text-4xl sm:text-5xl md:text-6xl">
                                {{ __($item->title) }}</h1>
                            <!-- parrafo -->
                            <p
                                class="{{ $item->content_color != '' && $item->content_color != 'text-white' ? $item->content_color . '-' . $item->content_color_saturation : 'text-white' }} mt-3 sm:mt-5 sm:text-lg sm:mx-auto md:mt-5 md:text-xl lg:mx-0 mb-4">
                                {{ __($item->content) }}</p>
                            <!-- Buscador -->

                            @if (!is_null($item->information))
                                <p
                                    class="text-sm mb-6 {{ $item->content_color != '' && $item->content_color != 'text-white' ? $item->content_color . '-' . $item->content_color_saturation : 'text-white' }}">
                                    {{ $item->information }}</p>
                            @endif

                            @if (!is_null($item->link))
                                <a href="{{ $item->link }}" target="{{ $item->target }}"
                                    class=" {{ $item->link_type }} {{ $item->link_bg_color != '' && $item->link_bg_color != 'bg-white' ? $item->link_bg_color . '-' . $item->link_bg_color_saturation : 'bg-white' }} hover:{{ $item->link_bg_color . '-' . (((int) $item->link_bg_color_saturation) < 900 ? (int) $item->link_bg_color_saturation + 100 : $item->link_bg_color_saturation) }} hover:shadow {{ $item->link_color != '' && $item->link_color != 'text-white' ? $item->link_color . '-' . $item->link_color_saturation : 'text-white' }}">
                                    {{ !is_null($item->link_text) ? __($item->link_text) : '' }}
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @else
        <!-- hero -->
        <section class="bg-cover vh-80"
            style="background-image:linear-gradient(rgba(38, 42, 47, 0.7), rgba(12, 20, 29, 0.6)), url({{ asset('images/home/slider/hero2.jpg') }})">
            <div class="container px-4 sm:px-6 lg:px-8 py-36">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-thin text-2xl md:text-5xl">
                        {{ __('Online health and social care training that fits around you') }}
                    </h1>
                    <p class="text-white my-3 md:my-10 sm:text-lg sm:max-w-xl sm:mx-auto md:text-xl lg:mx-0 mb-4">
                        {{ __('Innovative, flexible and affordable e-learning for health and social care providers. Learn any time, any place.
                                                                                                                                                ') }}
                    </p>
                    @livewire('search')
                </div>
            </div>
        </section>
    @endif


    <div style="background: #823d80" class="text-white">
        <div class="container grid grid-cols-1 md:grid-cols-3 gap-10 p-10">
            <div class="flex items-center">
                <div><img class="chart-icon" src="https://www.social-care.tv/images/play-circle.svg" alt="">
                </div>
                <div class="pl-5 pr-15 text-xl">72 online courses, CPD Certified, Skills for Care Endorsed, CSTF Aligned
                </div>
            </div>
            <div class="flex items-center">
                <div><img class="chart-icon" src="https://www.social-care.tv/images/subtitles.svg" alt=""></div>
                <div class="pl-5 pr-15 text-xl">Subtitles available on our most popular courses - look for this icon
                </div>
            </div>
            <div class="flex items-center">
                <div><img class="chart-icon" src="https://www.social-care.tv/images/chart-line.svg" alt="">
                </div>
                <div class="pl-5 pr-15 text-xl">Fully comprehensive management reporting facilities</div>
            </div>
        </div>
    </div>
    <style>
        .bd:hover {
            border-bottom-width: 4px;
        }
    </style>
    <div class="divide-y divide-gray-300">

        @if (Auth::check())
            @if (count($user_courses))
                <!-- Student courses in this category -->
                <div class="container sm:px-6 lg:px-8 py-12">
                    <h2
                        class="text-center font-display font-semibold text-gray-600 text-xl sm:text-2xl md:text-3xl mb-6">
                        <span class="font-bold">{{ auth()->user()->name }}</span>,
                        {{ __('these are your latest courses') }}
                    </h2>
                    <!-- courses -->
                    <div
                        class="px-4 sm:px-6 lg:px-8 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-8 mt-12">
                        @foreach ($user_courses as $course)
                            <x-user-course :course="$course" />
                        @endforeach
                    </div>
                </div>
            @endif
        @endif

        <!-- latest posts -->
        {{-- @if (count($latest_courses) >= 1)
            <section class="py-12">
                <h2 class="text-center font-display font-semibold text-gray-600 text-xl sm:text-2xl md:text-3xl mb-6">{{ __('Latest courses') }}</h2>
                    <p class="text-center text-gray-500 text-sm mb-6">{{ __('These are the last courses that we have published for you') }}</p>
                    <!-- courses -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                        @foreach ($latest_courses as $course)
                            <x-course-card :course="$course" />
                        @endforeach
                    </div>
            </section>
        @endif --}}

        <!-- partnerships -->
        @if (count($partners) >= 1)
            <section class="pt-12">
                <h2 class="text-center font-display font-semibold text-gray-600 text-2xl sm:text-3xl md:text-4xl mb-6">
                    {{ __('Agreements with recognized institutions and companies') }}</h2>
                <p class="text-center text-gray-500 text-md mb-6">
                    {{ __('In order to offer you optimal training, and that you can join the labor market') }}</p>
                <!-- courses -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap justify-center gap-x-6 gap-y-8 ">
                    @foreach ($partners as $partner)
                        <figure>
                            @isset($partner->image)
                                <img id="picture" class="img-fluid px-10"
                                    src="{{ Storage::url($partner->image->url) }}" title="{{ $partner->name }}"
                                    alt="{{ $partner->name }}" style="max-height: 100px;">
                            @else
                                <img id="picture" class="img-fluid px-10"
                                    src="{{ asset('images/courses/logo-cloud.png') }}" title="{{ $partner->name }}"
                                    alt="{{ $partner->name }}" style="max-height: 100px;">
                            @endisset
                        </figure>
                        {{-- <x-course-card :course="$course" /> --}}
                    @endforeach
                </div>
                <hr class="mt-24">
            </section>
        @endif
    </div>
    <div class="container py-10">
        <p class="text-center text-4xl my-10">Learn from 71 online video courses</p>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
            @foreach ($latest_courses as $lc)
            <a href="{{ route('courses.show', [app()->getLocale(), $lc] ) }}">
                <div
                    class='w-full max-w-md  mx-auto bg-white shadow-xl overflow-hidden cursor-pointer border-purple-700 bd hover:shadow-2xl'>
                    <div class='max-w-md mx-auto'>
                        <div class='h-52'
                            style='background-image:url({{ Storage::url( $lc->image->url ) }});background-size:cover;background-position:center'>
                        </div>
                        <div class='p-4'>
                            <p class='text-gray-700 text-2xl leading-7 my-1'>{{ Str::limit($lc->title, 40) }}</p>
                            <div class='flex justify-between my-10 text-lg items-center'>
                                <div class="flex items-center"><i class="far fa-clock mr-1"></i>{{ $lc->duration_in_minutes }}</div>
                                <div class="flex items-center">From <span class="font-bold text-3xl ml-1">£ {{ $lc->price->value }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </div>

    <div class="text-center py-10">
        <a href="{{ route('courses.index', [app()->getLocale()]) }}" :active="request()->routeIs('home')" class="btn-primary px-6 py-3">See more courses</a>
    </div>


    <section class="container py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <img src="https://www.social-care.tv/images/homepage/subtitles-on-screen-678.jpg" alt="">
            <div class="p-0 md:p-20">
                <p class="font-thin text-4xl mb-5">Subtitle enabled for enhanced accessibility</p>
                <p class="text-lg">Here at Social Care TV, accessibility for all is high on our list of priorities and
                    we are constantly adding subtitles to our expanding portfolio to ensure that all our users have the
                    best possible training experience.</p>
            </div>
        </div>
    </section>

    <section class="container py-10">
        <p class="text-center text-4xl my-10">Why choose Social Care TV?</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="w-full h-full">
                <img class="w-4/5 h-3/4 mx-auto" src="https://www.social-care.tv/images/watch.svg" alt="">
                <div class="text-center">
                    <p class="font-thin text-3xl my-5">Learn at your own pace</p>
                    <p class="text-lg mb-5">Complete your course in two hours or take two weeks. The choice is yours.
                        You
                        have the freedom to
                        choose your own time to enjoy your study.</p>
                </div>
            </div>
            <div class="w-full h-full">
                <img class="w-4/5 h-3/4 mx-auto" src="https://www.social-care.tv/images/certificate.svg" alt="">
                <div class="text-center">
                    <p class="font-thin text-3xl my-5">Certificated courses</p>
                    <p class="text-lg mb-5">You will be awarded a certificate showing your test score upon completion.
                        This
                        certifies that you have completed the course, having understood the material within it.</p>
                </div>
            </div>
            <div class="w-full h-full">
                <img class="w-4/5 h-3/4 mx-auto" src="https://www.social-care.tv/images/stats.svg" alt="">
                <div class="text-center">
                    <p class="font-thin text-3xl my-5">Monitor progress with ease</p>
                    <p class="text-lg mb-5">Managers can keep track of their trainees through an online interface and
                        easily
                        retrieve learning logs for any staff member.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="py-20 flex justify-center">
        <a href="{{ route('pages.wcu',[app()->getLocale()]) }}" :active="request()->routeIs('why-choose-us')" class="btn-primary px-6 py-3 mr-2">Find out more</a>
        <a href="{{ route('register') }}" class="btn-secondary px-6 py-3">Take a sample course</a>
    </div>


    <section class="container py-10">
        <div class="grid grid-cols-2 gap-10 p-0 md:p-20">
            <div class="w-full">
                <p class="text-4xl font-thin">Accredited e-learning provider</p>
                <p class="text-lg my-5">Social Care TV is an accredited and endorsed training provider. We take great
                    pride in the standard
                    of the products we offer. As a result, we have been awarded accreditation by Continuing Professional
                    Development (CPD) UK and are fully endorsed by Skills for Care. We take Cyber Security seriously and
                    are proud to be Cyber Essentials accredited.</p>
                <a href="{{ route('pages.accreditation',[app()->getLocale()]) }}" :active="request()->routeIs('accreditation')" class="btn-primary px-6 py-3">Find out more</a>
            </div>
            <div class="w-full flex flex-col md:flex-row items-center justify-around">
                <img src="https://www.social-care.tv/images/homepage/cpd-corporate-member-tall-homepage.png"
                    alt="">
                <img src="https://www.social-care.tv/images/accreditation-logos/sfc-endorsed-provider-until-jan-2024-home.png"
                    alt="">
                <img src="https://www.social-care.tv/images/accreditation-logos/cyber-essentials-certified-home.png"
                    alt="">
            </div>
        </div>
    </section>

    <section class="container pb-20">
        <p class="text-center text-4xl my-10">News and views</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <div style="height: 600px"
                class='w-full rounded-lg  mx-auto bg-white shadow-xl overflow-hidden cursor-pointer border-gray-700 bd hover:shadow-2xl'>
                <div class='mx-auto'>
                    <div class='h-80'
                        style='background-image:url(https://www.social-care.tv/images/news/2023-06/cw-bronze-sponsor-small.jpg);background-size:cover;background-position:center'>
                    </div>
                    <div class='p-8'>
                        <p class="my-2">30th June 2023</p>
                        <p class='text-gray-700 text-2xl leading-7 my-4'>The Care Workers’ Charity</p>
                        <p class="text-lg">We have heard countless stories of care workers going above and beyond their
                            expected duties,
                            heartwarming and heartbreaking in equal measure, and have always been acutely aware of the
                            critical work completed by care workers, often with very little recognition or reward.</p>
                    </div>
                </div>
            </div>
            <div style="height: 600px"
                class='w-full rounded-lg  mx-auto bg-white shadow-xl overflow-hidden cursor-pointer border-gray-700 bd hover:shadow-2xl'>
                <div class='mx-auto'>
                    <div class='h-80'
                        style='background-image:url(https://www.social-care.tv/images/news/2023-05/care-worker-making-home-visit-small.jpg);background-size:cover;background-position:center'>
                    </div>
                    <div class='p-8'>
                        <p class="my-2">24th May 2023</p>
                        <p class='text-gray-700 text-2xl leading-7 my-4'>The Impact of Recognition</p>
                        <p class="text-lg">We have heard countless stories of care workers going above and beyond their
                            expected duties,
                            heartwarming and heartbreaking in equal measure, and have always been acutely aware of the
                            critical work completed by care workers, often with very little recognition or reward.</p>
                    </div>
                </div>
            </div>
            <div style="height: 600px"
                class='w-full rounded-lg  mx-auto bg-white shadow-xl overflow-hidden cursor-pointer border-gray-700 bd hover:shadow-2xl'>
                <div class='mx-auto'>
                    <div class='h-80'
                        style='background-image:url(https://www.social-care.tv/images/news/olive-lewis.jpg);background-size:cover;background-position:center'>
                    </div>
                    <div class='p-8'>
                        <p class="my-2">28th April 2023</p>
                        <p class='text-gray-700 text-2xl leading-7 my-4'>Care Worker of the Month – April 2023</p>
                        <p class="text-lg">We have heard countless stories of care workers going above and beyond their
                            expected duties,
                            heartwarming and heartbreaking in equal measure, and have always been acutely aware of the
                            critical work completed by care workers, often with very little recognition or reward.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    @include('partials.contact')


    

</x-app-layout>
