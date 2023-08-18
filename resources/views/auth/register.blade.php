<x-guest-layout>
    <div class="py-2">
        <img src="https://www.social-care.tv/templates/default/images/sctv-logo.svg" class="mx-auto" alt="">
    </div>

    <div class="relative">
        <div class="trapezoid-bg trapezoid-bg--top trapezoid-bg--top-grey"></div>
        <main style="overflow: hidden;z-index:10;" class="relative">
            <div class="max-w-7xl mx-auto text-grey text-center pb-40">
                <x-jet-authentication-card>
                    <p class="pb-10 text-2xl auth">Already Joined? <a href="{{ route('login') }}">Log in here.</a></p>
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register', app()->getLocale()) }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <x-jet-label for="identity" value="{{ __('First Name*') }}" />
                                <x-jet-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>
                            <div>
                                <x-jet-label for="identity" value="{{ __('Surname*') }}" />
                                <x-jet-input id="lastname" class="block mt-1 w-full form-control" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-4">
                            <div>
                                <x-jet-label for="company" value="{{ __('Company/Organisation') }}" />
                                <x-jet-input id="company" class="block mt-1 w-full form-control" type="text"
                                    name="company" required autocomplete="company" />
                            </div>
                            <div>
                                <x-jet-label for="home" value="{{ __('Name of home, agency, etc.') }}" />
                                <x-jet-input id="home" class="block mt-1 w-full form-control" type="text"
                                    name="home" required autocomplete="home" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-4">
                            <div>
                                <x-jet-label for="password" value="{{ __('Email*') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
                            </div>
                            <div>
                                <x-jet-label for="phone" value="{{ __('Telephone number*') }}" />
                                <x-jet-input id="phone" class="block mt-1 w-full form-control" type="text"
                                    name="phone" required autocomplete="phone" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-4">
                            <div>
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>
                            <div>
                                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="document_type" value="{{ __('Would you like trainees to be able to download their own certificate?') }}" />
                            <select name="document_type" class="block mt-1 w-full form-control">
                                <option value="CED">{{ __('Yes - Allow trainees to download certificates (Default)') }}</option>
                                <option value="PAS" @if (old('document_type') == "PAS") selected @endif >{{ __('No - Only the manager will be able to download certificates') }}</option>
                            </select>
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="my-8">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show', app()->getLocale() ).'" class="text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show', app()->getLocale() ).'" class="text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
                        <x-jet-button class="ml-4 bg-blue-600 hover:bg-blue-700">
                            {{ __('Register') }}
                        </x-jet-button>
                    </form>
                </x-jet-authentication-card>
            </div>
        </main>
    </div>

</x-guest-layout>
