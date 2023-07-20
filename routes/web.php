<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeController;




Route::get('/', function(){
    return view('layout.base');
})->name('home');

// student routes
Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students/create', [StudentController::class, 'store'])->name('student.store');

Route::get('/students/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::get('/students/view/{id}', [StudentController::class, 'show'])->name('student.show');

// product routes
Route::resource('products', ProductController::class);

//employe routes
Route::resource('employes', EmployeController::class);