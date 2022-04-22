@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="m-5 text-3xl font-bold">
            <h2>Add Photo</h2>
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
                <select class="p-1 rounded" name="category" type="text">
                    <option disabled selected> -- Select an Category -- </option>
                    @foreach($categories as $category)
                    <option value={{$category->name}}>
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
        <div class=" text-center">
            <a class="bg-black text-yellow-300 hover:text-white p-3 m-3 rounded float-right font-bold" href="{{ route('products.index') }}"> Back</a>

                <button type="submit" class="font-bold p-3 m-3 rounded-lg text-base bg-black text-yellow-300 hover:text-white">Add</button>
        </div>
    </div>

</form>

</section>
</div>
</div>
@endsection
