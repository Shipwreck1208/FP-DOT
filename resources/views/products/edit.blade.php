@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="m-5 text-gray-800 text-3xl font-bold">
            <h2> Edit Product</h2>
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
            <section class="flex flex-col my-5 bg-gray-300 p-4 sm:border-1 sm:rounded-md sm:shadow-lg">

    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-gray-300">
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Detail:</strong>
                    <textarea class="form-input" style="height:50px" name="detail" >{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Price:</strong>
                    <input type="text" class="form-input" style="height:50px" name="price" value="{{ $product->price }}" ></input>
                </div>

                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Status:</strong>
                    <select class="p-1 rounded" name="status" type="text">
                        <option value={{$product->status}}>
                            {{$product->status}}
                        </option>
                        <option value="In-Stock">In-Stock</option>
                        <option value="Out-Stock">Out-Stock</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Image:</strong>
                    <input type="file" name="image" class="form-input" placeholder="image">
                    <img src="/image/{{ $product->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded border border-gray-800 hover:bg-gray-800 hover:text-gray-300 float-right font-bold" href="{{ route('products.index') }}"> Back</a>

              <button type="submit" class="font-bold p-3 m-3 rounded-lg text-base bg-gray-300 p-3 text-gray-800 border border-gray-800 hover:bg-gray-800 hover:text-gray-300">Update</button>
            </div>
        </div>

    </form>
</section>
</div>
</div>
@endsection
