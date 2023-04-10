@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="m-5 text-3xl font-bold">
            <h2>Add Product</h2>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="border border-black bg-red-500 w-96 mx-auto">
    <strong class="text-base p-2 font-bold mb-2 sm:mb-4">Whoops! There were some problems with your input.</strong><br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li class="font-semibold p-1"><span class="text-lg font-black">*</span>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="flex justify-center">
    <div class="">
        <section class="flex flex-col my-16 bg-white p-4 sm:border-1 sm:rounded-md sm:shadow-lg">

<form class="w-full px-6" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="">
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Category:</strong>
                <select class="p-1 rounded" name="category_id" type="text">
                    <option disabled selected> -- Select an Category -- </option>
                    @foreach($products as $category)
                    <option value={{$category->id}}>
                        {{$category->name}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Detail:</strong>
                <textarea class="form-input" style="height:50px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Image:</strong>
                <input type="file" name="image" class="form-input" placeholder="image">
            </div>
        </div>
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Price:</strong>
                <input type="text" class="form-input" style="height:50px" name="price" placeholder="Price"></input>
            </div>

            <div class="p-3">
                <strong class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Status:</strong>
                <select class="p-1 rounded" name="status" type="text">
                    <option disabled selected> -- Select a Status -- </option>
                    <option value="In-Stock">In-Stock</option>
                    <option value="Out-Stock">Out-Stock</option>
                </select>
            </div>
        </div>
        <div class=" text-center">
            <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded border border-gray-800 hover:bg-gray-800 hover:text-gray-300 float-right font-bold" href="{{ route('products.index') }}"> Back</a>

                <button type="submit" class="font-bold bg-gray-300 p-3 text-gray-800 m-3 rounded-lg text-base border border-gray-800 hover:bg-gray-800 hover:text-gray-300">Add</button>
        </div>
    </div>

</form>

</section>
</div>
</div>
@endsection
