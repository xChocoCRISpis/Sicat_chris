<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Obtener datos del formulario
        $user = $request->input('User');
        $password = $request->input('pass');

        // Hacer una solicitud HTTP a la API de login
        $response = Http::post('http://localhost:3000/usuario/login', [
            'usuario' => $user,
            'contrasena' => $password,
        ]);

        // Verificar el estado de la respuesta
        if ($response->successful()) {
            $data = $response->json();

            // Verificar los resultados y redirigir según sea necesario
            if (isset($data['idUsuario']) && $data['idUsuario'] !== -1) {
                // Usuario autenticado, almacenar en sesión y redirigir
                session(['id' => $data['idUsuario']]);
                return redirect()->route('inicio');
            } else {
                // Error de autenticación, redirigir a la página de inicio de sesión con un mensaje de error
                return redirect()->back()->with('error', 'El usuario o la contraseña son incorrectos');
            }
        } else {
            // Error en la solicitud HTTP, redirigir con un mensaje de error
            return redirect()->back()->with('error', 'Error al comunicarse con el servicio de autenticación');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // Redirige a la página de inicio después de cerrar sesión
        return redirect('/'); 
    }
}
