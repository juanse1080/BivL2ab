<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Project;
use App\Usr;
use App\Line;
use App\Http\Requests\StoreProject;
use App\Http\Requests\UpdateProject;

class ProjectController extends Controller
{

    public function __construct() {
        $this->middleware('admin:0,1,2')->only(['edit', 'update']);
        $this->middleware('admin:0')->except(['show', 'index']);
    }

    public function index() {
        $projects = Project::orderBy('created_at', 'desc')->paginate(6);
        $pill = [
            'badge-primary',
            'badge-secondary',
            'badge-success',
            'badge-danger',
            'badge-warning',
            'badge-info',
            'badge-light',
            'badge-dark',
        ];
        return view('projects.listProjects', ['projects' => $projects, 'pill' => $pill]);
    }

    // Create form for Project
    public function create() {
        $lines = Line::orderBy('name')->get();
        $users = Usr::orderBy('first_name', 'asc')->get();
        return view('projects.createProject', ['lines' => $lines, 'users' => $users]);
    }

    // Save projects
    public function store(StoreProject $request) {
        $project = (new Project)->fill($request->all());
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$project->pk_project;
            $project->photo = UtilsController::subirArchivo($request, $name, 'photo', 'projects');
        }
        if ($project->save()) {
            foreach($request->usrs as $usr){
                $project->users()->attach([$usr]);
            }
            foreach($request->sublines as $subline){
                $project->sublines()->attach([$subline]);
            }
        }
        $mensaje = 'Project created';
        return redirect(route('projects.show', $project->pk_project))->with('true', $mensaje);
    }

    // Show project
    public function show($pk_project) {
        $project = Project::find($pk_project);
        $pill = [
            'badge-primary',
            'badge-secondary',
            'badge-success',
            'badge-danger',
            'badge-warning',
            'badge-info',
            'badge-light',
            'badge-dark',
        ];
        return view('projects.viewProject', ['project' => $project, 'pill' => $pill]);
    }

    // Show project
    public function edit($pk_project) {
        
        $project = Project::find($pk_project);
        $users = Usr::orderBy('first_name', 'asc')->get();
        $lines = Line::orderBy('name')->get();
        return view('projects.editProject', ['project' => $project, 'users' => $users, 'lines' => $lines]);
    }

    public function update(UpdateProject $request, $pk_project) {
        $project = Project::find($pk_project);
        $project->fill($request->all());
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$project->pk_project;
            $project->photo = UtilsController::subirArchivo($request, $name, 'photo', 'projects');
        }
        if ($project->save()) {
            foreach ($project->users()->get() as $reg) {
                $project->users()->detach([$reg->pk_usr]);
            }
            foreach($request->usrs as $usr){
                $project->users()->attach([$usr]);
            }
            foreach ($project->sublines()->get() as $reg) {
                $project->sublines()->detach([$reg->pk_subline]);
            }
            foreach($request->sublines as $subline){
                $project->sublines()->attach([$subline]);
            }
        }
        $mensaje = 'The project has been succesfully updated';
        return redirect(route('projects.show', $project->pk_project))->with('true', $mensaje);
    }

    public function destroy(Request $request, $pk_project) {
        $project = Project::findOrFail($pk_project);
        $mensaje = 'The project' . $project->title . ' has been succesfully deleted';
        $project->delete();
        return redirect('/account')->with('true', $mensaje);
    }
}
