<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Production;
use App\Usr;
use App\Line;
use App\Dataset;
use App\Project;
use App\Http\Requests\CreateProductValidator;

class ProductionController extends Controller
{
    // Create form for Production
    public function create() {
        $lines = Line::orderBy('name')->get();
        $users = Usr::orderBy('first_name', 'asc')->get();
        $datasets = Dataset::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('title', 'asc')->get();
        return view('productions.createProduction', ['lines' => $lines, 'users' => $users, 'datasets' => $datasets, 'projects' => $projects]);
    }

    // Create form for Production
    public function show() {
        return 'holi';
    }

    // Edit production
    public function edit($pk_production) {
        $production = Production::find($pk_production);
        $lines = Line::orderBy('name')->get();
        $users = Usr::orderBy('first_name', 'asc')->get();
        $datasets = Dataset::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('title', 'asc')->get();
        return view('productions.editProduction', ['production' => $production, 'users' => $users, 'lines' => $lines, 'datasets' => $datasets, 'projects' => $projects]);
    }

    // Save production
    public function store(CreateProductValidator $request) {
        $production = (new Production)->fill($request->all());
        if($request->external == 'true') {
            $production->external = true;
        }
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$production->pk_production;
            $production->photo = UtilsController::subirArchivo($request, $name, 'photo', 'productions');
        }
        if($request->hasFile('pdf')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$production->pk_production;
            $production->pdf = UtilsController::subirArchivo($request, $name, 'pdf', 'productions');
        }
        if ($production->save()) {
            foreach($request->usrs as $usr){
                $production->users()->attach([$usr]);
            }
            foreach($request->sublines as $subline){
                $production->sublines()->attach([$subline]);
            }
            if(!empty($request->datasets)) {
                foreach($request->datasets as $dataset){
                    $production->datasets()->attach([$dataset]);
                }
            }
            $mensaje = 'Production created';
            return redirect(route('productions.show', $production->pk_production))->with('true', $mensaje);
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
        
    }

    // Update production
    public function update(Request $request, $pk_production) {
        $production = Production::find($pk_production)->fill($request->all());
        if($request->external == 'true') {
            $production->external = true;
        }
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$production->pk_production;
            $production->photo = UtilsController::subirArchivo($request, $name, 'photo', 'productions');
        }
        if($request->hasFile('pdf')) {
            $name = strtolower(str_replace(' ', '_', $request->title)).'_'.$production->pk_production;
            $production->pdf = UtilsController::subirArchivo($request, $name, 'pdf', 'productions');
        }
        if ($production->save()) {
            // Users
            foreach ($production->users()->get() as $reg) {
                $production->users()->detach([$reg->pk_usr]);
            }
            foreach($request->usrs as $usr){
                $production->users()->attach([$usr]);
            }

            // Sublines
            foreach ($production->sublines()->get() as $reg) {
                $production->sublines()->detach([$reg->pk_subline]);
            }
            foreach($request->sublines as $subline){
                $production->sublines()->attach([$subline]);
            }

            // datasets
            if(!empty($request->datasets)) {
                foreach ($production->datasets()->get() as $reg) {
                    $production->datasets()->detach([$reg->pk_dataset]);
                }
                foreach($request->datasets as $datasets){
                    $production->datasets()->attach([$datasets]);
                }
            }
            $mensaje = 'Production updated';
            return redirect(route('productions.show', $production->pk_production))->with('true', $mensaje);
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }
}
