@extends('layouts.app')

@section('content')
    <div class="">
    <div class="">
        <div class=" margin-tb">
            <div class="flex justify-center text-gray-800 p-2 m-5 text-3xl font-black">
                <h2>Events "<span class="font-black animate-pulse">{{$events->count();}}</span>"</h2>

            </div>

            <div class="pull-right">
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded float-right font-bold" href="{{ route('event.create') }}"> Add Event</a>
                <a class="bg-gray-300 p-3 text-gray-800 m-3 rounded float-right font-bold" href="/admin/home">Back</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="w-96 mx-auto border border-black bg-green-500 font-bold animate-pulse">
        <p class="p-3 text-center">{{ $message }}</p>
    </div>
    @endif

    <table class="mx-14 my-14 w-11/12">
    <thead class="bg-gray-300 text-gray-800">
        <tr>
            <th class="py-3 px-6 text-md font-bold uppercase">#</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Date</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Name</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Service</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Hours</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Capacity</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Address</th>
            <th class="py-3 px-6 text-md font-bold uppercase">Cost</th>
            <th class="py-3 px-6 text-md font-bold uppercase" width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($events as $event)
        <tr class="bg-gray-400 text-gray-800 border-b text-center">
            <td class="py-3 px-6 text-md font-medium uppercase">{{ $event->id}}</td>
            <td class="m-4 text-md font-medium">{{ $event->date }}</td>
            <td class="m-4 text-md font-medium">{{ $event->name }}</td>
            <td class="m-4 text-md font-medium">{{ $event->category_id }}</td>
            <td class="m-4 text-md font-medium">{{ $event->hours }}</td>
            <td class="m-4 text-md font-medium">{{ $event->amount }}</td>
            <td class="m-4 text-md font-medium">{{ $event->address }}</td>
            <td class="m-4 text-md font-medium">{{ $event->cost }}</td>
            <td>
                <form action="{{ route('event.destroy',$event->id) }}" method="POST">

                    <a class="bg-blue-500 p-2 m-3 rounded text-md font-medium" href="{{ route('event.show',$event->id) }}">Show</a>

                    <a class="bg-green-500 p-2 m-3 rounded text-md font-medium" href="{{ route('event.edit',$event->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="bg-red-500 p-2 m-3 rounded text-md font-medium">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
