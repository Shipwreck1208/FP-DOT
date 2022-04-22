@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    Welcome <span class="text-lg font-bold">{{Auth::user()->name}}</span>
                    You are logged in!
                </p>
            </div>
        </section>
            <a class="bg-black text-yellow-300 hover:text-white p-3 mt-5 rounded font-bold" href="/categories">Categories</a>
            <a class="bg-black text-yellow-300 hover:text-white p-3 mt-5 rounded font-bold" href="/products">Photos</a>
            <a class="bg-black text-yellow-300 hover:text-white p-3 mt-5 rounded font-bold" href="/event">Events</a>
            <a class="bg-black text-yellow-300 hover:text-white p-3 mt-5 rounded font-bold" href="/users">Users</a>

            <div class="bg-black text-yellow-300 hover:text-white p-3 m-6 rounded-2xl font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit modi voluptates, quod recusandae, corporis magnam nobis maxime libero nam doloribus exercitationem consequuntur asperiores temporibus officiis? Illo doloremque perferendis nostrum ipsa aliquam. Magni asperiores magnam nulla iste unde blanditiis atque in.</div>
        </div>
    </div>
</main>
@endsection
