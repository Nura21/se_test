<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradeRequest;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();

        return view('grade.index', compact("grades"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GradeRequest $request)
    {
        Grade::create($request->validate());

        return to_route('grades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        return view('grade.show', compact("grade"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        return view('grade.edit', compact("grade"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GradeRequest $request, Grade $grade)
    {
        $grade->update($request->validate());

        return to_route('grades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return to_route('grades.index');
    }
}
