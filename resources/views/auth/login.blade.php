<x-guest-layout>
    <div class="py-2">
        <img src="https://www.social-care.tv/templates/default/images/sctv-logo.svg" class="mx-auto" alt="">
    </div>

    <div class="relative">
        <div class="trapezoid-bg trapezoid-bg--top trapezoid-bg--top-grey"></div>
        <main style="overflow: hidden;z-index:10;" class="relative">
            <div class="max-w-7xl mx-auto text-grey text-center pb-40">
                <x-jet-authentication-card>
                    <p class="pb-10 text-2xl auth">Not yet joined? <a href="{{ route('register') }}">Sign up here.</a></p>
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                        @csrf

                        {{-- <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div> --}}

                        <div>
                            <x-jet-label for="identity" value="{{ __('Email') }}" />
                            <x-jet-input class="block mt-1 w-full max-w-full form-control" type="email" name="identity"
                                :value="old('email')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                                required autocomplete="current-password" />
                        </div>

                        {{-- <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div> --}}

                        <div class="flex items-center justify-center my-10 text-xl">
                            @if (Route::has('password.request'))
                            Forgotten your password? <a class="ml-1"
                                    href="{{ route('password.request', app()->getLocale()) }}">
                                    {{ __(' Click here') }}
                                </a>
                            @endif
                        </div>
                        <x-jet-button class="ml-4 bg-blue-600 hover:bg-blue-700">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </form>
                </x-jet-authentication-card>
            </div>
        </main>
    </div>

</x-guest-layout>
