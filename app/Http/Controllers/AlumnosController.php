<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AlumnosController extends Controller
{
    public function index()
    {
        return view('alumnos'); //aqui va la vista
    }

  public function getAlumnos()
{
    $page = request()->query('page', 1);
    $search = request()->query('search', '');

    $response = Http::get('http://192.168.0.100:5000/alumnos', [
        'page' => $page,
        'search' => $search
    ]);

    if (!$response->successful()) {
        return response()->json(['error' => 'Error al conectar con la API'], 500);
    }

    return response()->json($response->json());
}
}