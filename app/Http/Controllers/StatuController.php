<?php

namespace App\Http\Controllers;

use App\Models\Statu;
use App\Models\Formulario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $formularios = Formulario::all();
        return view('admin.asignacion', ['formularios' => $formularios, 'usuario'=> User::Find($id)]);
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
    public function show(Statu $statu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statu $statu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statu $statu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statu $statu)
    {
        //
    }
}
