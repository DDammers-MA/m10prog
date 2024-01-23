<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class MijnControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(2);
return view('dashboard.projects.index', ['projects'=>$projects]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        $valid = $request->validate([
            'titel' => 'required|unique:projects,titel|max:255',
            'description' => 'required',
        ]);
  
        $project = new Project([
            'titel' => $valid['titel'],
            'description' => $valid['description'],
        ]);

        $project->save();

        return redirect( route('project.show', $project->id ) );
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', ['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $valid = $request->validate([
            'titel'       => 'required|unique:projects|max:255',
            'description' => 'required',
        ]);
    
        $project->update($valid);
    
        return redirect(route('project.show', $project->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('projects.index'))->with('alert', 'Het item '.$project->title.' is nu weg.');
    }
}
