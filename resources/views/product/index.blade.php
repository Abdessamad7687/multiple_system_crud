@extends('layout.base')
@section('content')

<div class="p-4">
        <h3 class="text-xl font-bold mb-4 text-center my-4 ">Products crud Program</h3>
        <a href="{{ route('products.create') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-700">Add new Product</a>
    </div>

    <table class="w-3/4 mx-auto">
    <div class="w-3/4 mx-auto">
        {{ $Products->links()  }}
    </div>
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Product Label</th>
                <th class="px-4 py-2">quantity</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($Products as $Product)
                <tr>
                    <td class="border px-4 py-2">{{ $Product['id'] }}</td>
                    <td class="border px-4 py-2">{{ $Product['noun'] }}</td>
                    <td class="border px-4 py-2">{{ $Product['quantity'] }}</td>
                    <td class="border px-4 py-2">{{ $Product['price'] }}</td>
                    <td class="border px-4 py-2">
                        <button class="bg-blue-500 text-white py-1 px-2 rounded">
                            <a href="{{ route('products.edit' , $Product->id) }}" class="text-white">Edit</a>
                        </button>
                        <button class="bg-yellow-500 text-white py-1 px-2 rounded">
                            <a href="{{ route('products.show' , $Product->id) }}" class="text-white">View</a>
                        </button>
                        <form action="{{ url('/products/' . $Product->id) }}" method="post" class="inline">
                            @csrf 
                            @method('DELETE')
                            <button class="bg-red-500 text-white py-1 px-2 rounded" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection