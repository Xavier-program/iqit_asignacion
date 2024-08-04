<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $totalFormulariosAsignados = 0;
        $totalFormulariosSubidos = 0;

        foreach ($usuarios as $usuario) {
            if ($usuario->role != 'admin') {
                // Obtener la cantidad de formularios asignados al usuario
                $formulariosAsignados = DB::table('archivos_asignados_v2')
                    ->where('user_id', $usuario->id)
                    ->count();

                // Obtener la cantidad de formularios subidos por el usuario
                $formulariosSubidos = DB::table('archivos_completados')
                    ->where('user_id', $usuario->id)
                    ->count();

                $totalFormulariosAsignados += $formulariosAsignados;
                $totalFormulariosSubidos += $formulariosSubidos;
            }
        }

        $progresoTotal = $totalFormulariosAsignados > 0 ? ($totalFormulariosSubidos / $totalFormulariosAsignados) * 100 : 0;
        $progresoTotal = number_format($progresoTotal, 2, '.', '');

        return view('admin.index', compact('usuarios', 'progresoTotal'));
    }
}
