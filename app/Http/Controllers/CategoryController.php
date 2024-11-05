<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentdata= Category::paginate(10);
        return view('studentdata.index', [
            'studentdata' => $studentdata
        ]);
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studentdata.create');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'student_email' => 'required|email|unique:studentdata,student_email|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'enrollment_number' => 'required|string|max:50|unique:studentdata,enrollment_number',
            'course' => 'required|string|max:255',
            'enrollment_date' => 'required|date',
        ]);

        Category::create($request->all());

        return redirect('/studentdata')->with('Student data Saved Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('studentdata.show');    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('studentdata.edit');    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
