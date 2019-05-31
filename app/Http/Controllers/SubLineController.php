<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubLineController extends Controller
{
    public function index() {
        $sublines = SubLine::orderBy('name', 'ASC')->get();
        return view('lines.listLines', compact('lines'));
    }
}
