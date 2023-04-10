@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="m-5 text-gray-800 text-3xl font-bold">
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

    <div class="flex justify-center mb-5">
        <div class="">
            <section class="flex flex-col bg-gray-300 p-4 sm:border-1 sm:rounded-md sm:shadow-lg">

    <form action="{{ route('event.update',$event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="">
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Date:</strong>
                    <input type="date" name="date" value="{{ $event->date }}" class="form-input">
                </div>
                </div>
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Name:</strong>
                    <input type="text" name="name" value="{{ $event->name }}" class="form-input" >
                </div>
            </div>
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Required Hours:</strong>
                    <input type="text" name="hours" class="form-input" value="{{ $event->hours }}">
                </div>
                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Cost:</strong>
                    <input type="text" name="cost" class="form-input" value="{{ $event->cost }}">
                </div>
            </div>
            <div class="flex justify-center m-3">
                <div class="p-3">
                    <strong class="block text-gray-800 text-sm font-bold mb-2 sm:mb-4">Location:</strong>
                    <input type="text" name="address" class="form-input" value="{{ $event->address }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded border border-gray-800 hover:bg-gray-800 hover:text-gray-300 float-right font-bold" href="{{ route('event.index') }}"> Back</a>

              <button type="submit" class="font-bold p-3 m-3 rounded-lg text-base bg-gray-300 text-gray-800 border border-gray-800 hover:bg-gray-800 hover:text-gray-300">Update</button>
            </div>
        </div>

    </form>
</section>
</div>
</div>
@endsection
