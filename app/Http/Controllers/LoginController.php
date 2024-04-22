<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; /*Clase para manejar autenticacion*/

class LoginController extends Controller
{
    //

    public function show(){
        /*Valida si el usuario tiene abierta la sesion*/ 
        if(Auth::check()){
            return redirect('/index');
        }
        return view('usuario.inicioSesion');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){

            return redirect()->to('/inicioSesion')->withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
        Auth::login($user);

        if (auth()->user()->role == 'admin'){
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('users.index');
        }

        return $this->authenticated($request, $user);
    
      

    }

    public function authenticated(Request $request, $user){
        return redirect('/index');
    }

    public function store(){
       
    }
}
