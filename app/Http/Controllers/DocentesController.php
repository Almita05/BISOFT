<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function index()
    {
        return view('livewire.docentes');
    }

public function getDocentes()
{
    try {
        $page = request()->query('page', 1);
        $search = request()->query('search', '');

        $response = Http::timeout(5)->get('http://192.168.0.100:5000/docentes', [
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
    return view('crearDocentes');
}
}