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
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('error') }}
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
        <a class="bg-black text-yellow-300 hover:text-white p-2 uppercase rounded-lg" href="home">Back</a>

        <div class="container mx-auto m-3 p-3 border border-red-500 w-72 bg-red-500 rounded-xl animate-pulse">
            <p class="text-center font-extrabold"> For Possible Changes <br>
                <span class="text-white font-black text-lg"><a href="tel:8762153383">Call</a></span> OR
                <span class="text-white font-black text-lg"><a href="mailto:D.o.t.royaltyproduction@gmail.com">Email</a></span>
            </p>
            </div>

            <div class="container mx-auto ">
                <div class="grid grid-cols-3 gap-6 p-3 m-5 border border-black rounded-xl">
                    @foreach ($events as $event)
                    @if (Auth::user()->name === $event->name)
                    <div class="flex justify-center p-5 m-4 border border-black bg-white rounded-xl">
                        <div class="text-2xl font-medium text-center">
                        <div clas>
                            <span class="uppercase">{{ $event->name}}</span>
                        </div><hr>
                        <div class=" m-2">
                            <span class="m-2">{{ $event->date}}</span>
                        </div>
                        <div class="flex m-2">
                            <strong class="m-1">Service:</strong>
                            <span class="m-2">{{ $event->category_id}}</span>
                            <strong class="m-1">Hours:</strong><br>
                            <span class="m-2">{{ $event->hours}}</span>
                        </div>
                        <div class="flex m-2">
                            <strong class="m-1">Amount:</strong><br>
                            <span class="m-2">{{ $event->amount}}</span>
                            <strong class="m-1">Price:</strong><br>
                            <span class="m-2">{{ $event->cost}}</span>
                        </div>
                        <strong class="m-1">Location:</strong><br>
                            <span class="m-2">{{ $event->address}}</span>
                        </div>
                    </div>

                        @endif
                        @endforeach
            </div>


    </div>
</main>

@endsection
