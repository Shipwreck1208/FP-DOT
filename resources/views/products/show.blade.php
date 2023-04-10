@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="m-5 text-gray-800 text-3xl font-bold">
                <h2> Show Product</h2>
            </div>
            <div class="">
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded float-right font-bold" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="m-10 text-gray-800">
        <div class="flex justify-center p-5">
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Category:</strong>
                {{ $product->category_id }}
            </div>
        </div>
        <div class="flex justify-center p-5">
            <div class="text-2xl font-medium">
                <strong class="font-extrabold">Detail:</strong>
                {{ $product->detail }}
            </div>
        </div>
        <div class="flex justify-center p-5">
            <div class="flex text-2xl font-medium">
                <strong class="font-extrabold p-3">Image: </strong>
                <img class="rounded-2xl" src="/image/{{ $product->image }}" width="500px" >
            </div>
        </div>
    </div>
@endsection
