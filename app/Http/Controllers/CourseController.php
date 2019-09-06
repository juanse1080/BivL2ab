<?php

namespace App\Http\Controllers;

use App\Course;

use Illuminate\Http\Request;
use App\Http\Requests\CourseValidator;

class CourseController extends Controller
{

    public function __construct() {
        $this->middleware('admin:0')->except(['index']);
    }
    
    public function index() {
        $courses = Course::orderBy('name', 'ASC')->get();
        return view('courses.listCourses', compact('courses'));
    }

    // Create form for course
    public function create() {
        return view('courses.createCourse');
    }

    // Save course
    public function store(CourseValidator $request) {
        $course = (new Course)->fill($request->all());
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->name));
            $course->photo = UtilsController::subirArchivo($request, $name, 'photo', 'courses');
        }
        // dd($course);
        if ($course->save()) {
            return redirect('/courses')->with('true', 'The course' . $course->name . ' has been succesfully created');
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }

    // delete course
    public function destroy(Request $request, $pk_course) {
        $curso = Course::findOrFail($pk_course);
        $name = $curso->name;
        $curso->delete();
        return redirect('/courses')->with('true', 'The course ' . $name . ' has been succesfully deleted');
    }

    public function edit($pk_course) {
        $course = Course::findOrFail($pk_course);
        return view("courses.editCourse", compact('course'));
    }

    public function update(CourseValidator $request, $pk_course) {
        $validated = $request->all();
        $course = Course::find($pk_course)->fill($validated);
        if($request->hasFile('photo')) {
            $name = strtolower(str_replace(' ', '_', $request->name));
            $course->photo = UtilsController::subirArchivo($request, $name, 'photo', 'courses');
        }
        if ($course->save()) {
            return redirect('/courses')->with('true', 'The course' . $course->name . ' has been succesfully updated');
        } else {
            return back()->with('validated', 'Something went wrong. Try again.');
        }
    }
}
