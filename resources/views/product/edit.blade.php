

@extends('layout.base')
@section('content')
<div class="w-1/2 mx-auto mt-5">
    <h1 class="text-center">Edit Product</h1>
    <form action="{{ route('products.update', $Product->id) }}" method="POST" class="max-w-md mx-auto">
        @csrf
        @method('PUT')
         <!-- noun -->
        <div class="mb-4">
            <label for="noun" class="block font-medium text-gray-700">Product Label</label>
            <input type="text" name="noun" id="noun" class="border-gray-300 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md shadow-sm p-2" value="{{ $Product->noun }}">
            @error('noun')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <!-- quantity -->

        <div class="mb-4">
            <label for="quantity" class="block font-medium text-gray-700">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="border-gray-300 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md shadow-sm p-2" value="{{ $Product->quantity }}">
            @error('quantity')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


         <!-- price -->
        <div class="mb-4">
            <label for="price" class="block font-medium text-gray-700">price</label>
            <input type="number" name="price" id="price" class="border-gray-300 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md shadow-sm p-2 " value="{{ $Product->price }}">
            @error('price')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <div class="mb-4">
            <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded hover:bg-indigo-600">Update Product</button>
        </div>
        <div>
            <a href="{{ url('/products') }}" class="text-blue-500 p-2">Back</a>
        </div>
    </form>
</div>


@stop