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
        $request->session()->flash('alert-success', 'Student added successfully!');
        return redirect()->route('students');

    }
}
