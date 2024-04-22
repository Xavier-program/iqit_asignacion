<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; /*Clase para manejar autenticacion*/

use Illuminate\Support\Facades\Session;


class LogoutController extends Controller
{
    //Para cerrar sesión, se debe eliminar la cookie de sesión y redirigir al usuario a la página de inicio de sesión.
    public function logout(){
        Session::flush();

        Auth::logout();

        return redirect()->to('/inicioSesion');
    }
}
