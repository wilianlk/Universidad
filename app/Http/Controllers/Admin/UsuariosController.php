<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Datatables;

class UsuariosController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::orderBy('id', 'desc')->paginate(9);
        return view('admin.usuario.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuario.create');
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
            'profesor'          => 'required',
            'cupos_disponibles' => 'required',
        ]);
        $usuario = User::create([
        	'nombre'            => $request->get('nombre'),
            'descripcion'       => $request->get('descripcion'),
            'profesor'          => $request->get('profesor'),
            'cupos_disponibles' => $request->get('cupos_disponibles'),
        ]);

        $message = $usuario ? 'Electiva agregada Correctamente!' : 'La Electiva No pudo agregarse!';
        return Redirect('admin/usuario')->with('message', $message);
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
    	$usuario = User::find($id);
    	return view('admin.usuario.edit', compact('usuario'));
        
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
            'profesor'          => 'required',
            'cupos_disponibles' => 'required',
        ]);
        $usuario = User::find($id);
        $usuario->update($request->all());
        $message = $usuario ? 'Electiva actualizada Correctamente!' : 'La Electiva No pudo actualizarce!';
        return Redirect('admin/usuario')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        $message = $usuario ? 'Electiva eliminada Correctamente!' : 'La Electiva no se pudo eliminar!';
        return Redirect('admin/usuario')->with('message', $message);
    }
}
