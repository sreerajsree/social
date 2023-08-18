<title>Contact us - Social Care TV</title>
<x-app-layout>
    <!-- hero -->

    <div class="relative">
        <div class="trapezoid-bg trapezoid-bg--top trapezoid-bg--top-grey"></div>
        <main style="overflow: hidden;z-index:10;" class="relative">
            <div class="max-w-7xl mx-auto text-grey text-center">
                <p class="text-5xl pt-20">Contact us</p>
                <p class="text-2xl mt-10"><strong>Social Care TV</strong>, Hingham Manor, Hingham, NR9 4HP</p>
                <p class="mt-20 text-2xl" style="text-align: center;">
                    <a class="telephone" href="tel:01953853070"><i class="fas fa-phone-alt mr-2"></i>01953
                        853070</a>&nbsp;
                    <a class="contact_email" href="mailto:info@socialcare.tv"><i
                            class="far fa-envelope mr-2"></i>info@socialcare.tv</a>
                </p>
                <p class="mt-10 text-2xl font-bold text-left">Please use the contact form below should you wish to
                    request a
                    quotation or further information.</p>
                <p class="mt-10 text-xl text-left">Alternatively, our friendly team can be contacted between 9am and 5pm
                    Monday to Friday on the
                    telephone number above or by email. We are always happy to hear from our customers and those
                    interested in our training resources.</p>

                <form method="POST" action="{{ route('contact.send', app()->getLocale()) }}"
                    enctype="multipart/form-data" class="form p-6 my-10 relative">
                    @csrf
                    <div class="flex w-full">
                        <div class="w-1/4 text-xl text-left">
                            Name
                        </div>
                        <div class="w-2/4">
                            <input type="text" name="name" id="name" class="w-full">

                        </div>
                        <div class="w-1/4">
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex w-full mt-5">
                        <div class="w-1/4 text-xl text-left">
                            Company
                        </div>
                        <div class="w-2/4">
                            <input type="text" name="company" id="company" class="w-full">
                        </div>
                        <div class="w-1/4">
                            @error('company')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex w-full mt-5">
                        <div class="w-1/4 text-xl text-left">
                            Email
                        </div>
                        <div class="w-2/4">
                            <input type="email" name="email" id="email" class="w-full">
                        </div>
                        <div class="w-1/4">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex w-full mt-5">
                        <div class="w-1/4 text-xl text-left">
                            Telephone
                        </div>
                        <div class="w-2/4">
                            <input type="text" name="tel" id="tel" class="w-full">
                        </div>
                        <div class="w-1/4">
                            @error('tel')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex w-full mt-5">
                        <div class="w-1/4 text-xl text-left">
                            Number of courses required
                        </div>
                        <div class="w-2/4">
                            <input type="text" name="courses" id="courses" class="w-full">
                        </div>
                        <div class="w-1/4">
                            @error('courses')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex w-full mt-5">
                        <div class="w-1/4 text-xl text-left">
                            Message
                        </div>
                        <div class="w-2/4">
                            <textarea name="message" id="message" class="w-full input-extralarge"></textarea>
                        </div>
                        <div class="w-1/4">
                            @error('message')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <p class="italic text-2xl text-left">* denotes mandatory field</p>
                    <input type="submit" value="{{ __('Submit') }}" class="btn-primary float-left mt-8 mb-20">
                </form>
            </div>
        </main>
    </div>

    <section style="background: #03ABC9">
        <p class="text-center text-4xl my-10 text-white pt-20">Sign up for offers</p>
        <p class="text-lg text-center text-white">Join our mailing list and receive information on special offers and
            free courses. </p>
        <div class="container pb-8">
            <div class="mt-6 mb-10 p-8 md:p-16 flex flex-col md:flex-row items-center justify-between">
                <input class="w-full mr-3 mb-3 rounded-md p-3 hover:shadow-md" type="text" placeholder="First name">
                <input class="w-full mr-3 mb-3 rounded-md p-3 hover:shadow-md" type="text" placeholder="Surname">
                <input class="w-full mr-3 mb-3 rounded-md p-3 hover:shadow-md" type="email"
                    placeholder="Email address">
                <button class="btn-primary rounded-sm w-full">Sign up</button>
            </div>
        </div>
    </section>




    <x-slot name="js">

        <!-- alert -->
        {{-- https://www.youtube.com/watch?v=qxybVAyaXj8 --}}
        {{-- https://cdnjs.com/libraries/sweetalert --}}
        @if (Session::has('message_sent'))
            <script>
                // swal("Mensaje enviado!", "{!! Session::get('message_sent') !!}", "success", {
                //     button: "OK",
                // });

                swal({
                    title: "Mensaje enviado!",
                    text: "{!! Session::get('message_sent') !!}",
                    type: 'success',
                    icon: 'success',
                    buttonsStyling: false,
                    confirmButtonText: 'Cerrar',
                    confirmButtonColor: '#003876',
                    confirmButtonClass: 'btn btn-success'
                });
            </script>
        @endif

    </x-slot>


</x-app-layout>
