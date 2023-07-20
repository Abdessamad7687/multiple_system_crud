@extends('layout.base')
@section('content')

<div class="mt-6 flex w-96 mx-auto flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="p-6">

    <!-- label -->

    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>Product Label: </strong>
      {{ $Product['noun'] }}
    </h5>

    <!-- quantity -->



    <h4 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>Quantity: </strong>
      {{ $Product->quantity }}
    </h4>


    <!-- price -->


    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
      <strong>Price: </strong>
      {{ $Product->price }}
    </h5>
  </div>

  
  <div class="p-6 pt-0">
    <a href="{{ url('/products') }}" class="bg-red-400 p-3 border-rounded w-full">Back</a>
  </div>
</div>

@endsection