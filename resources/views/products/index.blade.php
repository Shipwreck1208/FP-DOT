@extends('layouts.app')

@section('content')
    <div class="">
    <div class="">
        <div class=" margin-tb">
            <div class="flex justify-center p-2 m-5 text-3xl font-black">
                <h2>Photos "<span class="font-black animate-pulse">{{$products->count();}}</span>"</h2>

            </div>

            <div class="pull-right">
                <a class="bg-black text-yellow-300 hover:text-white p-3 m-3 rounded float-right font-bold" href="{{ route('products.create') }}"> Add Photo</a>
                <a class="bg-black text-yellow-300 hover:text-white p-3 m-3 rounded float-right font-bold" href="/admin/home">Back</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="w-96 mx-auto border border-black bg-green-500 font-bold animate-pulse">
        <p class="p-3 text-center">{{ $message }}</p>
    </div>
    @endif

    <table class="mx-14 my-14 w-11/12">
    <thead class="bg-gray-200">
        <tr>
            <th class="py-3 px-6 text-md font-bold uppercase">#</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Image</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Category</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Detail</th>
            <th class="py-3 px-6 text-md font-bold uppercase" width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($products as $product)
        <tr class="bg-white border-b ">
            <td class="py-3 px-6 text-md font-medium uppercase">{{ $product->id}}</td>
            <td  class="text-sm font-medium"><img src="/image/{{ $product->image }}" width="200px"></td>
            <td class="py-3 px-6 text-md font-medium uppercase">{{ $product->category }}</td>
            <td class="flex m-4 text-md font-medium">{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="bg-blue-500 p-2 m-3 rounded text-md font-medium" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="bg-green-500 p-2 m-3 rounded text-md font-medium" href="{{ route('products.edit',$product->id) }}">Edit</a>

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
