<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profesor;

class ProfesorController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesor = Profesor::orderBy('id', 'desc')->paginate(9);
        return view('admin.profesor.index', compact('profesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre'          => 'required',
            'apellido'        => 'required',
            'codigo_profesor' => 'required',
        ]);
        $profesor = Profesor::create([
        	'nombre'          => $request->get('nombre'),
            'apellido'        => $request->get('apellido'),
            'codigo_profesor' => $request->get('codigo_profesor'),
        ]);

        $message = $profesor ? 'Profesor agregado Correctamente!' : 'El Profesor No pudo agregarse!';
        return Redirect('admin/profesor')->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$profesor = Profesor::find($id);
    	return view('admin.profesor.edit', compact('profesor'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre'          => 'required',
            'apellido'        => 'required',
            'codigo_profesor' => 'required',
        ]);
        $profesor = Profesor::find($id);
        $profesor->update($request->all());
        $message = $profesor ? 'Profesor actualizado Correctamente!' : 'El Profesor No pudo actualizarce!';
        return Redirect('admin/profesor')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();
        $message = $profesor ? 'Profesor eliminado Correctamente!' : 'El Profesor no se pudo eliminar!';
        return Redirect('admin/profesor')->with('message', $message);
    } 
}
