<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
        return redirect()->route("VerAlumnos");
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


    // Obtener un alumno específico
    public function GetAlumno($id_alumno)
    {
        $response = Http::get('http://localhost:3000/notes/' . $id_alumno);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json(['message' => 'Error obteniendo alumno'], $response->status());
        }
    }

    // Actualizar un alumno específico
    public function ActualizarAlumno(Request $request, $id_alumno)
    {
        $response = Http::patch('http://localhost:3000/notes/' . $id_alumno, $request->all());

        if ($response->successful()) {
            return response()->json(['message' => 'Alumno actualizado exitosamente', 'alumno' => $response->json()]);
        } else {
            return response()->json(['message' => 'Error actualizando alumno'], $response->status());
        }
    }

    // Eliminar un alumno específico
     // Eliminar un alumno específico llamando a la API
    public function EliminarAlumno($id_alumno)
    {
        $response = Http::delete('http://localhost:3000/notes/' . $id_alumno);

        if ($response->successful()) {
            return response()->json(['message' => 'Alumno eliminado exitosamente']);
        } else {
            return response()->json(['message' => 'Error eliminando alumno', 'details' => $response->json()], $response->status());
        }
    }
}
