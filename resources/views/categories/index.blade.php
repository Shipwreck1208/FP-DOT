@extends('layouts.app')

@section('content')
    <div class="">
    <div class="">
        <div class=" margin-tb">
            <div class="flex justify-center p-2 m-5 text-3xl font-black text-gray-800">
                <h2>Categories "<span class="font-black animate-pulse">{{$categories->count();}}</span>"</h2>

            </div>

            <div class="pull-right">
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded float-right font-bold" href="{{ route('categories.create') }}"> Add Category</a>
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded float-right font-bold" href="/admin/home">Back</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="w-96 mx-auto border border-black bg-green-500 font-bold animate-pulse">
        <p class="p-3 text-center">{{ $message }}</p>
    </div>
    @endif

    <table class="mx-14 my-44 w-11/12">
    <thead class="bg-gray-300">
        <tr class="text-gray-800">
            <th class="py-3 px-6 text-md font-bold uppercase">#</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Name</th>
            <th class="py-3 px-6 text-md font-bold uppercase" width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($categories as $category)
        <tr class="bg-gray-400 text-gray-800 border-b ">
            <td class="py-3 px-6 text-md font-medium uppercase">{{ $category->id}}</td>
            <td class="flex m-4 text-md font-medium">{{ $category->name }}</td>
            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">


                    <a class="bg-green-500 p-2 m-3 rounded text-md font-medium" href="{{ route('categories.edit',$category->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="bg-red-500 p-2 m-3 rounded text-md font-medium">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
