<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GruposController extends Controller
{

//esta funcion me sirve para poder crear un nuevo grupo desde un modal
    public function crear()
{
    return view('crearGrupos');
}


public function getGrupos()
{
    try {
        $page = request()->query('page', 1);
        $search = request()->query('search', '');

       $baseUrl = config('services.api_qa.url');

        $response = Http::timeout(5)->get($baseUrl . '/grupos', [
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


}
