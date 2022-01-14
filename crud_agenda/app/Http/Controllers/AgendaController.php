<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AgendaController extends Controller
{

    public function index()
    {
        /*if (Gate::allows('index-agenda')) {
            return view('index');
        }
        Abort(403);*/
        /*  abort_unless(Gate::allows('index-agenda'), 403);
          return view('index');*/

        $this->authorize('index-agenda');
        //$datos=DB::table('agenda')->select('nombre','apellido','teléfono','email')->get();
        //$datos['agenda']=Agenda::paginate(5);
        $datos = Agenda::all();
        return view('agenda.index', compact('datos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosagenda = request()->all();
        $datosagenda = request()->except('_token');
        if($request->hasFile('foto')){
            $datosagenda['foto']=$request->file('foto')->store('uploads','public');
        }
        Agenda::insert($datosagenda);
        //return response()->json($datosagenda);
        return redirect('agenda');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto=Agenda::findOrFail($id);
        return view('agenda.edit', compact('contacto'));
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
        $datosagenda = request()->except(['_token','_method']);
        Agenda::where('id','=',$id)->update($datosagenda);

        $contacto=Agenda::findOrFail($id);
        //return view('agenda.edit', compact('contacto'));
        return redirect('agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agenda::destroy($id);
        return redirect('agenda');
    }
}
