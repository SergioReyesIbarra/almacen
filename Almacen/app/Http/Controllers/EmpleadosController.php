<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = Empleados::all();
        return response()->json($todo,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newempleado = new Empleados(
            [
                'nombrecompleto' => $request->get('nombrecompleto'),
                'numerodetelefono' => $request->get('numerodetelefono'),
                'salario' => $request->get('salario')
            ]
        );
        $newempleado->save();
        return response()->json($newempleado,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peque = Empleados::find($id);
        return response()->json($peque,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subir = Empleados::find($id);
        $subir->nombrecompleto=$request->get('nombrecompleto');
        $subir->numerodetelefono=$request->get('numerodetelefono');
        $subir->salario=$request->get('salario');
        $subir->save();
        return response()->json($subir,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proeli = Empleados::find($id);
        $proeli->delete();
        return response()->json($proeli,200);
    }
}
