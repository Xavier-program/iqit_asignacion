<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth; /*Clase para manejar autenticacion*/


class RegisterController extends Controller
{
    //
     public function show(){
        if(Auth::check()){
            return redirect('/index');
        }
        return view('usuario.registro');
    }

    public function register( RegisterRequest $request ){
        $user = User::create($request->validated());
        return redirect('/inicioSesion')->with('success', 'Cuenta creada exitosamente'); correctamente;
    }
}
