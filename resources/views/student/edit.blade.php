@extends('layout.base')
@section('content')
<div class="w-1/2 mx-auto mt-5">
    <h1 class="text-center">Update Student informations</h1>
    <form action="{{ route('student.update', $Student->id) }}" method="POST" class="max-w-md mx-auto">
        @method('PUT')
        @csrf

         <!-- firstname -->
        <div class="mb-4">
            <label for="firstname" class="block font-medium text-gray-700">First Name</label>
            <input type="text" name="firstname" id="firstname" class="border-gray-300 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md shadow-sm p-2" value="{{ $Student->firstname }}">
            @error('firstname')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <!-- lastname -->

        <div class="mb-4">
            <label for="lastname" class="block font-medium text-gray-700">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="border-gray-300 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md shadow-sm p-2" value="{{ $Student->lastname }}">
            @error('lastname')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


         <!-- email -->
        <div class="mb-4">
            <label for="email" class="block font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="border-gray-300 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md shadow-sm p-2" value="{{ $Student->email }}">
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

            <!-- phone -->

        <div class="mb-4">
            <label for="phone" class="block font-medium text-gray-700">Phone</label>
            <input type="tel" name="phone" id="phone" class="border-gray-300 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border rounded-md shadow-sm p-2" value="{{ $Student->phone }}">
            @error('phone')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <div class="mb-4">
            <button type="submit" class="bg-indigo-800 text-white py-2 px-4 rounded hover:bg-indigo-600 w-full">Update</button>
        </div>
        <div>
            <a href="{{ url('/students') }}" class="text-blue-500">Back</a>
        </div>
    </form>
</div>
@endsection
