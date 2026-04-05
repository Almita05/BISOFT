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
        //consumir API externa
       $response = Http::get('http://192.168.0.100:5000/alumnos');
        $data = $response->json();

        $alumnos = [];

        foreach ($data['results'] as $alumno) {
            $detail = Http::get($alumno['url'])->json();

            $alumnos[] = [
                'idAlumno' => $detail['idAlumno'],
                'nombre' => $detail['nombre'],
                'apPaterno' =>  $detail['apPaterno'],
                'apMaterno' =>  $detail['apMaterno'],
                'fechaNacimiento' => $detail['fechaNacimiento'],
                'idGeneracion' => $detail['idGeneracion'],
            ];
        }

        return response()->json($alumnos);
    }
}