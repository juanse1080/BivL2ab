<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Production;
use App\Usr;
use App\Line;
use App\Dataset;
use App\Http\Requests\CreateProductValidator;

class ProductionController extends Controller
{
    // Create form for Production
    public function create() {
        $lines = Line::orderBy('name')->get();
        $users = Usr::orderBy('first_name', 'asc')->get();
        $datasets = Dataset::orderBy('name', 'asc')->get();
        return view('productions.createProduction', ['lines' => $lines, 'users' => $users, 'datasets' => $datasets]);
    }

    // Save production
    public function store(CreateProductValidator $request) {
        
        dd($request->all());
        $production = (new Production)->fill($request->all());
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
}
