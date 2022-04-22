@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="m-5 text-3xl font-bold">
            <h2> Edit Category</h2>
        </div>
    </div>
</div>

    @if ($errors->any())
    <div class="border border-black bg-red-500 w-96 mx-auto">
        <strong class="text-base p-2 font-bold mb-2 sm:mb-4">Whoops! There were some problems with your input.</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="font-semibold">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="flex justify-center">
        <div class="">
            <section class="flex flex-col my-44 bg-white p-4 sm:border-1 sm:rounded-md sm:shadow-lg">

    <form action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="">
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Category:</strong>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-input">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="bg-black text-yellow-300 hover:text-white p-3 m-3 rounded float-right font-bold" href="{{ route('categories.index') }}"> Back</a>

              <button type="submit" class="font-bold p-3 m-3 rounded-lg text-base bg-black text-yellow-300 hover:text-white">Update</button>
            </div>
        </div>

    </form>
</section>
</div>
</div>
@endsection
