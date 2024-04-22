<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class ExcelController extends Controller
{

    public function import()
    {
        Excel::import(new UsersImport, 'users.xlsx');

        return redirect('/')->with('success', 'Archivo importado exitosamente.');
    }
    //
    public function generarExcel()
{
    // Crear una instancia de Spreadsheet
    $spreadsheet = new Spreadsheet();
    
    // Obtener la hoja activa
    $sheet = $spreadsheet->getActiveSheet();
    
    // Escribir en algunas celdas
    $sheet->setCellValue('A1', 'Nombre');
    $sheet->setCellValue('B1', 'Edad');
    
    $sheet->setCellValue('A2', 'Juan');
    $sheet->setCellValue('B2', 30);
    
    $sheet->setCellValue('A3', 'María');
    $sheet->setCellValue('B3', 25);
    
    // Crear un objeto Writer para guardar el archivo
    $writer = new Xlsx($spreadsheet);
    
    // Guardar el archivo en el almacenamiento
    $writer->save('archivo.xlsx');

    return response()->download('archivo.xlsx');
    

}

public function editarExcel()
    {
        // Ruta al archivo Excel existente
        $archivoExcel = storage_path('app/tu-archivo.xlsx');

        // Cargar el archivo Excel existente
        $spreadsheet = IOFactory::load($archivoExcel);

        // Obtener la hoja de trabajo activa
        $sheet = $spreadsheet->getActiveSheet();

        // Modificar los datos según sea necesario
        // Por ejemplo, cambiar el valor de la celda A1
        $sheet->setCellValue('A1', 'Nuevo valor');

        // Guardar los cambios en el archivo Excel
        $writer = new Xlsx($spreadsheet);
        $writer->save($archivoExcel);

        // Mensaje de confirmación
        return 'Se han realizado los cambios en el archivo Excel.';
    }

}

class UsersImport implements ToModel
{
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'email' => $row[1],
            // Define aquí la lógica para mapear los datos de tu archivo .xlsx a tu modelo
        ]);
    }
}

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Verificar si hay un archivo cargado
        if ($request->hasFile('archivo_modificado')) {
            // Guardar el archivo en la carpeta de almacenamiento
            $archivo = $request->file('archivo_modificado');
            $nombreArchivo = 'ejemplo1.xlsx'; // Puedes cambiar el nombre del archivo si es necesario
            $archivo->storeAs('storage', $nombreArchivo); // Almacenar el archivo en la carpeta storage
            return response()->json(['message' => 'Archivo subido correctamente'], 200);
        } else {
            return response()->json(['error' => 'No se ha seleccionado ningún archivo'], 400);
        }
    }
}

