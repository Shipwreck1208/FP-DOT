@extends('layouts.app')

@section('content')
    <div class="">
    <div class="">
        <div class=" margin-tb">
            <div class="flex justify-center text-gray-800 p-2 m-5 text-3xl font-black">
                <h2>Products "<span class="font-black animate-pulse">{{$products->count();}}</span>"</h2>

            </div>

            <div class="pull-right">
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded float-right font-bold" href="{{ route('products.create') }}"> Add Product</a>
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded float-right font-bold" href="/admin/home">Back</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="w-96 mx-auto border border-black bg-green-500 font-bold animate-pulse">
        <p class="p-3 text-center">{{ $message }}</p>
    </div>
    @endif

    <table class="mx-14 my-14 w-11/12">
    <thead class="bg-gray-300">
        <tr class="text-gray-800">
            <th class="py-3 px-6 text-md font-bold uppercase">#</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Image</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Category</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Detail</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Price</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Status</th>
            <th class="py-3 px-6 text-md font-bold uppercase" width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($products as $product)
        <tr class="bg-gray-400 text-gray-800 border-b ">
            <td class="py-3 px-6 text-md font-medium uppercase">{{ $product->id}}</td>
            <td  class="w-32 h-32 rounded-full mx-auto"><img src="/image/{{ $product->image }}"></td>
            <td class="py-3 px-6 text-md font-medium uppercase">{{ $product->category_id }}</td>
            <td class="flex m-4 text-md font-medium">{{ $product->detail }}</td>
            <td class="m-4 text-md font-medium">{{ $product->price }}</td>
            <td class="m-4 text-md font-medium">{{ $product->status }}</td>
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
