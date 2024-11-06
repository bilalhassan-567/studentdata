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
        $studentdata = Category::paginate(1);
        return view('studentdata.index', compact('studentdata'));
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

        return redirect('/studentdata')->with('success', 'Student data Saved successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $studentdata = Category::findOrFail($id);
        return view('studentdata.show', compact('studentdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit($id) // Accepting the student ID
{
    // Retrieve the student record using the Category model
    $studentdata = Category::findOrFail($id); // Use Category model
    return view('studentdata.edit', compact('studentdata')); // Pass the student data to the view
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, $id)
{
    $category = Category::findOrFail($id); // Find by ID if not bound automatically

    $request->validate([
        'student_name' => 'required|string|max:255',
        'date_of_birth' => 'required|date',
        'gender' => 'required|in:male,female,other',
        'course' => 'required|string|max:255',
        'enrollment_date' => 'required|date',
    ]);

    // Update only the editable fields
    $category->update([
        'student_name' => $request->input('student_name'),
        'date_of_birth' => $request->input('date_of_birth'),
        'gender' => $request->input('gender'),
        'course' => $request->input('course'),
        'enrollment_date' => $request->input('enrollment_date'),
    ]);

    return redirect('/studentdata')->with('success', 'Student data updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $studentdata = Category::findOrFail($id);
        $studentdata->delete();
        return redirect()->route('studentdata.index')->with('success', 'Student record deleted successfully.');
    }
}
