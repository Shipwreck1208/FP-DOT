@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="m-5 text-3xl font-bold">
                <h2> Show Photo</h2>
            </div>
            <div class="">
                <a class="bg-black text-yellow-300 hover:text-white p-3 m-3 rounded float-right font-bold" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="m-10">
        <div class="flex justify-center p-5">
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Category:</strong>
                {{ $product->category }}
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
