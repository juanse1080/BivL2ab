<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilsController extends Controller
{
    public static function subirArchivo(Request $request, String $nombre, String $input, String $directorio){
      $nombre .= '.'.$request->file($input)->clientExtension();
      $file = $request->file($input)->storeAs('public/'.$directorio, $nombre);
      return "/storage/".$directorio."/".$nombre;
    }
}
