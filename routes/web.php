<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StatuController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\UploadController; // Asegúrate de importar el UploadController
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {
    return redirect('/inicioSesion');
});

Route::resource('/formularios', FormularioController::class);
Route::resource('/status', StatuController::class);

Route::get('/formularios', [FormularioController::class, 'index'])->name('formularios.index');
Route::post('/formularios/progreso', [FormularioController::class, 'update'])->name('formularios.update');

Route::get('/inicioUsuario', [UserController::class, 'index'])->name('usuario.index');
Route::get('/inicioUsuario', function () {
    return view('/usuario.index');
});

Route::get('/status/{id}/create', [StatuController::class, 'create']);
Route::get('/usuario/create', [UserController::class, 'create']);
Route::post('/usuario', [UserController::class, 'store'])->name('usuario.store');
Route::get('/usuario/{id}/edit', [UserController::class, 'edit'])->name('usuario.edit');
Route::put('/usuario/{id}', [UserController::class, 'update'])->name('usuario.update');

Route::get('/usuario/{id}', function ($id) {
    return view('formularios.index', ['usuario' => User::find($id)]);
});

Route::get('usuario/{id}/descargar', function ($id) {
    return view('formularios.indexxx', ['usuario' => User::find($id)]);
});

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

// Vista de creación de usuario para admin
Route::get('usuario/create', function () {
    return view('/admin.create');
});

// Ruta para mostrar el listado de instituciones
Route::get('/altaInstituciones', function (Request $request) {
    $username = trim($request->get('username'));
    $usuarios = DB::table('users')
        ->select('id', 'username', 'role')
        ->where('username', 'LIKE', '%' . $username . '%')
        ->orderBy('username', 'asc')
        ->get();
    $usuario = auth()->user();
    return view('/admin.instituciones', ['usuario' => $usuario], compact('username', 'usuarios'));
});

// Registro e inicio de sesión de usuarios
Route::get('/registro', [RegisterController::class, 'show']);
Route::post('/registro', [RegisterController::class, 'register']);
Route::get('/inicioSesion', [LoginController::class, 'show']);
Route::post('/inicioSesion', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);

// Ruta para generar Excel
Route::get('/generar-excel', [ExcelController::class, 'generarExcel']);

// Ruta para subir archivos
Route::post('/upload', [UploadController::class, 'upload'])->name('upload');

// Recursos de usuarios
Route::resource('/users', UserController::class)->name('users.index', '/users');

// Rutas para mostrar y asignar archivos
Route::get('/altaInstituciones/{id}/archivos', [FormularioController::class, 'asignarArchivosVista'])->name('mostrar.archivos.asignados');
Route::post('formularios/asignar/{id}', [FormularioController::class, 'asignarArchivos'])->name('asignar.archivos');
Route::get('formularios/mostrar-archivos', [FormularioController::class, 'mostrarArchivos'])->name('formularios.mostrar-archivos')->middleware('auth');

// Ruta para eliminar los archivos asignados
Route::post('formularios/eliminar-archivo', [FormularioController::class, 'eliminarArchivo'])->name('formularios.eliminar-archivo'); 

// Ruta para descargar archivos de usuario
Route::get('/usuario/{id}/descargar', [FormularioController::class, 'mostrarArchivos'])->name('formularios.mostrar-archivos');
Route::get('/usuario/{id}', [FormularioController::class, 'mostrarSubirArchivos'])->name('formularios.mostrar-archivos')->middleware('auth');

 // Ruta para la vista de dependencias (index)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Ruta para la vista de instituciones
Route::get('/admin/instituciones', [AdminController::class, 'instituciones'])->name('admin.instituciones');