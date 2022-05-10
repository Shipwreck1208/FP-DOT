@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="m-5 text-3xl font-bold">
                <h2> Show Event</h2>
            </div>
            <div class="">
                <a class="bg-black text-yellow-300 hover:text-white p-3 m-3 rounded float-right font-bold" href="{{ route('event.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="mx-auto my-40 border border-black rounded max-w-3xl">
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
