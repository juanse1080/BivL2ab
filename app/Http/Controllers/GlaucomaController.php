<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Glaucoma;

class GlaucomaController extends Controller
{
    public function index(){
        dd(Glaucoma::all());
    }
}
