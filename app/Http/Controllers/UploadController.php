<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validar el archivo
        $request->validate([
            'archivo' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,png,jpg,jpeg'
        ]);

        // Obtener el archivo del request
        $archivo = $request->file('archivo');
        $userId = $request->input('userId');

        // Definir el nombre y la ruta del archivo
        $fileName = time() . '_' . $archivo->getClientOriginalName();
        $filePath = 'uploads/' . $userId . '/' . $fileName;

        // Mover el archivo a la carpeta de destino
        $archivo->move(public_path('uploads/' . $userId), $fileName);

        // Aquí puedes guardar la información del archivo en la base de datos si es necesario
        // Ejemplo: DB::table('archivos')->insert(['user_id' => $userId, 'archivo' => $filePath]);

        // Retornar una respuesta JSON
        return response()->json([
            'success' => true,
            'message' => 'Archivo subido correctamente',
            'file' => $filePath
        ]);
    }
}
