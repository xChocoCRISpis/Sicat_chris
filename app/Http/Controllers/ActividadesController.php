<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laravel\Prompts\Output\ConsoleOutput;

class ActividadesController extends Controller
{
    public function getActDep (Request $request)
    {
        $response = Http::get('http://localhost:3000/actividades/getActDep');

         // Verificar el estado de la respuesta
        if ($response->successful()) {
            $data = $response->json();
            $actividades = $data['actividades'];
            return view('actividades_dep', ['actividades' => $actividades]);
        }

         // Manejar el caso de error
        return view('actividades_dep', ['actividades' => []]);
    }

    public function getActCul (Request $request)
    {
        $response = Http::get('http://localhost:3000/actividades/getActCul');

         // Verificar el estado de la respuesta
        if ($response->successful()) {
            $data = $response->json();
            $actividades = $data['actividades'];
            return view('actividades_cul', ['actividades' => $actividades]);
        }

         // Manejar el caso de error
        return view('actividades_cul', ['actividades' => []]);
    }
}