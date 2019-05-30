<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usr;

class UsrController extends Controller
{
    public function __construct() {
        $this->middleware('admin:0')->except(['index']);
    }
    public function index() {
        $courses = Usr::orderBy('name', 'ASC')->get();
        return view('courses.listCourses', compact('courses'));
    }

    // Create form for course
    public function create() {
        return view('courses.createCourse');
    }

    // Save course
    public function store(CourseValidator $request) {
        $validated = $request->all();
        $course = (new Usr)->fill($validated);
        if ($course->save()) {
            return redirect('/courses')->with('true', 'The course' . $course->name . ' has been succesfully created');
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }

    public function show($pk_usr){
        $usr = Usr::find($pk_usr);
        if(!empty($usr)){
            return view("usrs.profile", ['empleado' => $usr]);
        } else {
            $mensaje = 'No user found.';
            return back()->with('false', $mensaje);
        }
        
    }

    // delete course
    public function destroy(Request $request, $pk_course) {
        $curso = Usr::findOrFail($pk_course)->delete();
        return redirect('/courses')->with('true', 'The course' . $course->name . ' has been succesfully deleted');
    }

    public function edit($pk_course) {
        $course = Usr::findOrFail($pk_course);
        return view("courses.editCourse", compact('course'));
    }

    public function update(CourseValidator $request, $pk_course) {
        $validated = $request->all();
        Usr::findOrFail($pk_course)->update($validated);
        return redirect()->route('courses.index')->with('success','The course has been succesfully updated');
    }
}
