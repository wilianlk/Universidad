<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Electivas;
use App\Profesor;
use Datatables;

class ElectivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $electiva = Electivas::orderBy('id', 'desc')->paginate(9);
        return view('admin.electiva.index', compact('electiva'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesor = Profesor::orderBy('id','DESC')->pluck('codigo_profesor','id');
        return view('admin.electiva.create', compact('profesor'));
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
            'nombre'            => 'required',
            'descripcion'       => 'required',
            'profesor_id'       => 'required',
            'cupos_disponibles' => 'required',
        ]);
        $electiva = Electivas::create([
        	'nombre'            => $request->get('nombre'),
            'descripcion'       => $request->get('descripcion'),
            'profesor_id'       => $request->get('profesor_id'),
            'cupos_disponibles' => $request->get('cupos_disponibles'),
        ]);

        $message = $electiva ? 'Electiva agregada Correctamente!' : 'La Electiva No pudo agregarse!';
        return Redirect('admin/electiva')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$electivas = Electivas::find($id);
        $profesor = profesor::orderBy('id','DESC')->pluck('codigo_profesor','id');
    	return view('admin.electiva.edit', compact('electivas','profesor'));
        
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
            'nombre'            => 'required',
            'descripcion'       => 'required',
            'profesor_id'       => 'required',
            'cupos_disponibles' => 'required',
        ]);
        $electiva = Electivas::find($id);
        $electiva->update($request->all());
        $message = $electiva ? 'Electiva actualizada Correctamente!' : 'La Electiva No pudo actualizarce!';
        return Redirect('admin/electiva')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $electiva = Electivas::find($id);
        $electiva->delete();
        $message = $electiva ? 'Electiva eliminada Correctamente!' : 'La Electiva no se pudo eliminar!';
        return Redirect('admin/electiva')->with('message', $message);
    } 
}
