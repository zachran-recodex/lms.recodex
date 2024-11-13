<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="lg:w-1/2 flex justify-center items-center px-4 sm:px-8 lg:px-12 py-8 sm:py-12">
        <div class="max-w-[90%] w-full md:max-w-[450px] mx-auto">
            <header class="flex justify-center items-center gap-4 mb-4">
                <img src="{{ asset('images/logo/logo-ut.png') }}" class="block w-12 h-12 md:w-[50px] md:h-[50px]"
                    alt="Logo" />
                <h1 class="text-xl md:text-2xl font-bold">Prolift Academy</h1>
            </header>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username -->
                <div class="mb-4">
                    <x-input-label for="username" :value="__('Username')" />
                    <x-text-input id="username" class="h-12 sm:h-14 w-full" type="text" name="username"
                        :value="old('username')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full h-12 sm:h-14" type="password" name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="flex flex-col sm:flex-row justify-between items-center mb-7">
                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-0">
                        <input type="checkbox"
                            class="w-4 h-4 sm:w-5 sm:h-5 focus:ring-transparent rounded-full border border-bgray-300 focus:accent-ut-300 text-ut-300"
                            name="remember" id="remember" />
                        <label for="remember" class="text-bgray-900 text-sm sm:text-base font-semibold">Remember
                            me</label>
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" data-target="#multi-step-modal"
                                class="modal-open text-ut-300 font-semibold text-sm sm:text-base underline">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>

                <button class="py-3 w-full text-white font-bold bg-ut-300 hover:bg-ut-400 transition-all rounded-lg">
                    {{ __('Sign in') }}
                </button>
            </form>
            <p class="text-bgray-600 text-center text-xs sm:text-sm mt-6">
                @ 2024 Prolift Academy. All Right Reserved.
            </p>
        </div>
    </div>
</x-guest-layout>
