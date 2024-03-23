<?php
namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
    
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index')->with('amit', $projects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       return view('projects.vieww');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
       return view('projects.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
