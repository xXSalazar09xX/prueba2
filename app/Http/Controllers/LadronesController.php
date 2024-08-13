<?php

namespace App\Http\Controllers;

use App\Models\ladrones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class LadronesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $ladrones = ladrones::all();

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
            'cedula' => 'required|string|unique:ladrones,cedula|max:255',
            'delito' => 'required|string|max:255',
            'policia_id' => 'required|exists:policias,id'
            
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
    
        $ladron = ladrones::create($request->all());
    
        return response()->json($ladron, 201);
    }
    public function showCondena($id)
{
    $ladron = ladrones::findOrFail($id);

    if (!$ladron->condena) {
        return response()->json([
            'message' => 'El ladrón no tiene información de condena registrada.',
        ], 404);
    }

    $data = $ladron->toArray();
    $data['condena'] = $ladron->condena->toArray();

    return response()->json([
        'message' => 'Datos de la condena del ladrón.',
        'data' => $data,
    ], 200);
}
    

    

    public function show(ladrones $ladrones)
    {
        //
    }

    public function condena($id)
{
    $ladron = ladrones::with('condena')->findOrFail($id);

    if (!$ladron->condena) {
        return response()->json([
            'message' => 'El ladrón no tiene información de condena registrada.',
        ], 404);
    }

    return response()->json([
        'message' => 'Datos del ladrón y la condena.',
        'data' => $ladron->condena,
    ], 200);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ladrones $ladrones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ladrones $ladrones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ladrones $ladrones)
    {
        //
    }
}
