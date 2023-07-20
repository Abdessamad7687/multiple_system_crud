<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = Product::latest()->paginate(5);
        return view('product.index', ['Products' => $Products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'noun' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        //$newProduct = new Product();  
        Product::create($request->all());
        return redirect('/products')->with('message', 'Product added ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Product = Product::findOrFail($id);
        return view('product.show', compact('Product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Product = Product::findOrFail($id);
        return view('product.edit', ['Product' => $Product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Product = Product::findOrFail($id);
        $request->validate([
            'noun' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);
        $Product->update($request->all());
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();
        return back();
    }
}
