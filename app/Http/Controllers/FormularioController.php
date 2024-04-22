<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\User;
use App\Models\Archivo;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
       // Cargar los datos de los terminos en objeto $terminos
       //$terminos = Formulario::all();
       // Habilitar la vista
       // Obtener el usuario autenticado, si hay alguno
       // Obtener todos los usuarios de la BD
       $usuarios = User::all();
       $archivos = Archivo::all();
       // Obtener el usuario autenticado, si hay alguno
       $usuario = auth()->user();
       return view('formularios.index', ['usuarios' => $usuarios, 'usuario' => $usuario, 'archivos' => $archivos]); // En ruta alumnos, busca la vista
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulario $formulario)
{
    // Validar y procesar la solicitud de actualización
    $usuario_id = $request->usuario_id;

    // Buscar el archivo asociado al usuario
    $archivo = Archivo::where('id_usuario', $usuario_id)->first();

    // Actualizar las rutas del archivo
    $archivo->rutaF1 = $request->rutaF1;
    // Repite este proceso para todas las rutas de archivos que necesites actualizar

    // Guardar los cambios
    $archivo->save();

    // Redirigir a la página de inicio o a donde desees
    return redirect()->route('inicio');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
