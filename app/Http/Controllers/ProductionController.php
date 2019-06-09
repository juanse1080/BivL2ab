<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Production;
use App\Usr;
use App\SubLine;
use App\Dataset;

class ProductionController extends Controller
{
    // Create form for Product
    public function create() {
        $sublines = SubLine::all();
        $users = Usr::all();
        $datasets = Dataset::all();
        return view('products.createProduct', ['sublines' => $sublines, 'users' => $users, 'datasets' => $datasets]);
    }
}
