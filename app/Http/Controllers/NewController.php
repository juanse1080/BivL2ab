<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Http\Requests\NewValidator;
use App\Http\Requests\NewUpdateValidator;


class NewController extends Controller
{
    public function __construct() {
        $this->middleware('admin:0,1')->except(['index', 'show']);
    }
    
    public function index() {
        $news = News::orderBy('created_at', 'DESC')->get();
        return view('news.listNews', compact('news'));
    }

    // Create form for new
    public function create() {
        return view('news.createNew');
    }

    // Save new
    public function store(Request $request) {
        dd($request->all());
        $validated = $request->all();
        $new = (new News)->fill($validated);

        if ($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title));
            $new->photo = UtilsController::subirArchivo($request, $name, 'photo', 'news');
        }
        if ($new->save()) {
            return redirect('/news')->with('true', $new->title . ' has been succesfully created');
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }

    // delete new
    public function destroy(Request $request, $pk_new) {
        $curso = News::findOrFail($pk_new)->delete();
        return redirect('/news')->with('true', 'The course' . $new->title . ' has been succesfully deleted');
    }

    public function edit($pk_new) {
        $new = News::findOrFail($pk_new);
        return view("news.editNew", compact('new'));
    }

    public function update(NewUpdateValidator $request, $pk_new) {
        $validated = $request->all();
        $new = News::findOrFail($pk_new)->fill($validated);
        if ($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->title)) . $new->pk_new;
            $new->photo = UtilsController::subirArchivo($request, $name, 'photo', 'news');
        }
        if ($new->save()) {
            $mensaje = $new->title.' has been succesfully updated';
            return redirect(route('news.show', $new->pk_new))->with('true', $mensaje);
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }

    // Show new
    public function show($pk_new)
    {
        $new = News::findOrFail($pk_new);
        if (!empty($new)) {
            return view("news.viewNew", compact('new'));
        } else {
            $mensaje = 'Could not find the dataset';
            return back()->withErrors('mensaje', $mensaje);
        }
    }
}
