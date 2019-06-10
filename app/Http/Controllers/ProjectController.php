<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Project;
use App\Usr;
use App\SubLine;
use App\Http\Requests\StoreProject;

class ProjectController extends Controller
{

    public function index() {
        $projects = Project::all();
        return view('projects.listProjects', compact('projects'));
    }

    // Create form for Project
    public function create() {
        $sublines = SubLine::orderBy('name')->get();
        $users = Usr::orderBy('first_name', 'asc')->get();
        return view('projects.createProject', ['sublines' => $sublines, 'users' => $users]);
    }

    // Save projects
    public function store(StoreProject $request) {
        $project = (new Project)->fill($request->all());
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$project->pk_project;
            $project->photo = UtilsController::subirArchivo($request, $name, 'photo', 'projects');
        }
        if ($project->save()) {
            for ($i=0; $i < sizeof($request->usrs); $i++) { 
                $pk_user = $request->usrs[$i];
                $project->users()->attach([$pk_user]);
            }
        }
        $mensaje = 'Project created';
        return redirect(route('projects.show', $project->pk_project))->with('true', $mensaje);
    }

    // Show project
    public function show($pk_project) {
        $project = Project::find($pk_project);
        $users = DB::table('project_usr')->where('pk_project', $pk_project)->select('first_name','last_name')->join('usrs', 'usrs.pk_usr', '=', 'project_usr.pk_usr')->orderBy('first_name','asc')->get();
        return view('projects.viewProject', ['project' => $project, 'users' => $users]);
    }

    // Show project
    public function edit($pk_project) {
        $project = Project::find($pk_project);
        $users = Usr::orderBy('first_name', 'asc')->get();
        $usersInProject = DB::table('project_usr')->where('pk_project', $pk_project)->join('usrs', 'usrs.pk_usr', '=', 'project_usr.pk_usr')->get();
        return view('projects.editProject', ['project' => $project, 'users' => $users, 'usersInProject' => $usersInProject]);
    }

    public function update(Request $request, $pk_project) {
        $project = Project::find($pk_project);
        $project->title = $request->title;
        $project->summary = $request->summary;
        $project->type = $request->type;
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$project->pk_project;
            $project->photo = UtilsController::subirArchivo($request, $name, 'photo', 'projects');
        }
        if ($project->save()) {
            // dd($project->users()->get());
            foreach ($project->users()->get() as $key => $reg) {
                $project->users()->detach([$reg->pk_usr]);
            }
            for ($i=0; $i < sizeof($request->user); $i++) { 
                $pk_user = $request->user[$i];
                $project->users()->attach([$pk_user]);
            }
        }
        $mensaje = 'Project updated';
        return redirect(route('projects.show', $project->pk_project))->with('true', $mensaje);
    }
}
