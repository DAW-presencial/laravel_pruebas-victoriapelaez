<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContactoResource;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DB::table('contactos')->get();
        return $datos;
//        return Contacto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return Contacto::create($request->all());
        $contacto = Contacto::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'edad' => $request->edad,
        ]);
        return response()->json(['Contacto creado.', new ContactoResource($contacto)]);



    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        Contacto::find($id);
        return response()->json(['data' => Contacto::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacto = Contacto::find($id);
        $contacto->update($request->all());
      /*  $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->telefono = $request->telefono;
        $contacto->email = $request->email;*/
        $contacto->save();
        return $contacto;

//       return response()->json(['Contacto actualizado.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contacto::destroy($id);
    }
}
