<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Line;

class LineController extends Controller
{
    public function index() {
        $lines = Line::orderBy('name', 'ASC')->get();
        return view('lines.listLines', compact('lines'));
    }
}
