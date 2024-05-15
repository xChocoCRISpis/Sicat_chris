<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    public $carreras;

    public function AgregarAlumno (Request $request)
    {
        //Parametros
        $num_control=$request->input('sad');
        $nombre=$request->input('sad');
        $ap_pat=$request->input('sad');
        $ap_mat=$request->input('sad');
        $sex=$request->input('sad');
        $nac=$request->input('sad');
        $sem=$request->input('sad');
        $nivel=$request->input('sad');
        $foto=$request->input('sad');
        $tel=$request->input('sad');
        $correo=$request->input('sad');

        //LLamada a procedures
        $result = DB::select('CALL sp_addalumno(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        [$num_control,$nombre,$ap_pat,$ap_mat,$sex,$nac,$sem,$nivel,$foto,$tel,$correo]);
    }

    public function VerCarreras(Request $request)
    {
        $results = DB::select('CALL sp_showcarreras()');

        $this->carreras = [];

        // Iterar sobre los resultados y agregarlos al arreglo de carreras
        foreach ($results as $result) {
            $this->carreras[$result->id] = $result->nombre_carrera;
        }
    }
}
