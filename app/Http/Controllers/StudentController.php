<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Students = Student::latest()->paginate(5);
        return view('student.index', compact('Students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:students',
            'phone' => 'required',
        ]);
        $Student = new Student();
        $Student->firstname = $request->firstname;
        $Student->lastname = $request->lastname;
        $Student->email = $request->email;
        $Student->phone = $request->phone;
        $Student->save();
        return redirect('/students')->with('msg', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Student = Student::findOrFail($id);
        return view('student.show', compact('Student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Student = Student::findOrFail($id);
        return view('student.edit', compact('Student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $Student = Student::findOrfail($id);
        $Student->update($request->all());
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Student = Student::findOrfail($id);
        $Student->delete();
        return back();
    }
}
