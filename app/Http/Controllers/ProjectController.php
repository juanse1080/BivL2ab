<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Usr;
use App\SubLine;

class ProjectController extends Controller
{
    // Create form for Project
    public function create() {
        $sublines = SubLine::all();
        $users = Usr::all();
        return view('projects.createProject', ['sublines' => $sublines, 'users' => $users]);
    }

    // Save projects
    public function store(Request $request) {
        $project = new Project;
        $project->title = $request->title;
        $project->summary = $request->summary;
        $project->photo = $request->photo;
        $project->type = $request->type;
        if ($project->save()) {
            foreach ($request->user as $key => $pk_usr) {
                $project->users()->attach([$project->pk_project, $pk_usr]);
            }
        }
        dd($project->pk_project);
        
    }
}
