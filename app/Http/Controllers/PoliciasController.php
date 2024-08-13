<?php

namespace App\Http\Controllers;

use App\Models\policias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PoliciasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ladrones = policias::all();

    return response()->json([
        'message' => 'Lista de ladrones con información de condena.',
        'data' => $ladrones,
    ], 200);
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
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|unique:policias,cedula',
            'rango' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $policia = policias::create($request->all());

        return response()->json($policia, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(policias $policias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(policias $policias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, policias $policias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(policias $policias)
    {
        //
    }
}
