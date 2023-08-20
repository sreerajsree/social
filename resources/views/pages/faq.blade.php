<title>FAQ | care.training</title>
<x-app-layout>
    <!-- hero -->
    <div class="relative">
        <div class="trapezoid-bg trapezoid-bg--blue trapezoid-bg--top-purple"></div>
        <main style="overflow: hidden;z-index:10;" class="relative">
            <div class="text-white text-center">
                <p class="text-3xl md:text-5xl pt-20">Need some help?</p>
                <p class="mt-10 pb-20 text-xl md:text-2xl">Take a look at our frequently asked questions or contact us.</p>
                <div class="hero" style="background-color: #fff; color:#000; height:auto">
                    <div class="max-w-5xl mx-auto p-5 md:p-10">
                        <p class="text-4xl">Frequently asked questions</p>
                        <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
                        <ul id="tabs" class="grid grid-cols-2 md:grid-cols-4 gap-8 w-full px-1 pt-2 mt-10">
                            <li
                                class="px-6 md:px-10 py-2 md:py-4 -mb-px font-semibold text-gray-800 border-2 border-blue-400 opacity-50 rounded-lg">
                                <a id="default-tab" href="#first">About SCTV</a>
                            </li>
                            <li
                                class="px-6 md:px-10 py-2 md:py-4 font-semibold text-gray-800 border-2 border-blue-400 opacity-50 rounded-lg">
                                <a href="#second">Using the website</a>
                            </li>
                            <li
                                class="px-6 md:px-10 py-2 md:py-4 font-semibold text-gray-800 border-2 border-blue-400 opacity-50 rounded-lg">
                                <a href="#third">Taking courses</a>
                            </li>
                            <li
                                class="px-6 md:px-10 py-2 md:py-4 font-semibold text-gray-800 border-2 border-blue-400 opacity-50 rounded-lg">
                                <a href="#fourth">Purchasing and credits</a>
                            </li>
                        </ul>

                        <!-- Tab Contents -->
                        <div id="tab-contents">
                            <div id="first">
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full pt-10 mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-left text-2xl"
                                                            style="border-bottom: .125rem solid #03abc9">Are you
                                                            accredited?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Yes. We are accredited by Continuing Professional Development (CPD) as
                                                well as being
                                                endorsed by Skills for Care, guaranteeing the highest standard and
                                                educational
                                                quality of our training.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-left text-2xl"
                                                            style="border-bottom: .125rem solid #03abc9">Why should I
                                                            use Social Care TV?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                There are many reasons, for example, the amazing quality and integrity
                                                of our training resources, their flexibility, their ease of access,
                                                their standards-satisfying content, and, dare we mention it, pricing
                                                that you just can't beat! We believe, this offers you everything you're
                                                looking for. Why not try our FREE demonstration course and find out?
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-left text-2xl"
                                                            style="border-bottom: .125rem solid #03abc9">It sounds
                                                            great, how soon can I start using Social Care TV?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Within minutes! It takes moments to set up an account, moments to
                                                authorise a card payment - all online, 24/7!
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">How much will
                                                            using Social Care TV cost?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                That depends upon how much training you would like to deliver. Our basic
                                                pricing starts from £1.49 per person per course, including
                                                certification. Our pricing page tells you more.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">Is Social Care
                                                            TV recognised?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Yes. In 2011 Social Care TV became the sector’s first e-learning
                                                provider to be recognised by the National Skills Academy for Social Care
                                                and since then we have become accredited by the CPD, as well as gaining
                                                the Skills for Care Endorsement.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">Can I put this
                                                            information on my internal intranet?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                No. To download, store, archive, rip or anything like this is illegal.
                                                We have sophisticated tracking software imbedded in our material to
                                                protect our interests.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">So, if I
                                                            wanted similar material in-house but not online, can you
                                                            help me?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                We are able to provide the material available on Social Care TV via DVD.
                                                If there are products you are interested in, please contact us or visit
                                                www.mulho.com for more information.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="second" class="hidden p-4">
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full pt-10 mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">Is it easy to
                                                            use Social Care TV training?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Yes, very. We have designed everything about Social Care TV to be as
                                                easy as possible, one of its unique features. If you can use a computer
                                                mouse, you can use Social Care TV!
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">Can I use a
                                                            mobile phone or tablet?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Social Care TV is designed to satisfy mobile learning, which means as
                                                well as using a fixed computer or laptop you can also access training
                                                from mobile 'phones, tablets, iPads and similar.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">I haven't
                                                            received an e-mail confirming my Account has been set
                                                            up.</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Check your e-mail spam box, it's probably in there. It is a good idea to
                                                make sure your spam filter allows e-mails from care.training
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">What time of
                                                            the day can I access social-care.tv?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Any time you like that suits you, 24 hours, 7 days a week, every day of
                                                the year.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="third" class="hidden p-4">
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full pt-10 mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">How long will
                                                            a course take?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                That depends upon the learner and the type of course. Some subjects may
                                                only take half an hour, others longer.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">Will I have to
                                                            take a test?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Increasingly, inspectors are looking for training certificates and
                                                changes in vocational qualifications make certificates, like
                                                social-care.tv training certificates, even more important. Therefore,
                                                testing is an important part of learning and evidencing learning. Social
                                                Care TV testing is very straightforward and working through a course
                                                results in an automatic certificate at the end of the course. Why not
                                                have a look at our FREE Ageing course to find out more.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">Will I get a
                                                            certificate?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Yes. Certificates are generated automatically at the end of a course,
                                                FREE!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">How long does
                                                            it take to get my training certificate?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Seconds. At the end of a course, your certificate is automatically sent
                                                to the Account Holder's e-mail address and a copy is accessible, at any
                                                time, through your online Account (ideal if you need a duplicate or
                                                copy).
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">I haven't
                                                            received a training certificate in my email.</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Check your email spam box, it's probably in there. It is a good idea to
                                                make sure your spam filter allows emails from social-care.tv. A .pdf
                                                copy of the certificate is accessible through your Account in the
                                                certificates section, check with the Account Holder.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">What if I
                                                            fail?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Social Care TV certificates do not mention pass or fail, they simply
                                                give a percentage scored. This means your organisation can decide
                                                whether that percentage is suitable or not. You could always do the
                                                course again, if necessary.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">What does it
                                                            cost to re-take a course?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                If you complete a course and the training certificate has been
                                                generated, it will cost one credit to take the course again. However,
                                                before completing a module, you can rewind, stop, start or pause the
                                                video as often as you like FREE!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">How often do I
                                                            have to re-take a course?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                That depends upon the type of course, national guidelines, legal
                                                requirements and the expectations of your Inspectorate. There is no one
                                                simple answer to this question. However, refresher training with Social
                                                Care TV is immediately accessible, standards compliant and very
                                                affordable.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">Can more than
                                                            one person train per training session?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                You can train as many people at any one time as you like, depending on
                                                how many internet connected devices you have available.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">How do I sign
                                                            up for the free course?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                We regularly offer a new course for free. Click here to sign up for the
                                                free course.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="fourth" class="hidden p-4">
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full pt-10 mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">Can I only buy
                                                            one type of course at a time?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                This is a major advantage of buying credits. You can decide which of
                                                your staff are going to do which course, when you would like them to do
                                                it because you have left your options open for when you need to deliver
                                                training.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full  mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">What is a
                                                            credit?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                A credit is an advance payment for one person to take one course. You
                                                buy however many credits you need or want to, then for each course per
                                                person, we deduct those credits from your account as they start the
                                                course. You can buy as few or as many credits, in any quantity, that you
                                                would like.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full  mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">I need several
                                                            courses for several people, how many credits do I
                                                            need?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Multiply the number of people by the number of courses you need. Then
                                                choose how many credits are needed. For example, 6 people need to take 4
                                                courses (6 x 4 = 24), you would buy 24 credits.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full  mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">What if I have
                                                            a lot of staff needing a lot of courses?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                The more you need, the more credits you buy, the bigger our discount
                                                (which you can see on our pricing page). If you need 5000 credits or
                                                more, contact us with your needs and we will put a package together for
                                                you.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full  mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">What if I can
                                                            not pay by credit or debit card?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                Please call or email us - we can take payment over the phone, via BACs
                                                or issue an invoice.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full  mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">How do I get a
                                                            receipt for my payment?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                When your payment is authorised, you will receive an e-mail to tell you
                                                it has been authorised. Separately, a VAT receipt is e-mailed to the
                                                Account Holder's e-mail address. Additionally, a copy of the receipt is
                                                accessible through your Account at any time.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='flex items-center from-teal-100 via-teal-300 to-teal-500 bg-gradient-to-br'
                                    x-data="{ reportsOpen: false }">
                                    <div class='w-full  mx-auto bg-white'>
                                        <div>
                                            <p class='text-gray-600'></p>
                                            <div @click="reportsOpen = !reportsOpen"
                                                class='flex items-center text-gray-600 w-full border-b overflow-hidden  md:mt-0 mb-5 mx-auto'>
                                                <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out'
                                                    :class="{ 'rotate-90': reportsOpen, ' -translate-y-0.0': !reportsOpen }">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </div>
                                                <div class='flex items-center px-2 py-3'>
                                                    <div class='mx-3'>
                                                        <button class="text-2xl text-left"
                                                            style="border-bottom: .125rem solid #03abc9">How soon must
                                                            I use up the credits I have bought?</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-left flex p-5 md:pb-2 text-xl w-full transform transition duration-300 ease-in-out border-b pb-10"
                                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                                There is no time limit. You can use them up as quickly or as slowly as
                                                you want to.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        let tabsContainer = document.querySelector("#tabs");

                        let tabTogglers = tabsContainer.querySelectorAll("a");
                        console.log(tabTogglers);

                        tabTogglers.forEach(function(toggler) {
                            toggler.addEventListener("click", function(e) {
                                e.preventDefault();

                                let tabName = this.getAttribute("href");

                                let tabContents = document.querySelector("#tab-contents");

                                for (let i = 0; i < tabContents.children.length; i++) {

                                    tabTogglers[i].parentElement.classList.remove("bg-blue-400", "-mb-px",
                                        "opacity-100");
                                    tabContents.children[i].classList.remove("hidden");
                                    if ("#" + tabContents.children[i].id === tabName) {
                                        continue;
                                    }
                                    tabContents.children[i].classList.add("hidden");

                                }
                                e.target.parentElement.classList.add("border-2", "bg-blue-400", "-mb-px", "text-white",
                                    "opacity-100");
                            });
                        });

                        document.getElementById("default-tab").click();
                    </script>
                </div>
            </div>
    </div>
    </main>
    </div>
    <style>
        .bd:hover {
            border-bottom-width: 4px;
        }
    </style>

    <div class="relative">
        <div class="trapezoid-bg trapezoid-bg--bottom trapezoid-bg--bottom-grey"></div>
        <main style="overflow: hidden;z-index:10;" class="relative">
            <h2 class="text-4xl text-center my-20">Still need help?</h2>
            <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 mb-20 gap-10">
                <a href="https://www.social-care.tv/downloads/user-guide.pdf" class="border-blue-400 bd">
                    <div class="shadow-xl p-10 bg-white">
                        <img class="w-20 h-20" src="https://www.social-care.tv/images/book-reader.svg"
                            alt="">
                        <p class="my-5 text-2xl">User guide</p>
                        <p class="text-xl mb-10">Get help setting up and managing your account.</p>
                    </div>
                </a>
                <a href="https://www.social-care.tv/downloads/mh8591---glossary-for-sctv-v2.pdf" class="border-blue-400 bd">
                    <div class="shadow-xl p-10 bg-white">
                        <img class="w-20 h-20" src="https://www.social-care.tv/images/sort-alpha.svg"
                            alt="">
                        <p class="my-5 text-2xl">Glossary</p>
                        <p class="text-xl mb-10">Get help understanding adult care terminology</p>
                    </div>
                </a>
            </div>
            <div class="text-center container">
                <p class="text-4xl">Contact us</p>
                <p class="text-2xl my-8"><span class="font-bold">Social Care TV</span>, Hingham Manor, Hingham, NR9 4HP</p>
                <p class="text-2xl pb-20" style="text-align: center;">
                    <a class="telephone" href="tel:01953853070"><i class="fas fa-phone-alt mr-2"></i>01953
                        853070</a>&nbsp;
                    <a class="contact_email" href="mailto:info@socialcare.tv"><i
                            class="far fa-envelope mr-2"></i>info@socialcare.tv</a>
                </p>
            </div>
        </main>
    </div>
    @include('partials.contact')

</x-app-layout>
