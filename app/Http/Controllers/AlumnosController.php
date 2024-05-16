<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    public $carreras;

    public function AgregarAlumno(Request $request)
    {
        $num_control = $request->input('noc');
        $nombre = $request->input('nombre');
        $ap_pat = $request->input('apa');
        $ap_mat = $request->input('ama');
        $sex = $request->input('sexo');
        $nac = $request->input('fec');
        $sem = $request->input('sem');
        $nivel = $request->input('tipo');
        $foto = $request->input('foto');
        $tel = $request->input('phone');
        $correo = $request->input('email');
        $carrera = $request->input('carrera');

        $result=DB::select('CALL sp_addalumno(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        [$num_control, $nombre, $ap_pat, $ap_mat, $sex, $nac, $sem, $nivel, $foto, $tel, $correo, $carrera]);
    }

    public function VerCarreras(Request $request)
    {
        $results = DB::select('CALL sp_showcarreras()');

        $this->carreras = [];

        foreach ($results as $result) {
            $this->carreras[$result->id] = $result->nombre_carrera;
        }
    }
}
