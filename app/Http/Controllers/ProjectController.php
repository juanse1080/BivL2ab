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

            for ($i=0; $i < sizeof($request->user); $i++) { 
                $pk_user = $request->user[$i];
                $project->users()->attach([$pk_user]);
            }
        }
        $mensaje = 'Project created';
        return redirect(route('projects.index', $pk_usr))->with('true', $mensaje);
    }
}
