@extends('layout.base')
@section('content')

<div class="mx-auto justify-center items-center p-5 mt-5 flex flex-wrap gap-1">
    <!-- Students crud -->
    <a href="{{ url('/students') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Students Crud</h5>
    </a>

    <!-- Products crud -->

    <a href="{{ url('/products') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Products Crud</h5>
    </a>

    <!-- Employes crud -->

    <a href="{{ url('/employes') }}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Employes Crud</h5>
    </a>

</div>
@stop