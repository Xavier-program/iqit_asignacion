<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ArchivoCompletado;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validar el archivo
        $request->validate([
            'archivo' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,png,jpg,jpeg',
            'userId' => 'required|exists:users,id' // Validar que el userId exista en la tabla users
        ]);

        // Obtener el archivo del request
        $archivo = $request->file('archivo');
        $userId = $request->input('userId');

        // Definir el nombre y la ruta del archivo
        $fileName = time() . '_' . $archivo->getClientOriginalName();
        $filePath = 'uploads/' . $userId . '/' . $fileName;

        // Mover el archivo a la carpeta de destino
        $archivo->move(public_path('uploads/' . $userId), $fileName);

        // Guardar la información del archivo en la base de datos
        ArchivoCompletado::create([
            'user_id' => $userId,
            'archivo' => $filePath,
        ]);

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Archivo subido correctamente');
    }
}
