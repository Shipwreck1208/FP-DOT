<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('image\spop1.jpeg') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-400 antialiased leading-none font-sans">
    <div id="app">
        <header class=" py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="/">
                        <span class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ __('SPOP-LINE') }}</span>
                    </a>
                </div>
                <nav class="space-x-4 text-sm">
                    @guest
                    <a href="{{ route('login') }}" class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ __('Become A Member') }}</a>
                    @endif
                    @else
                        <span class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="p-4 bg-gray-300 rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-800">
            <div class="sm:flex sm:items-center sm:justify-between">
              <a href="/" class="flex items-center mb-4 sm:mb-0">
                <img src="{{ asset('image\spop1.jpeg') }}" class="mr-4 h-8 rounded-md" alt="SPOP LOGO" />
                <span class="self-center text-gray-800 text-xl font-semibold whitespace-nowrap dark:text-white uppercase">SPOP-LINE</span>
              </a>
              <ul class="flex flex-wrap items-center mb-6 sm:mb-0">
                <li>
                  <a href="#" class="mr-4 text-sm text-gray-800 md:mr-6 dark:text-gray-400">About</a>
                </li>
                <li>
                  <a href="mailto:D.o.t.royaltyproduction@gmail.com" class="text-sm text-gray-800 dark:text-gray-400">Contact</a>
                </li>
              </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-800 sm:text-center dark:text-gray-400">© 2023 <a href="" target="_blank" class="uppercase">SPOP-LINE™</a>. All Rights Reserved. </span>
          </footer>
    </div>
</body>
</html>
