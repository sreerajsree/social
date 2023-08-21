<title>About Social Care</title>
<x-app-layout>
    <!-- hero -->
    <div class="relative">
        <div class="trapezoid-bg trapezoid-bg--top trapezoid-bg--top-purple"></div>
        <main style="overflow: hidden;z-index:10;" class="relative">
            <div class="container text-white text-center">
                <p class="text-3xl md:text-5xl pt-20">About Social Care TV</p>
                <p class="mt-10 pb-20 text-xl md:text-2xl">Find out more about the UK’s most widely used provider of
                    online training
                    for the health and social care sector</p>
                <div class="hero"
                    style="background-image: url(https://www.social-care.tv/images/hero-images/team-meeting.jpg);">
                </div>
            </div>
        </main>
    </div>

    <div class="mt-10 md:mt-32">
        <div class="p-2 md:max-w-7xl mx-auto">
            <p class="text-2xl">Social Care TV is the online arm of Mulberry House Ltd which has been providing highest
                quality video based training resources to the health and social care sector for over 20 years.</p>
            <p class="mt-5 text-xl">After successfully providing DVD based training for many years, Mulberry House
                recognised the growing
                demand for an online based provision as long ago as 2006. Our passion for innovation aligned with years
                of industry knowledge and experience led us to embrace new and cutting edge technology – and in 2007 our
                online training platform - Social Care TV – was born.</p>
            <p class="mt-5 text-xl">Ever-evolving, our platform is consistently updated, embracing new advances in
                technology and customer
                feedback and requirements. This, alongside our finely honed in-house research and production department
                and gold standard customer support keeps Social Care TV at the forefront of training provision.</p>
            <p class="my-5 text-xl">Today, we are proud to be the most widely used e-learning provider for training for
                the health and social care sector in the UK.</p>
            <div>
                <iframe class="w-full h-500" src="https://www.youtube.com/embed/k8JWU0uUA0s"
                    title="Social Care TV Overview" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="mt-32">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <img class="rounded-lg"
                        src="https://www.social-care.tv/images/about-us/mh14660-updated-staff-grid.jpg" alt="">
                </div>
                <div class="p-2 md:p-36 flex justify-center flex-col">
                    <p class="text-4xl">Meet the Team</p>
                    <p class="my-10">At Social Care TV we are extremely proud of our knowledgeable team and the gold
                        standard customer service we provide. </p>
                    <a class="hover:opacity-75 btn-primary px-6 py-3"
                        href="">{{ __('Click here to find out more about who we are!') }}</a>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-20">
                <div class="block md:hidden">
                    <img class="rounded-lg" src="https://www.social-care.tv/images/about-us/accreditations-02-2023.jpg"
                        alt="">
                </div>
                <div class="p-2 md:p-36 flex justify-center flex-col ">
                    <p class="text-4xl">Accreditations and Awards</p>
                    <p class="my-10">Accredited by CPD, endorsed by Skills for Care and Cyber Essentials certified, you
                        can be safe in the knowledge that training with Social Care TV is quality assured, secure,
                        comprehensive and relevant for your business. At Social Care TV, we are proud to be an award
                        winning business.</p>
                    <a class="hover:opacity-75 btn-primary px-6 py-3"
                        href="{{ route('pages.accreditation', [app()->getLocale()]) }}"
                        :active="request() - > routeIs('accreditation')">{{ __('Find out more') }}</a>
                </div>
                <div class="hidden md:block">
                    <img class="rounded-lg" src="https://www.social-care.tv/images/about-us/accreditations-02-2023.jpg"
                        alt="">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-20">
                <div>
                    <img class="rounded-lg"
                        src="https://www.social-care.tv/images/about-us/mh14361---updating-the-customer-logos-graphic.jpg"
                        alt="">
                </div>
                <div class="p-2 md:p-36 flex justify-center flex-col">
                    <p class="text-4xl">Our Happy Clients</p>
                    <p class="my-10">At Social Care TV, you are in great company. We work with hundreds of thousands of
                        health and social care customers across the UK. Read more about what some of them have to say
                        here.</p>
                    <a class="hover:opacity-75 btn-primary px-6 py-3"  href="{{ route('pages.wcu', [app()->getLocale()]) }}"
                        :active="request() - > routeIs('wcu')">{{ __('Read more') }}</a>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-20">
                <div class="block md:hidden">
                    <img class="rounded-lg" src="https://www.social-care.tv/images/courses.jpg" alt="">
                </div>
                <div class="p-2 md:p-36 flex justify-center flex-col">
                    <p class="text-4xl">Why Choose Social Care TV?</p>
                    <p class="my-10">For over 20 years, Social Care TV has been providing e-learning to health and
                        social care workers. In fact, more social care providers make use of our training services than
                        any other option in the UK.</p>
                    <a class="hover:opacity-75 btn-primary px-6 py-3" href="{{ route('pages.wcu', [app()->getLocale()]) }}"
                        :active="request() - > routeIs('wcu')">{{ __('Find out more here') }}</a>
                </div>
                <div class="hidden md:block">
                    <img class="rounded-lg" src="https://www.social-care.tv/images/courses.jpg" alt="">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-20">
                <div>
                    <img class="rounded-lg"
                        src="https://www.social-care.tv/images/about-us/care-worker-with-patient.jpg" alt="">
                </div>
                <div class="p-2 md:p-36 flex justify-center flex-col">
                    <p class="text-4xl">Care Worker of the Month</p>
                    <p class="my-10">At Social Care TV – we care about Care Workers. Each and every month one
                        inspirational person receives our Care Worker of the Month award. Follow us on <a style="border-bottom: 2px solid #03ABC9">Facebook</a> or
                        <a href="" style="border-bottom: 2px solid #03ABC9">LinkedIn</a> to find out more.
                    </p>
                    <p><a style="border-bottom: 2px solid #03ABC9" href="https://www.facebook.com/hashtag/cwotm">#CWOTM</a> – Thanking Care
                        Workers Across the UK</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        @include('partials.contact')
    </div>


</x-app-layout>
