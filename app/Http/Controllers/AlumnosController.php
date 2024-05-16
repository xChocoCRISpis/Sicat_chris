<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


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

    public function VerAlumnos(Request $request)
    {
        
        $nom = $request->input("nombre");
        $sem = $request->input("sem");
        $sex = $request->input("sexo");
        $carr = $request->input("carrera");

       
        $alumnos=DB::select('CALL sp_ShowAlumnos("todos",?,?,?,0,?)', [$nom, $sex, $sem, $carr]);
        if($nom==null)
        $nom="Ninguno";
        if($sem==null || $sem==0)
            $sem="Todos";
        if($sex==null || $sex=="X")
            $sex="Ambos";
        if($carr==null || $carr==0)
            $carr="Todas";
        $filtros = ["Nombre"=>$nom,"Semestre"=>$sem,"Sexo"=>$sex,"Carrera"=>$carr];

        
        //dd($alumnos);
        return view('alumnos', compact('alumnos','filtros'));
    }
}
