<section class="text-white" style="background: #0f3354">
    <div class="container">
        <div class="grid grid-cols-6 gap-5">
            <div class="py-20 w-full">
                <p class="font-thin text-2xl pb-10">For help with your order, please get in touch</p>
                <a href="" class="font-bold underline text-3xl">Contact us</a>
                <div class="flex mt-5">
                    <a href=""><i class="fab fa-facebook fa-3x mr-5"></i></a>
                    <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
                </div>
            </div>
            <div>&nbsp;</div>
            <div class="w-full text-lg py-20">
                <p class="font-bold pb-2">About</p>
                <ul>
                    <li class="py-1"><a class="hover:underline" href="{{ route('pages.about', [app()->getLocale()]) }}" :active="request()->routeIs('about')">About Social Care TV</a></li>
                    <li class="py-1"><a class="hover:underline" href="{{ route('pages.wcu',[app()->getLocale()]) }}" :active="request()->routeIs('why-choose-us')">Why choose us?</a></li>
                    <li class="py-1"><a class="hover:underline" href="">Care Certificate</a></li>
                    <li class="py-1"><a class="hover:underline" href="">Accreditation</a></li>
                </ul>
            </div>
            <div class="w-full text-lg py-20">
                <p class="font-bold pb-2">Need help?</p>
                <ul>
                    <li class="py-1"><a class="hover:underline" href="https://www.social-care.tv/downloads/user-guide.pdf">User guide</a></li>
                    <li class="py-1"><a class="hover:underline" href="https://www.social-care.tv/downloads/mh8591---glossary-for-sctv-v2.pdf">Glossary</a></li>
                    <li class="py-1"><a class="hover:underline" href="{{ route('pages.faq', [app()->getLocale()]) }}" :active="request()->routeIs('faq')">FAQ's</a></li>
                    <li class="py-1"><a class="hover:underline" href="{{ route('contact-us', [app()->getLocale()]) }}" :active="request()->routeIs('contact-us')">Contact us</a></li>
                </ul>
            </div>
            <div class="w-full text-lg py-20">
                <p class="font-bold pb-2">Small print</p>
                <ul>
                    <li class="py-1"><a class="hover:underline" href="">Terms and conditions</a></li>
                    <li class="py-1"><a class="hover:underline" href="">Privacy policy</a></li>
                    <li class="py-1"><a class="hover:underline" href="">Cookies</a></li>
                </ul>
            </div>
            <div class="py-20">
                <img class="mb-4 w-28" src="https://www.social-care.tv/templates/default/images/cpd-corporate-partner-white.svg" alt="">
                <img class="mb-4 w-28" src="https://www.social-care.tv/templates/default/images/sfc-endorsed-provider-until-jan-24-footer.svg" alt="">
                <img class="mb-4 w-28" src="https://www.social-care.tv/templates/default/images/cyberessentials-whiteout-footer-1x.png" alt="">
            </div>
        </div>
    </div>
</section>