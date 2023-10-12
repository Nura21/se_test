<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Grade;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('grade')->get();

        return view('student.index', compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();

        return view('student.create', compact("grades"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Student::create($request->validated());

        return to_route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show', compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $grades = Grade::all();

        return view('student.edit', compact("student", "grades"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return to_route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return to_route('students.index');
    }
}
