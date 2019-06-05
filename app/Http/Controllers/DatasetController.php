<?php

namespace App\Http\Controllers;

use App\Dataset;

use Illuminate\Http\Request;
use App\Http\Requests\DatasetValidator;
use App\Http\Requests\DatasetUpdateValidator;

class DatasetController extends Controller
{
    public function __construct() {
        $this->middleware('admin:0')->except(['index']);
    }

    public function index() {
        $datasets = Dataset::orderBy('name', 'ASC')->get();
        return view('datasets.listDatasets', compact('datasets'));
    }

    // Create form for course
    public function create() {
        return view('datasets.createDataset');
    }

    // Save course
    public function store(DatasetValidator $request) {
        $validated = $request->all();
        $dataset = (new Dataset)->fill($validated);
        if ($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->name));
            $dataset->photo = UtilsController::subirArchivo($request, $name, 'photo', 'dataset');
        }
        if ($dataset->save()) {
            return redirect('/datasets')->with('true', 'The dataset' . $dataset->name . ' has been succesfully created');
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }

    // delete dataset
    public function destroy(Request $request, $pk_dataset) {
        $dataset = Dataset::findOrFail($pk_dataset);
        $message = 'The dataset' . $dataset->name . ' has been succesfully deleted';
        $dataset->delete();
        return redirect('/datasets')->with('true', $message);
    }

    // edit dataset
    public function edit($pk_dataset) {
        $dataset = Dataset::findOrFail($pk_dataset);
        return view("datasets.editDataset", compact('dataset'));
    }

    // update dataset
    public function update(DatasetUpdateValidator $request, $pk_dataset) {
        $validated = $request->all();
        $dataset = Dataset::findOrFail($pk_dataset)->fill($validated);

        if ($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->name));
            $dataset->photo = UtilsController::subirArchivo($request, $name, 'photo', 'datasets');
        }
        if ($dataset->save()) {
            $mensaje = $dataset->name.' has been succesfully updated';
            return redirect(route('datasets.index', $dataset->pk_dataset))->with('true', $mensaje);
        } else {
            return back()->withInput()->with('false', 'Algo no salio bien, intente nuevamente');
        }
        return redirect()->route('datasets.index')->with('success','The dataset has been succesfully updated');
    }
}
