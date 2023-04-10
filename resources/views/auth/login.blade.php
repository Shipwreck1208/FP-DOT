@extends('layouts.auth')

@section('content')
<main class="container mx-auto my-auto max-w-lg mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col bg-white mb-40 rounded-xl">

                <header class="font-bold bg-gray-200 text-gray-700 py-5 px-6 rounded-t-xl">
                    {{ __('Login') }}
                </header>

                <form class="w-full px-6 space-y-6 space-y-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') bg-red-500 @enderror" name="email"
                            value="{{ old('email') }}"  autocomplete="email" autofocus>
                        @if($errors->any())
                        @error('email')
                        <p class="border border-black bg-red-500 animate-pulse mt-2 rounded-3xl text-center p-2 mx-auto">
                            <span class="font-bold mb-2 sm:mb-4">{{ $message }}</span>
                        </p>
                        @enderror
                        @endif

                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') bg-red-500 @enderror" name="password"
                            >

                        @error('password')
                        <p class="border border-black bg-red-500 animate-pulse mt-2 rounded-3xl text-center p-2 mx-auto">
                            <span class="font-bold mb-2 sm:mb-4">{{ $message }}</span>
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                            <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                {{ old('remember') ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('Remember Me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap hover:underline ml-auto"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                        class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal bg-gray-300 text-gray-800 py-4">
                            {{ __('Login ') }}
                        </button>

                        @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-gray-700 my-6">
                            {{ __("Don't have an account?") }}
                            <a class="text-blue-500 hover:text-blue-700 hover:underline" href="{{ route('register') }}">
                                {{ __('Become a Member') }}
                            </a>
                        </p>
                        @endif
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
