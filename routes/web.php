<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExcelController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/inicioSesion');
});

// Route::resource('/', FormularioController::class);

Route::get('/formularios', [FormularioController::class, 'index'])
->name('formularios.index');

Route::post('/formularios/progreso', [FormularioController::class, 'update'])
->name('formularios.update');

Route::get('/inicioUsuario', [UserController::class, 'index'])
->name('usuario.index');

Route::get('/inicioUsuario', function () {
    return view('/usuario.index');
});

Route::get('/usuario/create', [UserController::class, 'create']);
Route::post('/usuario', [UserController::class, 'store'])->name('usuario.store');

/************************************************/
Route::get('/usuario/{id}/edit', [UserController::class, 'edit'])->name('usuario.edit');
Route::put('/usuario/{id}', [UserController::class, 'update'])->name('usuario.update');

Route::get('/usuario/{id}', function ($id) {
    return view('formularios.index', ['usuario'=> User::Find($id)]);
});



Route::get('usuario/{id}/descargar', function ($id) {
    $usuario = auth()->user();
    return view('formularios.indexxx', ['usuario' => User::Find($id)]);
});

Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin') /*verifica si iniciamos sesion como admin*/
->name('admin.index');




// Habilitar la vista de inicio de sesión en el formulario de registro.
Route::get('usuario/create', function () {
    return view('/admin.create');
});

/* RUTA PARA MOSTRAR EL LISTADO DE INSTITUVIONES (cRUD) */
Route::get('/altaInstituciones', function () {
    return view('/admin.instituciones', ['usuarios' => User::all()]);
});

// Route::get('/inicioUsuario', function () {
//     return view('/usuario.index');
// });



/* Vistas de registro e incio de sesion de usuarios */

Route::get('/registro', [RegisterController::class, 'show']);

Route::post('/registro', [RegisterController::class, 'register']);

Route::get('/inicioSesion', [LoginController::class, 'show']);

Route::post('/inicioSesion', [LoginController::class, 'login']);

Route::get('/index', [FormularioController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);


// // // Habilitar la vista de inicio de sesión en el formulario de registro.
// Route::get('/formularios/inicioSesion', function () {
//     return view('/formularios.inicioSesion');
// });
Route::get('/generar-excel', [ExcelController::class, 'generarExcel']);
Route::post('/upload', 'UploadController@upload')->name('upload');



Route::resource('/users', UserController::class)->name('users.index', '/users');




Route::get('/formularios/{id}', 'FormularioController@index');


Route::get('/altaInstituciones/{id}/archivos', function ($id) {
    return view('/admin.archivos', ['usuario'=> User::Find($id)]);
});
