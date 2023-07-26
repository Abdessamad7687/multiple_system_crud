<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $Employes = Employe::latest()->paginate(5);
        return view('employe.index', ['Employes' => $Employes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:employes',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required|file'
        ]);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->merge(['image' => $imageName]);
            $request->image = $imageName;
        }   
        Employe::create($request->all());

        return redirect('/employes');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Employe = Employe::findOrFail($id);
        return view('employe.show', ['Employe' => $Employe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Employe = Employe::findOrFail($id);
        return view('employe.edit', ['Employe' => $Employe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Employe = Employe::findOrFail($id);
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required'
        ]);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/images'), $imageName);
            $request->image = $imageName;
        }   
        return redirect('/employes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Employe = Employe::findOrFail($id);
        $Employe->delete();
        return back();
    }
}
