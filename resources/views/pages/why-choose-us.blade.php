<title>About Social Care</title>
<x-app-layout>
    <!-- hero -->
    <div class="relative">
        <div class="trapezoid-bg trapezoid-bg--top trapezoid-bg--top-purple"></div>
        <main style="overflow: hidden;z-index:10;" class="relative">
            <div class="container text-white text-center">
                <p class="text-4xl md:text-5xl pt-20">Trusted by over 1 million health and social care workers</p>
                <p class="mt-10 pb-20 text-2xl">Why should you choose Social Care TV as your e-learning provider?</p>
                <div class="hero"
                    style="background-image: url(https://www.social-care.tv/images/hero-images/social-care.jpg);">
                </div>
            </div>
        </main>
    </div>

    <div class="mt-10 md:mt-32">
        <div class="p-2 md:max-w-7xl mx-auto text-center">
            <p class="text-3xl md:text-4xl mb-8">The UK’s first accredited e-learning provider for health and social
                care providers
            </p>
            <p class="text-xl md:text-2xl my-5">For over 20 years, Social Care TV has been providing e-learning to
                health and
                social
                care workers. In
                fact, more social care providers make use of our training services than any other option in the UK.</p>
            <p class="text-xl md:text-2xl pb-20">Why do so many people use us? Because we offer high quality,
                professional training
                that's easy to use, popular with learners and priced fairly.</p>
        </div>
    </div>

    <div style="background: #0f3354" class="text-white">
        <p class="text-center text-4xl pt-20">Social Care TV in numbers</p>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 p-10 text-center">
            <div class="flex flex-col justify-center items-center">
                <div><img class="wc-icon" src="https://www.social-care.tv/images/people.svg" alt="">
                </div>
                <div class="font-bold text-4xl mb-5">100,000+</div>
                <p class="text-xl">managers supported to provide training</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <div><img class="wc-icon" src="https://www.social-care.tv/images/users.svg" alt="">
                </div>
                <div class="font-bold text-4xl mb-5">1,000,000+</div>
                <p class="text-xl">users learning with us</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <div><img class="wc-icon" src="https://www.social-care.tv/images/courses.svg" alt="">
                </div>
                <div class="font-bold text-4xl mb-5">69</div>
                <p class="text-xl">high quality courses to choose from</p>
            </div>
        </div>
        <p class="pb-20"></p>
    </div>
    <div class="mt-32">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div>
                    <img class="rounded-lg" src="https://www.social-care.tv/images/subtitles-on-screen-678x450.jpg"
                        alt="">
                </div>
                <div class="p-2 md:p-20 flex justify-center flex-col">
                    <p class="text-4xl">Subtitle enabled for enhanced accessibility</p>
                    <p class="my-10 text-xl">Here at Social Care TV, accessibility for all is high on our list of
                        priorities
                        and we are constantly adding subtitles to our expanding portfolio to ensure that all our users
                        have the best possible training experience. </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-20">
                <div class="block md:hidden">
                    <img class="rounded-lg" src="https://www.social-care.tv/images/courses.jpg" alt="">
                </div>
                <div class="p-2 md:p-20 flex justify-center flex-col">
                    <p class="text-4xl">Extensive range of courses covering a large number of topics</p>
                    <p class="my-10 text-xl">All our resources satisfy relevant care standards, inspectorate, learning
                        skills
                        agency and legal requirements, and are available from just £1.49 per course.</p>
                    <a class="hover:opacity-75 btn-primary px-6 py-3"
                        href="{{ route('courses.index', [app()->getLocale()]) }}"
                        :active="request() - > routeIs('course.index')">{{ __('See all courses') }}</a>
                </div>
                <div class="hidden md:block">
                    <img class="rounded-lg" src="https://www.social-care.tv/images/courses.jpg" alt="">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-20">
                <div>
                    <img class="rounded-lg" src="https://www.social-care.tv/images/manage-staff.jpg" alt="">
                </div>
                <div class="p-2 md:p-20 flex justify-center flex-col">
                    <p class="text-4xl">Manage and monitor your staff with ease</p>
                    <p class="my-10 text-xl">Managers can keep track of their trainees through an online interface and
                        retrieve
                        learning logs and certification for any staff member. "I can highly recommend Social Care TV for
                        online training. Creating an account and assigning courses was very easy to do due to the user
                        friendly website."</p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-20">
                <div class="block md:hidden">
                    <img class="rounded-lg" src="https://www.social-care.tv/images/mobile.jpg" alt="">
                </div>
                <div class="p-2 md:p-20 flex justify-center flex-col">
                    <p class="text-4xl">Learn at your own pace, any time, any where</p>
                    <p class="my-10 text-xl">Social Care TV allows you to learn at your own pace, at home, at work, at a
                        time
                        that suits you. Our courses are optimised for mobile devices and can be paused at any time to be
                        resumed later.</p>
                </div>
                <div class="hidden md:block">
                    <img class="rounded-lg" src="https://www.social-care.tv/images/mobile.jpg" alt="">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-20">
                <div>
                    <img class="rounded-lg"
                        src="https://www.social-care.tv/images/why-choose-sctv-accredited-02-2023.jpg" alt="">
                </div>
                <div class="p-2 md:p-20 flex justify-center flex-col">
                    <p class="text-4xl">An accredited e-learning provider</p>
                    <p class="my-10 text-xl">At Social Care TV we take great pride in the standard of the products we
                        offer. As
                        a result, we have been awarded accreditation by Continuing Professional Development (CPD) as
                        well as being Endorsed by Skills for Care. We take Cyber Security seriously and are proud to be
                        Cyber Essentials accredited.
                    </p>
                    <a class="hover:opacity-75 btn-primary px-6 py-3"
                        href="{{ route('pages.accreditation', [app()->getLocale()]) }}"
                        :active="request() - > routeIs('accreditation')">{{ __('Find out more') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-gray-800">
        <p class="text-center text-4xl pt-20">Our users also benefit from...</p>
        <div class="container grid grid-cols-1 md:grid-cols-3 gap-10 p-10 text-center">
            <div class="flex flex-col justify-center items-center">
                <div><img src="https://www.social-care.tv/images/cert-purple-01.svg" alt="">
                </div>
                <div class="my-10 text-4xl">Certificated training</div>
                <p class="text-xl mb-8">On completing each course, you will receive a certificate showing your test
                    score to show which courses you have taken and completed.</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <div><img src="https://www.social-care.tv/images/tag-purple-01.svg" alt="">
                </div>
                <div class="my-10 text-4xl">Simple, affordable pricing</div>
                <p class="text-xl mb-8">We offer affordable, flexible pricing options for individuals and employers,
                    alongside extra value packs and special offers.</p>
                <a class="font-bold text-xl" style="border-bottom: 1px solid #000" href="">View Pricing</a>
            </div>
            <div class="flex flex-col justify-center items-center">
                <div><img src="https://www.social-care.tv/images/computer-purple-01.svg" alt="">
                </div>
                <div class="mt-8 mb-10 text-4xl">Free courses</div>
                <p class="text-xl mb-8">On a regular basis we offer our registered users a full, certificated course -
                    completely free of charge!</p>
                <a class="font-bold text-xl" style="border-bottom: 1px solid #000"
                    href="{{ route('register') }}">Sign up today</a>
            </div>
        </div>
        <p class="pb-20"></p>
    </div>

    <div style="background: #03abc9" class="text-white relative">
        <section class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="text">
                    <p class="text-3xl">Try a FREE sample course</p>
                    <p class="my-10 text-xl">You can see the quality of our e-learning courses by trying one for
                        yourself. Watch the video, answer the multiple choice questions and receive your certificate.
                        The sample course will take around 70 minutes to complete.</p>
                    <a class="hover:opacity-75 btn-primary text-xl px-6 py-3"
                        href="{{ route('courses.index', [app()->getLocale()]) }}"
                        :active="request() - > routeIs('course.index')">{{ __('Start the course') }}</a>
                </div>
                <div class="hidden md:block">
                    <img src="https://www.social-care.tv/images/ipad.png" alt="" class="absolute bottom-0">
                </div>
            </div>
        </section>
    </div>
    <p class="text-4xl text-center py-10">What our customers have to say</p>
    <div class="container grid grid-cols-1 md:grid-cols-3 gap-10 pt-10 pb-20">
        <div class="p-8 shadow-lg rouunded-lg" style="border-bottom: 4px solid #823d80">
            <p class="text-3xl text-green-500">Balance Support</p>
            <p class="my-10 text-xl">Onyekwere Ogueri - Senior Service Manager</p>
            <p class="text-xl">Balance staff have been using Social Care TV online training for the last 4 years. It
                has reduced time
                spent on face-on-face training but still improved learning skills of staff whilst helping us meeting all
                mandatory training required in our sector. It has given us the ability to check on the progress of staff
                training as well as follow up on refresher training so to meet any regulatory requirements within the
                correct timescale. Social Care TV was an effective training tool Balance used also during Covid 19
                pandemic to maintain staff skills.</p>
        </div>
        <div class="p-8 shadow-lg rouunded-lg" style="border-bottom: 4px solid #823d80">
            <p class="text-3xl text-green-500">Stonehaven Care Group</p>
            <p class="my-10 text-xl">Nathan Stone - Director</p>
            <p class="text-xl">We have used SCTV for over 15 years – in fact, we used Mulberry House when the training
                came in red paper folders. We’ve always been impressed by the content of the training. The move to
                online delivery was really important to us. We now have over 300 care team members whose roles are
                diverse and complex. Having a means, such as SCTV, to provide them with vital training which they can
                complete at the best time for them (rather than having to come to a face to face course) is vital to our
                business. SCTV enables us to keep training levels high, costs down and means that training courses are
                no longer a headache for the rota. Of course, during the pandemic, if it were not for online training
                there would have been almost no training at all.</p>
        </div>
        <div class="p-8 shadow-lg rouunded-lg" style="border-bottom: 4px solid #823d80">
            <p class="text-3xl text-green-500">Nightingale Homecare</p>
            <p class="my-10 text-xl">Chris Long - Director</p>
            <p class="text-xl">If you are looking for “Excellence in On-Line Training” look no further than SCTV for
                Ease, Flexibility & Excellence, they lead the field in on-line training where others follow which is the
                reason Nightingale Homecare are pleased to recommend SCTV to you.</p>
        </div>
    </div>

    @include('partials.contact')


</x-app-layout>
