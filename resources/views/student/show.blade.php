@extends('layout.base')
@section('content')

<div class="mt-6 flex w-96 mx-auto flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="p-6">

    <!-- firstname -->

    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>fullName: </strong>
      {{ $Student['firstname'] }} {{ $Student['lastname'] }}
    </h5>

    <!-- email -->



    <h4 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>Email: </strong>
      {{ $Student->email }}
    </h4>


    <!-- phone -->


    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>Phone: </strong>
      {{ $Student->phone }}
    </h5>
  </div>

  
  <div class="p-6 pt-0">
    <a href="{{ url('/students') }}" class="bg-red-400 p-3 border-rounded w-full">Back</a>
  </div>
</div>

@endsection