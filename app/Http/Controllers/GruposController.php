<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GruposController extends Controller
{

//esta funcion me sirve para poder crear un nuebo grupo desde un modal
    public function crear()
{
    return view('crearGrupos');
}
}
