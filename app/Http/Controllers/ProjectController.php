<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{   

    public function add() {
        $model = new Project();
       

        $model->titel = 'mijn data';
        $model->description = 'mijn data is de beste data in de wereld nicki minja';
      
        $model->save();

    
    }

    public function index(){
        $project = Project::all();
        return view('projects', ['project' => $project]);
    }
}

