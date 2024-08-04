<?php 
namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{

    // Controlador para la eliminación de los archivos asignados
    public function eliminarArchivo(Request $request)
    {
        $archivo = $request->input('archivo');
        $userId = auth()->user()->id;

        // Eliminar el archivo del almacenamiento
        if (file_exists(public_path($archivo))) {
            unlink(public_path($archivo));
        }

        // Eliminar la entrada de la base de datos
        DB::table('archivos_asignados_v2')
            ->where('user_id', $userId)
            ->where('archivo', $archivo)
            ->delete();

        return redirect()->route('formularios.mostrar-archivos')->with('success', 'Archivo eliminado correctamente');
    }

    // Controla la vista 'formularios.index' (formularios/index.blade.php)
    public function mostrarSubirArchivos()
{
    if (!auth()->check()) {
        return redirect()->route('inicioSesion'); // Redirige al inicio de sesión si el usuario no está autenticado
    }

    $usuario = auth()->user();
    $archivosAsignados = DB::table('archivos_asignados_v2')
        ->where('user_id', $usuario->id)
        ->pluck('archivo')
        ->toArray(); 
    
    return view('formularios.index', compact('archivosAsignados', 'usuario'));
}



    // Controla la vista 'formularios.indexxx' (formularios/indexxx.blade.php)
    public function mostrarArchivos($id)
    {
        if (!auth()->check()) {
            return redirect()->route('inicioSesion'); // Redirige al inicio de sesión si el usuario no está autenticado
        }
    
        $usuario = User::findOrFail($id); // Encuentra el usuario por su ID
        $formularios = DB::table('formularios')->get();
        
        // Obtener los archivos asignados al usuario
        $archivosAsignados = DB::table('archivos_asignados_v2')
            ->where('user_id', $usuario->id)
            ->pluck('archivo')
            ->toArray();
    
        // Devuelve la vista 'formularios.indexxx' con los datos de los archivos asignados y el usuario
        return view('formularios.indexxx', compact('archivosAsignados', 'usuario'));
    }
    


    // Controla la asignación de archivos a un usuario
    public function asignarArchivos(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $archivosSeleccionados = $request->input('archivos', []);

        // Elimina las asignaciones anteriores
        //DB::table('archivos_asignados_v2')->where('user_id', $usuario->id)->delete();

        // Inserta las nuevas asignaciones
        foreach ($archivosSeleccionados as $archivo) {
            DB::table('archivos_asignados_v2')->insert([
                'user_id' => $usuario->id,
                'archivo' => $archivo,
            ]);
        }

        return redirect()->route('formularios.index')->with('success', 'Archivos asignados correctamente');
    }

    // Controla la vista 'admin.archivos' (admin/archivos.blade.php)
    public function asignarArchivosVista($id)
    {
        $usuario = User::findOrFail($id);
        $formularios = DB::table('formularios')->get();
        
        // Obtener los archivos asignados al usuario
        $archivosAsignados = DB::table('archivos_asignados_v2')
            ->where('user_id', $usuario->id)
            ->pluck('archivo')
            ->toArray();
        
        return view('admin.archivos', compact('usuario', 'formularios', 'archivosAsignados'));
    }

    // Controla la vista 'formularios.subir' (formularios/subir.blade.php)
    public function index(Request $request)
    {
        $formulario = trim($request->get('formulario'));
        $formularios = DB::table('formularios')
            ->select('id', 'formulario')
            ->where('formulario', 'LIKE', '%' . $formulario . '%')
            ->orderBy('formulario', 'asc')
            ->get();
        $usuario = auth()->user();
        $formularioCount = $formularios->count(); // Contar los formularios

        return view('formularios.subir', ['usuario' => $usuario, 'formularios' => $formularios, 'formularioCount' => $formularioCount]);
    }

    // Controla la vista 'formularios.create' (formularios/create.blade.php)
    public function create()
    {
        $usuarios = User::all();
        $usuario = auth()->user();
        return view('formularios.create', ['usuarios' => $usuarios, 'usuario' => $usuario]);
    }

    // Controla la acción de almacenar un formulario
    public function store(Request $request)
    {
        $formularios = Formulario::all();
        $usuarios = User::all();
        $usuario = auth()->user();

        $formulario = new Formulario();

        $request->validate([
            'formulario' => 'required|file',
        ]);

        if ($request->hasFile('formulario')) {
            $file = $request->file('formulario');
            $destino = 'uploads/';
            $fileName = $file->getClientOriginalName();
            $uploadSuccess = $request->file('formulario')->move($destino, $fileName);
            $formulario->formulario = $destino . $fileName;
            $formulario->ruta = $destino . $fileName;
        }

        $formulario->save();

        return redirect()->route('formularios.index')->with(['usuarios' => $usuarios, 'usuario' => $usuario, 'formularios' => $formularios, 'success' => 'Formulario subido exitosamente']);
    }

    // Controla la vista 'formularios.edit' (formularios/edit.blade.php)
    public function edit($id)
    {
        $formulario = Formulario::find($id);
        return view('formularios.edit', ['formulario' => $formulario]);
    }

    // Controla la acción de actualizar un formulario
    public function update(Request $request, $id)
    {
        $formulario = Formulario::find($id);
        if (!$formulario) {
            return redirect()->back()->with('error', 'Formulario no encontrado');
        }

        if ($request->hasFile('formulario')) {
            if ($formulario->formulario && file_exists(public_path($formulario->formulario))) {
                unlink(public_path($formulario->formulario));
            }

            $file = $request->file('formulario');
            $destino = 'uploads/';
            $fileName = $file->getClientOriginalName();
            $uploadSuccess = $request->file('formulario')->move($destino, $fileName);
            $formulario->formulario = $destino . $fileName;
        }

        $formulario->save();

        $formularios = Formulario::all();
        $usuarios = User::all();
        $usuario = auth()->user();

        return view('formularios.subir', ['usuarios' => $usuarios, 'usuario' => $usuario, 'formularios' => $formularios])
            ->with('success', 'Formulario actualizado correctamente');
    }

    // Controla la acción de eliminar un formulario
    public function destroy($id)
    {
        $formulario = Formulario::find($id);
    
        if (!$formulario) {
            return redirect()->back()->with('error', 'Formulario no encontrado');
        }
    
        $archivo = public_path($formulario->formulario);
        if (file_exists($archivo)) {
            unlink($archivo);
        }
    
        $formulario->delete();
    
        // Obtener todos los formularios después de eliminar el formulario
        $formularios = Formulario::all();
        $usuario = auth()->user();
        $formularioCount = $formularios->count(); // Contar los formularios
    
        return view('formularios.subir', [
            'formularios' => $formularios,
            'usuario' => $usuario,
            'formularioCount' => $formularioCount
        ])->with('success', 'Formulario eliminado correctamente');
    }
    
}



