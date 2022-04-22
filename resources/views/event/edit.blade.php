@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="m-5 text-3xl font-bold">
            <h2> Edit Event</h2>
        </div>
    </div>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="flex justify-center">
        <div class="">
            <section class="flex flex-col bg-white p-4 sm:border-1 sm:rounded-md sm:shadow-lg">

    <form action="{{ route('event.update',$event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="">
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">Category:</strong>
                    <select class="" name="category" type="text">
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
                    <textarea class="form-input" style="height:150px" name="detail" >{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="bg-blue-400 p-3 m-3 rounded float-right font-bold" href="{{ route('event.index') }}"> Back</a>

              <button type="submit" class="font-bold p-3 m-3 rounded-lg text-base bg-blue-400 hover:bg-green-400">Update</button>
            </div>
        </div>

    </form>
</section>
</div>
</div>
@endsection
