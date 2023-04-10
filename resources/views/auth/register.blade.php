@extends('layouts.auth')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col mb-16 bg-white sm:border-1 sm:rounded-md sm:shadow-lg">

                <header class="font-bold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Become a Member') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  bg-red-500 @enderror"
                            name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Your Name">

                        @error('name')
                        <p class="border border-black bg-red-500 animate-pulse mt-2 rounded-3xl text-center p-2 mx-auto">
                            <span class="font-bold mb-2 sm:mb-4">{{ $message }}</span>
                        </p>
                        @enderror
                    </div>

                    <div class="w-1/2 mr-1">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') bg-red-500 @enderror" name="email"
                            value="{{ old('email') }}" autocomplete="email" placeholder="Your Email">

                        @error('email')
                        <p class="border border-black bg-red-500 animate-pulse mt-2 rounded-3xl text-center p-2 mx-auto">
                            <span class="font-bold mb-2 sm:mb-4">{{ $message }}</span>
                        </p>
                        @enderror
                    </div>
                    </div>

                    <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Phone Number') }}:
                        </label>

                        <input id="phone" type="text" class="form-input w-full @error('phone')  bg-red-500 @enderror"
                            name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus placeholder="Your Mobile">

                        @error('phone')
                        <p class="border border-black bg-red-500 animate-pulse mt-2 rounded-3xl text-center p-2 mx-auto">
                            <span class="font-bold mb-2 sm:mb-4">{{ $message }}</span>
                        </p>
                        @enderror
                    </div>

                    <div class="w-1/2 mr-1">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Address') }}:
                        </label>

                        <input id="address" type="text"
                            class="form-input w-full @error('address') bg-red-500 @enderror" name="address"
                            value="{{ old('address') }}" autocomplete="address" placeholder="Your Address">

                        @error('address')
                        <p class="border border-black bg-red-500 animate-pulse mt-2 rounded-3xl text-center p-2 mx-auto">
                            <span class="font-bold mb-2 sm:mb-4">{{ $message }}</span>
                        </p>
                        @enderror
                    </div>
                    </div>

                    <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') bg-red-500 @enderror" name="password"
                         autocomplete="new-password" placeholder="Your Password">

                        @error('password')
                        <p class="border border-black bg-red-500 animate-pulse mt-2 rounded-3xl text-center p-2 mx-auto">
                            <span class="font-bold mb-2 sm:mb-4">{{ $message }}</span>
                        </p>
                        @enderror
                    </div>

                    <div class="w-1/2 mr-1">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" autocomplete="new-password" placeholder="Re-Enter Your Password">
                    </div>
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal bg-gray-300 text-gray-800 sm:py-4">
                            {{ __('Become a Member') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
