<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\Course;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $enrollments = Enrollment::all();
        return view("enrollments.index")->with("enrollments", $enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        // return view("enrollments.create");

        //linking to couses to diplay on the page
        $courses = Course::pluck("name" , "id");
        return view("enrollments.create", compact("courses"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with("flash_message","Enrollment Added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $enrollments = Enrollment::find($id);
        return view("enrollments.show")->with("enrollments", $enrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $Enrollment = Enrollment::find($id);
        return view("enrollments.edit")->with("enrollments", $Enrollment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $Enrollment = Enrollment::find($id);
        $input = $request->all();
        $Enrollment->update($input);
        return redirect("enrollments")->with("flash_message", "Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        $enrollments = Enrollment::find($id);   
        $enrollments->delete($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!'); 
    }
}