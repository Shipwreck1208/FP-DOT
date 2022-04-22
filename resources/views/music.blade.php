@extends('layouts.app')

@section('content')
       <div class="flex justify-center font-black text-4xl m-5"> <h1>Music</h1></div>
       <p class="float-right p-3 m-5 text-6xl"><a href="mailto:D.o.t.royaltyproduction@gmail.com">📧</a></p>
<div>
   <p class="font-normal p-3 m-5 bg-yellow-300 w-48"> We are ready to give you a service of a life time...</p>
</div>

<div class="flex justify-center p-3 m-5 ">

    @foreach ($products as $product)
    @if ($product->category == 'Music')
    <div class="p-5">
        <div class="text-2xl font-medium">
            <img src="/image/{{ $product->image }}" width="300px">
        </div>
    </div>
    @endif
    @endforeach
</div>


@endsection
