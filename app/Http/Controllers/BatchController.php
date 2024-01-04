<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $batches = Batch::all();
        return view("batches.index")->with("batches", $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        // return view("batches.create");

        //linking to couses to display the id on the page
        $courses = Course::pluck('name','id');
        return view("batches.create", compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with("flash_message","Batch Added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $batches = Batch::find($id);
        return view("batches.show")->with("batches", $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $Batch = Batch::find($id);
        return view("batches.edit")->with("batches", $Batch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $Batch = Batch::find($id);
        $input = $request->all();
        $Batch->update($input);
        return redirect("batches")->with("flash_message", "Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        $batches = Batch::find($id);   
        $batches->delete($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!'); 
    }
}