<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //

    public function index(Request $request){
        $students  = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StoreStudentRequest $request){
        $validated = $request->validated();
        unset($validated['confirmPassword']);
        $validated['password'] = Hash::make($validated['password']);
        Student::create($validated);
        $request->session()->flash('alert-success', 'Student saved successfully!');
        return redirect()->route('students');

    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.create', compact('student'));
    }

    public function update(StoreStudentRequest $request, $id)
    {
        $student = Student::findOrFail($id);
        $validated = $request->validated();
        unset($validated['confirmPassword']);
        $validated['password'] = Hash::make($validated['password']);
        $student->update($validated);
        $request->session()->flash('alert-success', 'Student saved successfully!');
        return redirect()->route('students');
    }

    public function show($id)
    {
        return view('students.show');
    }

    public function destroy($id)
    {
        $student = \App\Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students')->with('alert-success', 'Student deleted successfully!');
    }
}
