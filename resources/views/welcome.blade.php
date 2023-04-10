 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('image\spop1.jpeg') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SPOP-LINE') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="h-screen antialiased leading-none font-sans bg-blue-400">


<div class="flex flex-col">
    @if(Route::has('login'))
    <div class="absolute top-0 left-0 mt-4 ml-4 ">
        <a href="/">
            <span class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ __('SPOP-LINE') }}</span>
        </a>
    </div>
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
            @if (Auth::user()->is_admin == 1)
            <a href="{{ url('/admin/home') }}" class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ __('Admin') }}</a>
            @else
            <a href="{{ url('/home') }}" class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ __('Home') }}</a>
            @endif
            @else
                <a href="{{ route('login') }}" class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-lg font-black bg-gray-300 p-2 rounded uppercase text-gray-800">{{ __('Become A Member') }}</a>
                @endif
            @endauth
        </div>
        @endif
    <div class="min-h-screen flex items-center justify-center">

        <div class="flex flex-col justify-around h-full">
            <div>
                <img alt="BAD N BOOGIE" class="flex-shrink-0 object-cover object-center w-20 h-20 mx-auto -mt-8 rounded-full shadow-xl aboslute transform hover: transition duration-500 hover:scale-150" src="{{ asset('image\spop1.jpeg') }}">
                <h1 class="mb-6 text-gray-800 text-center font-bold tracking-wider text-4xl sm:mb-8 sm:text-6xl" title="SPOP-LINE">

                    SPOP-LINE
                </h1>
                <ul class="flex flex-col space-y-2 sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0">
                    <li>
                        <a href="mailto:gmail.com" class="text-gray-300 no-underline text-md font-black uppercase" title="Business Email">Business Email</a>
                    </li>
                    <li>
                        <a href="tel:8765663601" class="text-gray-300 no-underline text-md font-black uppercase" title="Call in Office">Call</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/d.o.t.royalty_productions/?igshid=YmMyMTA2M2Y=" class="text-gray-300 no-underline text-md font-black uppercase" title="Instagram">Instagram</a>
                    </li>
                </ul>
            </div>
            <div class="text-gray-800 mt-40 animate-bounce">
                <p class="flex justify-center text-md font-extrabold  m-3">Scroll Down</p>
                <a class="flex justify-center" href="#1" title="SCROLL DOWN">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="4em" height="4em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="currentColor"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/></g></svg>
                 </a>
        </div>
    </div>
    </div>

    <div class="bg-gray-300 p-3">
        <p class="text-gray-800 text-center font-bold text-2xl ">Items We Have</p>
    </div>


    <div class="container mx-auto">
        <div class="grid lg:grid-cols-3 gap-6 md:grid-cols-2 grid-cols-1 p-3 m-5 border border-black rounded-xl">
            @foreach ($products as $product)
            <div class="flex justify-center p-5 m-4 bg-gray-300 text-gray-800 border border-gray-800 rounded-xl">
                <div class="text-2xl font-medium text-center">
                    {{-- <span>{{ $product->category_id}}</span> --}}
                    <img class="w-48 h-48 rounded-full mx-auto" src="/image/{{ $product->image }}">
                    <span>{{ $product->detail}}</span>
                    <span>{{ $product->price}}</span>
                   <div class="flex m-2">
                    <a class="bg-blue-400 text-gray-800 p-2 m-2 rounded-2xl" href="/image/{{ $product->image }}">Preview</a>
                    <span class="bg-blue-400 text-gray-800 p-2 m-2 rounded-2xl">{{ $product->status}}</span>
                   </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- <div class="flex justify-center">
<div class="grid lg:grid-cols-3 lg:gap-4 md:grid-cols-2 md:gap-4 grid-cols-1 gap-4 m-8 px-14 pb-16">

<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
    <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
</a>
<div class="px-5 pb-5">
        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>

    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">In Stock</p>
    </div>
</div>
</div>



<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
    <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
</a>
<div class="px-5 pb-5">

        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>

    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Out Stock</p>
    </div>
</div>
</div>



<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
        <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
    </a>
<div class="px-5 pb-5">

        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>

    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">In Stock</p>
    </div>
</div>
</div>

<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
    <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
</a>
<div class="px-5 pb-5">
    <a class="" href="#">
        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
    </a>
    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">In Stock</p>
    </div>
</div>
</div>



<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
    <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
</a>
<div class="px-5 pb-5">

        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>

    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Out Stock</p>
    </div>
</div>
</div>



<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
        <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
    </a>
<div class="px-5 pb-5">

        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>

    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">In Stock</p>
    </div>
</div>
</div>

<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
    <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
</a>
<div class="px-5 pb-5">
    <a class="" href="#">
        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
    </a>
    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">In Stock</p>
    </div>
</div>
</div>



<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
    <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
</a>
<div class="px-5 pb-5">

        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>

    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Out Stock</p>
    </div>
</div>
</div>



<div class="w-full max-w-sm bg-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
<a class="flex justify-center" href="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}">
    <img class="p-8 rounded-2xl h-[300px]" src="{{ asset('image\tai-s-captures-gWJKFw69lHs-unsplash.jpg') }}" alt="product image" />
</a>
<div class="px-5 pb-5">

        <h5 class="text-center text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>

    <div class="flex items-center justify-between">
        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
        <p class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">In Stock</p>
    </div>
</div>
</div>

</div>
</div> --}}

    </div>

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
</body>
<style>
    /* CSS Document */
marquee {
	margin-top: 5px;
	width: 50%;
}
</style>
</html>
