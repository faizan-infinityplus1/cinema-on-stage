<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mt-8">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">{{ __('Log in to your account') }}</h2>
            </div>

            <div class="mt-6">
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox" class="text-indigo-600 dark:text-indigo-400 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" name="remember">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900 dark:text-gray-100">{{ __('Remember me') }}</label>
                        </div>

                        <!-- @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif -->
                    </div>

                    <div class="mt-6">
                        <button type="submit"  class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50" style="background-color: #3b82f6;">
                            <div class="flex justify-center items-center">
                                {{ __('Log in') }}
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
