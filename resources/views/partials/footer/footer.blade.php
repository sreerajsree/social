<section class="text-white" style="background: #0f3354">
    <div class="container hidden md:block">
        <div class="grid grid-cols-6 gap-5">
            <div class="py-20 w-full">
                <p class="font-thin text-2xl pb-10">For help with your order, please get in touch</p>
                <a href="{{ route('contact-us', [app()->getLocale()]) }}" :active="request() - > routeIs('contact-us')"
                    class="font-bold underline text-3xl">Contact us</a>
                <div class="flex mt-5">
                    <a href=""><i class="fab fa-facebook fa-3x mr-5"></i></a>
                    <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
                </div>
            </div>
            <div>&nbsp;</div>
            <div class="w-full text-lg py-20">
                <p class="font-bold pb-2">About</p>
                <ul>
                    <li class="py-1"><a class="hover:underline"
                            href="{{ route('pages.about', [app()->getLocale()]) }}"
                            :active="request() - > routeIs('about')">About Social Care TV</a></li>
                    <li class="py-1"><a class="hover:underline" href="{{ route('pages.wcu', [app()->getLocale()]) }}"
                            :active="request() - > routeIs('why-choose-us')">Why choose us?</a></li>
                    <li class="py-1"><a class="hover:underline" href="">Care Certificate</a></li>
                    <li class="py-1"><a class="hover:underline"
                            href="{{ route('pages.accreditation', [app()->getLocale()]) }}"
                            :active="request() - > routeIs('accreditation')">Accreditation</a></li>
                </ul>
            </div>
            <div class="w-full text-lg py-20">
                <p class="font-bold pb-2">Need help?</p>
                <ul>
                    <li class="py-1"><a class="hover:underline"
                            href="https://www.social-care.tv/downloads/user-guide.pdf">User guide</a></li>
                    <li class="py-1"><a class="hover:underline"
                            href="https://www.social-care.tv/downloads/mh8591---glossary-for-sctv-v2.pdf">Glossary</a>
                    </li>
                    <li class="py-1"><a class="hover:underline" href="{{ route('pages.faq', [app()->getLocale()]) }}"
                            :active="request() - > routeIs('faq')">FAQ's</a></li>
                    <li class="py-1"><a class="hover:underline" href="{{ route('contact-us', [app()->getLocale()]) }}"
                            :active="request() - > routeIs('contact-us')">Contact us</a></li>
                </ul>
            </div>
            <div class="w-full text-lg py-20">
                <p class="font-bold pb-2">Small print</p>
                <ul>
                    <li class="py-1"><a class="hover:underline" href="/terms-of-service?en">Terms and conditions</a>
                    </li>
                    <li class="py-1"><a class="hover:underline" href="/privacy-policy?en">Privacy policy</a></li>
                    <li class="py-1"><a class="hover:underline" href="/privacy-policy#cookies?en">Cookies</a></li>
                </ul>
            </div>
            <div class="py-20">
                <img class="mb-4 w-28"
                    src="https://www.social-care.tv/templates/default/images/cpd-corporate-partner-white.svg"
                    alt="">
                <img class="mb-4 w-28"
                    src="https://www.social-care.tv/templates/default/images/sfc-endorsed-provider-until-jan-24-footer.svg"
                    alt="">
                <img class="mb-4 w-28"
                    src="https://www.social-care.tv/templates/default/images/cyberessentials-whiteout-footer-1x.png"
                    alt="">
            </div>
        </div>
    </div>
    <div class="container block md:hidden text-center">
        <p class="py-8 text-xl">For help with your order, please get in touch</p>
        <div class="flex justify-center items-center">
            <div class="mr-5">
                <a href="{{ route('contact-us', [app()->getLocale()]) }}" :active="request() - > routeIs('contact-us')"
                    class="font-bold underline text-2xl">Contact us</a>
            </div>
            <div>
                <a href=""><i class="fab fa-facebook fa-2x mr-2"></i></a>
                <a href=""><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
        </div>
        <div class="pt-5 pb-3">
            <details class="group">
                <summary class="flex justify-center  font-bold cursor-pointer list-none">
                    <span>About</span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                            width="24">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </span>
                </summary>
                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                    <ul>
                        <li class="py-1"><a class="hover:underline"
                                href="{{ route('pages.about', [app()->getLocale()]) }}"
                                :active="request() - > routeIs('about')">About Social Care TV</a></li>
                        <li class="py-1"><a class="hover:underline" href="{{ route('pages.wcu', [app()->getLocale()]) }}"
                                :active="request() - > routeIs('why-choose-us')">Why choose us?</a></li>
                        <li class="py-1"><a class="hover:underline" href="">Care Certificate</a></li>
                        <li class="py-1"><a class="hover:underline"
                                href="{{ route('pages.accreditation', [app()->getLocale()]) }}"
                                :active="request() - > routeIs('accreditation')">Accreditation</a></li>
                    </ul>
                </p>
            </details>
        </div>
        <div class="pb-3">
            <details class="group">
                <summary class="flex justify-center  font-bold cursor-pointer list-none">
                    <span>Need help?</span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                            width="24">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </span>
                </summary>
                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                    <ul>
                        <li class="py-1"><a class="hover:underline"
                                href="https://www.social-care.tv/downloads/user-guide.pdf">User guide</a></li>
                        <li class="py-1"><a class="hover:underline"
                                href="https://www.social-care.tv/downloads/mh8591---glossary-for-sctv-v2.pdf">Glossary</a>
                        </li>
                        <li class="py-1"><a class="hover:underline" href="{{ route('pages.faq', [app()->getLocale()]) }}"
                                :active="request() - > routeIs('faq')">FAQ's</a></li>
                        <li class="py-1"><a class="hover:underline" href="{{ route('contact-us', [app()->getLocale()]) }}"
                                :active="request() - > routeIs('contact-us')">Contact us</a></li>
                    </ul>
                </p>
            </details>
        </div>
        <div class="pb-3">
            <details class="group">
                <summary class="flex justify-center  font-bold cursor-pointer list-none">
                    <span>Small print</span>
                    <span class="transition group-open:rotate-180">
                        <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                            width="24">
                            <path d="M6 9l6 6 6-6"></path>
                        </svg>
                    </span>
                </summary>
                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                    <ul>
                        <li class="py-1"><a class="hover:underline" href="/terms-of-service?en">Terms and conditions</a>
                        </li>
                        <li class="py-1"><a class="hover:underline" href="/privacy-policy?en">Privacy policy</a></li>
                        <li class="py-1"><a class="hover:underline" href="/privacy-policy#cookies?en">Cookies</a></li>
                    </ul>
                </p>
            </details>
        </div>
        <div class="py-10 flex justify-between">
            <img class="mb-4 w-28"
                src="https://www.social-care.tv/templates/default/images/cpd-corporate-partner-white.svg"
                alt="">
            <img class="mb-4 w-28"
                src="https://www.social-care.tv/templates/default/images/sfc-endorsed-provider-until-jan-24-footer.svg"
                alt="">
            <img class="mb-4 w-28"
                src="https://www.social-care.tv/templates/default/images/cyberessentials-whiteout-footer-1x.png"
                alt="">
        </div>
        <div>
            Copyright © 2023. care.training is part of Mulberry House Ltd who is registered in England no. 12496630. VAT no. 750 3533 53
        </div>
    </div>
</section>
