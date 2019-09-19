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
use App\Http\Requests\UpdateProductValidator;

class ProductionController extends Controller
{
    public function __construct() {
        $this->middleware('admin:0,1,2')->only(['edit', 'update']);
        $this->middleware('admin:0')->except(['show', 'index']);
    }

    public function downloadPDF($pk_production) {
        $production = Production::find($pk_production);
        return response()->file($production->pdf);
    }

    public function index() {
        $productions = Production::orderBy('abstract', 'asc')->get();
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
        return view('productions.listProductions', ['productions' => $productions, 'pill' => $pill]);
    }

    // Create form for Production
    public function create() {
        $lines = Line::orderBy('name')->get();
        $users = Usr::orderBy('first_name', 'asc')->get();
        $datasets = Dataset::orderBy('name', 'asc')->get();
        $projects = Project::orderBy('title', 'asc')->get();
        return view('productions.createProduction', ['lines' => $lines, 'users' => $users, 'datasets' => $datasets, 'projects' => $projects]);
    }

    // Create form for Production
    public function show($pk_production) {
        $production = Production::find($pk_production);

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
        return view('productions.viewProduction', ['production' => $production, 'pill' => $pill]);
    }

    // Edit production
    public function edit($pk_production) {
        $production = Production::find($pk_production);
        if(!$production->users->contains(session('usr')['pk_usr']) && session('usr')['role'] != 0){
            return back();
        } 
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
    public function update(UpdateProductValidator $request, $pk_production) {
        $production = Production::find($pk_production);
        if(!$production->users->contains(session('usr')['pk_usr']) && session('usr')['role'] != 0){
            return back();
        }
        
        $production->fill($request->all());
        if($request->external == 'true') {
            $production->external = true;
        } else {
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

    public function destroy(Request $request, $pk_production) {
        $production = Production::find($pk_production);
        $mensaje = 'The production' . $production->name . ' has been succesfully deleted';
        $production->delete();
        return redirect('/productions')->with('true', $mensaje);
    }
}
