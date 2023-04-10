@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-gray-800 m-5 text-3xl font-bold">
            <h2>Add Event</h2>
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
        <section class="flex flex-col my-10 bg-gray-300 p-4 sm:border-1 sm:rounded-md sm:shadow-lg">

<form class="w-full px-6" action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="">
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Date:</strong>
                <input type="date" name="date" class="form-input">
            </div>
            </div>
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Name:</strong>
                <input type="text" name="name" class="form-input" placeholder="Name">
            </div>
        </div>
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Required Service:</strong>
                <select class="p-1 rounded" name="category_id" type="text">
                    <option disabled selected> -- Select an Service -- </option>
                    @foreach($categories as $category)
                    <option value={{$category->id}}>
                        {{$category->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="p-3">
                <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Capacity:</strong>
                <select class="p-1 rounded" name="amount">
                    <option disabled selected >-- Select One --</option>
                    <option value="N/A">N/A</option>
                    <option value="50 less">50 less</option>
                    <option value="51 -100">51 -100</option>
                    </select>
            </div>
        </div>
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Required Hours:</strong>
                <input type="text" name="hours" class="form-input" placeholder="Hours">
            </div>
            <div class="p-3">
                <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Cost:</strong>
                <input type="text" name="cost" class="form-input" placeholder="Cost">
            </div>
        </div>
        <div class="flex justify-center m-3">
            <div class="p-3">
                <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Location:</strong>
                <input type="text" name="address" class="form-input" placeholder="Location">
            </div>
        </div>
        <div class=" text-center">
            <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded border border-gray-800 hover:bg-gray-800 hover:text-gray-300 float-right font-bold" href="{{ route('event.index') }}"> Back</a>

                <button type="submit" class="font-bold p-3 m-3 rounded-lg text-base bg-gray-300 text-gray-800 border border-gray-800 hover:bg-gray-800 hover:text-gray-300">Create</button>
        </div>
    </div>

</form>

</section>
</div>
</div>
@endsection
