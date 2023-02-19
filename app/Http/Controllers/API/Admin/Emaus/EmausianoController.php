<?php

namespace App\Http\Controllers\API\Admin\Emaus;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmausianoRequest;
use App\Models\Emausiano;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmausianoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emausianos = Emausiano::all();
        return response()->json(['data' => $emausianos], 200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmausianoRequest $request)
    {
        $validatedData = $request->validated();
        
        $emausiano = Emausiano::create([
            'nro' => $request->nro,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'numero_telefono' => $request->numero_telefono,
            'direccion_habitacion' => $request->direccion_habitacion,
            'estado_civil' => $request->estado_civil,
            'bautismo' => $request->bautismo,
            'comunion' => $request->comunion,
            'confirmacion' => $request->confirmacion,
            'matrimonio' => $request->matrimonio,
            'sexo' => $request->sexo,
            'nro_retiro' => $request->nro_retiro,
            'fecha_retiro' => $request->fecha_retiro,
            'parroquia' => $request->parroquia,
            'pueblo_ciudad' => $request->pueblo_ciudad
        ]);

        return response()->json(['status' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Emausiano::findOrFail($id);
        return response()->json($data, 200, []);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmausianoRequest $request, $id)
    {
        $validatedData = $request->validated();

        $emausiano = Emausiano::find($id);

        if (!$emausiano) {
            return response()->json(['status' => false, 'error_string' => 'Registro no encontrado']);
        }

        Emausiano::where('id', $id)->update([
            'nro' => $request->nro,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula' => $request->cedula,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'numero_telefono' => $request->numero_telefono,
            'direccion_habitacion' => $request->direccion_habitacion,
            'estado_civil' => $request->estado_civil,
            'bautismo' => $request->bautismo,
            'comunion' => $request->comunion,
            'confirmacion' => $request->confirmacion,
            'matrimonio' => $request->matrimonio,
            'sexo' => $request->sexo,
            'nro_retiro' => $request->nro_retiro,
            'fecha_retiro' => $request->fecha_retiro,
            'parroquia' => $request->parroquia,
            'pueblo_ciudad' => $request->pueblo_ciudad
        ]);
        
        return response()->json(['status' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Emausiano = Emausiano::destroy($request->id);
        return response()->json(true);
    }
}