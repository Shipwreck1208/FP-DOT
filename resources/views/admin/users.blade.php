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

            <header class="font-semibold bg-gray-200 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                All Members
                <span class="bg-gray-700 rounded text-white p-1 font-black animate-pulse">{{$users->count();}}</span>
            </header>
        </section>
            <a class="bg-black text-yellow-300 hover:text-white p-3 m-3 rounded float-right font-bold" href="/admin/home">Back</a><br><br>
            <div class="container mx-auto">
                <div class="grid grid-cols-3 gap-5">
                            @foreach ($users as $user)
                            @if($user->is_admin == 0)
                            <div class="bg-black text-yellow-300 hover:text-white p-3 m-3 rounded font-bold w-52 transform hover: transition duration-500 hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M16 8a5 5 0 1 0 5 5a5 5 0 0 0-5-5Z"/><path fill="currentColor" d="M16 2a14 14 0 1 0 14 14A14.016 14.016 0 0 0 16 2Zm7.992 22.926A5.002 5.002 0 0 0 19 20h-6a5.002 5.002 0 0 0-4.992 4.926a12 12 0 1 1 15.985 0Z"/></svg>
                                <span > {{$user->name}}</span>
                                <br><br> <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="currentColor" d="M32.33 6a2 2 0 0 0-.41 0h-28a2 2 0 0 0-.53.08l14.45 14.39Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="m33.81 7.39l-14.56 14.5a2 2 0 0 1-2.82 0L2 7.5a2 2 0 0 0-.07.5v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V8a2 2 0 0 0-.12-.61ZM5.3 28H3.91v-1.43l7.27-7.21l1.41 1.41Zm26.61 0h-1.4l-7.29-7.23l1.41-1.41l7.27 7.21Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                                 <a  href="mailto:{{$user->email}}">{{$user->email}}</a>
                                <br><br> <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0a1 1 0 0 0 2 0z"/></svg>
                                <a  href="tel:{{$user->phone}}">{{$user->phone}}</a>
                                <br><br>
                                <p >{{$user->address}}</p>
                            </div>
                            @endif
                            @endforeach
                          </div>
    </div>
</main>
@endsection
