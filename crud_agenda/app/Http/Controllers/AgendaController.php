<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaRequest;
use App\Models\Contacto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


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
        //$datos['agenda']=Contacto::paginate(5);
        $datos = Contacto::all();
        return view('agenda.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $user = new User());//si no lo dejo puedo acceder con la url //create
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgendaRequest $request)
    {
        /*$campos = [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|unique:contacto',
            'email' => 'required|email|unique:contacto',
            'foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'foto.required' => 'La foto es requerida',
            'email' => 'El email debe tener un formato xxxx@dominio.xxx',
            'unique' => 'Este :attribute ya existe'
        ];

        $this->authorize('create',new User());
        $this->validate($request, $campos, $mensaje);*/
        $this->authorize('create',new User());
       // $this->validate($request);


        //$datosagenda = request()->all();
        $datosagenda = $request->except('_token');
        if ($request->hasFile('foto')) {
            $datosagenda['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        Contacto::insert($datosagenda);
        //return response()->json($datosagenda);
        return redirect('agenda')->with('mensaje', 'Contacto agregado');
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
    public function edit($id, User $user)
    {
        $this->authorize('update',$user);
        $contacto = Contacto::findOrFail($id);
        return view('agenda.edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AgendaRequest $request, $id, User $user)
    {
        /*$campos = [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required',
            'email' => 'required|email',
        ];
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'email' => 'El email debe tener un formato xxxx@dominio.xxx'
        ];*/

        if ($request->hasFile('foto')) {
            $campos = ['foto' => 'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje = ['foto.required' => 'La foto es requerida',];
        }

        $this->authorize('update',$user);
       /* $this->validate($request, $campos, $mensaje);*/

        $datosagenda = request()->except(['_token', '_method']);

        if ($request->hasFile('foto')) {
            $contacto = Contacto::findOrFail($id);
            Storage::delete('public/' . $contacto->foto);
            $datosagenda['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        Contacto::where('id', '=', $id)->update($datosagenda);

        $contacto = Contacto::findOrFail($id);
        //return view('agenda.edit', compact('contacto'));
        return redirect('agenda')->with('mensaje', 'Contacto actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, User $user)
    {
        $this->authorize('delete',$user);
        $contacto = Contacto::findOrFail($id);
        if (Storage::delete('public/' . $contacto->foto)) {
            Contacto::destroy($id);
        }

        return redirect('agenda')->with('mensaje', 'Contacto borrado');
    }
}
