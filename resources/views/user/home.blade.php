@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="border border-black bg-red-500 w-96 mx-auto my-3 text-center animate-pulse">
                <div class="font-semibold p-1">{{ session('error') }}</div>
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    Welcome {{ Auth::user()->name }} <br><br>
                    You are logged in!

                </p>
            </div>
        </section>
        <a class="bg-black text-yellow-300 hover:text-white p-2 uppercase rounded-lg" href="events">My Events</a>
        <div class="m-3">
            {{-- <span class="p-2 m-2">Services </span><span class="bg-gray-700 rounded text-white p-1 font-black animate-pulse">{{$products->count();}}</span> --}}

        </div>


            <div class="container mx-auto">
                <div class="grid grid-cols-3 gap-6 p-3 m-5 border border-black rounded-xl">
                    @foreach ($products as $product)
                    <div class="flex justify-center p-5 m-4 border border-black bg-white rounded-xl">
                        <div class="text-2xl font-medium text-center">
                            <span>{{ $product->category_id}}</span>
                            <img class="mt-6 rounded-2xl" src="/image/{{ $product->image }}" width="300px">
                            <span>{{ $product->detail}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

    </div>
</main>
@endsection
