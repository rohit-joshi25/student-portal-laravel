<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Display all students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show the form to create a new student
    public function create()
    {
        return view('students.create');
    }

    // Store new student in database
    public function store(Request $request)
    {
        // ✅ 1. Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'course' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:100',
        ]);

        // ✅ 2. Store the data
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
            'age' => $request->age,
        ]);

        // ✅ 3. Redirect with success message
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }
}
