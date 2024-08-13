<?php

namespace App\Http\Controllers;

use App\Models\condena;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CondenaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sentencia = DB::table('sentencia')
            ->join('ladron', 'ladron.id', '=', 'sentencia.id_ladron')
            ->select('sentencia.*', 'ladron.nombre')
            ->get();
        return response()->json(['sentencia' => $sentencia], 200);
    }
    public function store(Request $request)
    {
        $sentencia = condena::create([
            'ladron_id' => $request->ladron_id,
            'annos_condena' => $request->annos_condena,
            'multa_economica' => $request->multa_economica,
        ]);

        return response()->json([
            'message' => 'Dato creado correctamente',
            'sentencia' => $sentencia
    ],201);}

    /**
     * Display the specified resource.
     */
    public function show(condena $condena)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(condena $condena)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, condena $condena)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(condena $condena)
    {
        //
    }
}
