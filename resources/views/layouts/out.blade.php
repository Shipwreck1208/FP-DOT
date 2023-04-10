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
<body class="bg-gradient-to-t from-black to-yellow-300 antialiased leading-none font-sans">
    <div id="app">
        <header class=" py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="/">
                        <span class="text-lg font-black bg-black p-2 rounded uppercase text-yellow-300 hover:text-white">{{ __('SPOP-LINE') }}</span>
                    </a>
                </div>
                <nav class="space-x-4 text-sm">
                    @guest
                    <a href="{{ route('login') }}" class="text-lg font-black uppercase text-yellow-300 hover:text-white bg-black p-2 rounded">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-lg font-black uppercase text-yellow-300 hover:text-white bg-black p-2 rounded">{{ __('Become A Member') }}</a>
                    @endif
                    @else
                        <span class="text-lg font-black bg-black p-2 rounded uppercase text-yellow-300 hover:text-white">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="text-lg font-black bg-black p-2 rounded uppercase text-yellow-300 hover:text-white"
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

    <footer class="p-4  bg-white md:px-6 md:py-8 dark:bg-gray-800">
        <div class="flex items-center justify-between">
          <a href="/" class="flex items-center mb-4">
            <img src="{{ asset('image\dot logo.jpg') }}" class="mr-4 h-8 rounded-md" alt="Dot Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white uppercase">dot</span>
          </a>
          <ul class="flex flex-wrap items-center mb-6">
            <li>
              <a href="#" class="mr-4 text-sm text-gray-500 md:mr-6 dark:text-gray-400">About</a>
            </li>
            <li>
              <a href="mailto:D.o.t.royaltyproduction@gmail.com" class="text-sm text-gray-500 dark:text-gray-400">Contact</a>
            </li>
          </ul>
        </div>
        <hr class="my-6 border-gray-200 mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 text-center dark:text-gray-400">© 2022 <a href="" target="_blank" class="uppercase">dot™</a>. All Rights Reserved. </span>
      </footer>
    </div>
</body>
</html>
