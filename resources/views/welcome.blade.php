 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('image\dot logo.jpg') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DOT') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="h-screen antialiased leading-none font-sans bg-gradient-to-t from-black to-yellow-300">


<div class="flex flex-col">
    @if(Route::has('login'))
    <div class="absolute top-0 left-0 mt-4 ml-4 ">
        <span class="text-lg font-black bg-black p-2 rounded uppercase text-yellow-300 hover:text-white">{{ __('DOT') }}</span>

    </div>
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
            @if (Auth::user()->is_admin == 1)
            <a href="{{ url('/admin/home') }}" class="text-lg font-black bg-black p-2 rounded uppercase text-yellow-300 hover:text-white">{{ __('Admin') }}</a>
            @else
            <a href="{{ url('/home') }}" class="text-lg font-black bg-black p-2 rounded uppercase text-yellow-300 hover:text-white">{{ __('Home') }}</a>
            @endif
            @else
                <a href="{{ route('login') }}" class="text-lg font-black bg-black p-2 rounded uppercase text-yellow-300 hover:text-white">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-lg font-black bg-black p-2 rounded uppercase text-yellow-300 hover:text-white">{{ __('Become A Member') }}</a>
                @endif
            @endauth
        </div>
        @endif
    <div class="min-h-screen flex items-center justify-center">

        <div class="flex flex-col justify-around h-full">
            <div>
                <img alt="team" class="flex-shrink-0 object-cover object-center w-20 h-20 mx-auto -mt-8 rounded-full shadow-xl aboslute transform hover: transition duration-500 hover:scale-150" src="{{ asset('image\dot logo.jpg') }}">
                <h1 class="mb-6 text-black text-center font-bold tracking-wider text-4xl sm:mb-8 sm:text-6xl" title="DOT Royal Production">
                    DOT
                </h1>
                <ul class="flex flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">
                    <li>
                        <a href="mailto:D.o.t.royaltyproduction@gmail.com" class="no-underline text-md font-black uppercase" title="Business Email">Business Email</a>
                    </li>
                    {{-- <li>
                        <a href="mailto:dashanellhutchinson@gmail.com" class="no-underline text-md font-black uppercase" title="Dashannell's Email">Dashannell's Email</a>
                    </li>
                    <li>
                        <a href="mailto:turayshippy7@gmail.com" class="no-underline text-md font-black uppercase" title="Turay's Email">Turay's Email</a>
                    </li> --}}
                    <li>
                        <a href="tel:8762513383" class="no-underline text-md font-black uppercase" title="Call in Office">Call in Office</a>
                    </li>
                    {{-- <li>
                        <a href="tel:8764925151" class="no-underline text-md font-black uppercase" title="Call Dashannell">Call Dashannell</a>
                    </li>
                    <li>
                        <a href="tel:8764049007" class="no-underline text-md font-black uppercase" title="Call Turay">Call Turay</a>
                    </li> --}}
                    <li>
                        <a href="https://www.instagram.com/d.o.t.royalty_productions/?igshid=YmMyMTA2M2Y=" class="no-underline text-md font-black uppercase" title="Instagram">Instagram</a>
                    </li>
                </ul>
            </div>
            <div class=" mt-40 animate-bounce">
                <p class="flex justify-center text-md font-extrabold  m-3">Scroll Down</p>
                <a class="flex justify-center" href="#1" title="SCROLL DOWN">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="currentColor"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/></g></svg>
                 </a>
        </div>
    </div>
    </div>

    <div class="min-h-screen bg-black">
        <div class="h-full text-yellow-300">
            <div>

    <ul class=" space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0 font-bold text-2xl">

        <div class="flex justify-center m-6 uppercase font-bold text-4xl sm:mb-8 sm:text-6xl">
            Welcome
        </div>
        <div class="flex justify-center">
            <div>
            <marquee class="w-96" direction="" onmouseover="this.stop();" onmouseout="this.start();">

            <div class=" flex">

                 <div class="bg-yellow-300 text-black p-2 m-2 rounded-lg"> <a href="/catering">Catering</a>
                </div>

                 <div class="bg-yellow-300 text-black p-2 m-2 rounded-lg"><a href="/music">Music</a>
                </div>

                 <div class="bg-yellow-300 text-black p-2 m-2 rounded-lg"><a href="/code">Software Development</a>
                </div>
            </div>
            </marquee>
            </div>
            </div>

    </div>
    </div>
<div class="flex justify-center">
    <div class="flex justify-center bg-yellow-300 rounded-full text-lg font-black w-4/6 text-center">
        <p class="border-r border-black p-2 m-2">"It will takes months to find a customer... seconds to lose one."</p>
        <p class="border-r border-black p-2 m-2">"Make your work so great that they'll want to see it again."</p>
        <p class="p-2 m-2">"Quality is remembered long after the price is forgotten."</p>
      </div></div><br>
    <div class="flex justify-center">
        <div class="bg-yellow-300 p-8 m-5 rounded-md text-lg font-black w-64 text-center transform hover: transition duration-500 hover:scale-150">
        <p>SATISFA<b class="text-red-600">C</b>TION</p>
        <P>TR<b class="text-red-600">U</b>ST</P>
        <P>PO<b class="text-red-600">S</b>ITIVITY</P>
        <P>CONVIC<b class="text-red-600">T</b>ION</P>
        <P>L<b class="text-red-600">O</b>YALTY</P>
        <P>FE<b class="text-red-600">E</b>LING</P>
        <P>EXPE<b class="text-red-600">R</b>IENCE</P>
        <p class="text-red-600"><b>"CUSTOMER"</b></p>
    </div>

        <div class="bg-yellow-300 p-8 m-5 rounded-md text-lg font-black w-64 text-center transform hover: transition duration-500 hover:scale-150">
        <p>CU<b class="text-red-600">S</b>TOMER</p>
        <P>FRI<b class="text-red-600">E</b>NDLY</P>
        <P>SUPPO<b class="text-red-600">R</b>T</P>
        <P>INNO<b class="text-red-600">V</b>ATIVE</P>
        <P>POS<b class="text-red-600">I</b>TIVE</P>
        <P>PRE<b class="text-red-600">C</b>ISE</P>
        <P>TIM<b class="text-red-600">E</b>LY</P>
        <p class="text-red-600"><b>"SERVICE"</b></p>
    </div>
    </div>
    </div>

    <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-800">
        <div class="sm:flex sm:items-center sm:justify-between">
          <a href="/" target="_blank" class="flex items-center mb-4 sm:mb-0">
            <img src="{{ asset('image\dot logo.jpg') }}" class="mr-4 h-8 rounded-md" alt="Dot Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white uppercase">dot</span>
          </a>
          <ul class="flex flex-wrap items-center mb-6 sm:mb-0">
            <li>
              <a href="#" class="mr-4 text-sm text-gray-500 md:mr-6 dark:text-gray-400">About</a>
            </li>
            <li>
              <a href="mailto:D.o.t.royaltyproduction@gmail.com" class="text-sm text-gray-500 dark:text-gray-400">Contact</a>
            </li>
          </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="" target="_blank" class="uppercase">dot™</a>. All Rights Reserved. </span>
      </footer>
</body>
<style>
    /* CSS Document */
marquee {
	margin-top: 5px;
	width: 50%;
}
</style>
</html>
