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
    try {
        $page = request()->query('page', 1);
        $search = request()->query('search', '');

       $baseUrl = config('services.api_qa.url');

        $response = Http::timeout(5)->get($baseUrl . '/alumnos', [
            'page' => $page,
            'search' => $search
        ]);

        if (!$response->successful()) {
            return response()->json([
                'error' => 'Error en API externa',
                'status' => $response->status(),
                'body' => $response->body()
            ], 500);
        }

        return response()->json($response->json());

    } catch (\Throwable $e) {
        return response()->json([
            'error' => 'Error interno',
            'message' => $e->getMessage()
        ], 500);
    }
}


public function crear()
{
    return view('crearAlumnos');
}

public function getGeneraciones()
    {
        $response = Http::get('http://192.168.0.100/generaciones');
     if (!$response->successful()) {
        return response()->json(['error' => 'Error al conectar con la API'], 500);
    }
    }

    public function getGrupos($id)
    {
        $response = Http::get("http://192.168.0.100/grupos/$id");
       if (!$response->successful()) {
        return response()->json(['error' => 'Error al conectar con la API'], 500);
    }
    }

    
}