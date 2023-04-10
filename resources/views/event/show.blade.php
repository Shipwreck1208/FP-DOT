@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="m-5 text-gray-800 text-3xl font-bold">
                <h2> Show Event</h2>
            </div>
            <div class="">
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded border border-gray-800 hover:bg-gray-800 hover:text-gray-300 float-right font-bold" href="{{ route('event.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="mx-auto my-40 text-gray-800 border border-black rounded max-w-3xl">
        <div class="flex justify-center p-3">
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Date:</strong>
                {{ $event->date }}
            </div>
            </div>
        <div class="flex justify-center p-3">
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Name:</strong>
                {{ $event->name }}
            </div>
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Address:</strong>
                {{ $event->address }}
            </div>
        </div>
        <div class="flex justify-center p-3">
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Service:</strong>
                {{ $event->category_id }}
            </div>
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Hours:</strong>
                {{ $event->hours }}
            </div>
        </div>
        <div class="flex justify-center p-3">
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Capacity:</strong>
                {{ $event->amount }}
            </div>
            <div class="text-2xl font-medium m-3">
                <strong class="font-extrabold">Cost:</strong>
                {{ $event->cost }}
            </div>
        </div>
    </div>
@endsection
