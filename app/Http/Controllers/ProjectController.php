<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Project;
use App\Usr;
use App\SubLine;

class ProjectController extends Controller
{

    public function index() {
        $projects = Project::all();
        return view('projects.listProjects', compact('projects'));
    }

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
        $project->type = $request->type;
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$project->pk_project;
            $project->photo = UtilsController::subirArchivo($request, $name, 'photo', 'projects');
        }
        if ($project->save()) {
            for ($i=0; $i < sizeof($request->user); $i++) { 
                $pk_user = $request->user[$i];
                $project->users()->attach([$pk_user]);
            }
        }
        $mensaje = 'Project created';
        return redirect(route('projects.show', $project->pk_project))->with('true', $mensaje);
    }

    // Show project
    public function show($pk_project) {
        $project = Project::findOrFail($pk_project);
        $users = DB::table('project_usr')->where('pk_project', $pk_project)->select('first_name','last_name')->join('usrs', 'usrs.pk_usr', '=', 'project_usr.pk_usr')->get();
        return view('projects.viewProject', ['project' => $project, 'users' => $users]);
    }
}
