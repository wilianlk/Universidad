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
            'nombre'   => 'required',
            'apellido' => 'required',
            'email'    => 'required|unique:users|max:255',
            'password' => 'required',
            'rol' => 'required',
        ]);
        $usuario = User::create([
        	'nombre'   => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'email'    => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'rol'    => $request->get('rol'),
        ]);

        $message = $usuario ? 'Usuario agregada Correctamente!' : 'El Usuario No pudo agregarse!';
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
            'nombre'   => 'required',
            'apellido' => 'required',
            'email'    => 'required|unique:users|max:255',
            'password' => 'required',
        ]);
        $usuario = User::find($id);
        $usuario->nombre   = $request->get('nombre');
        $usuario->apellido = $request->get('apellido');
        $usuario->email    = $request->get('email');
        if($request->get('password') != "") bcrypt($request->get('password'));
        $updated = $usuario->save();
        $message = $usuario ? 'Usuario actualizada Correctamente!' : 'El Usuario No pudo actualizarce!';
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
        $message = $usuario ? 'Usuario eliminada Correctamente!' : 'El Usuario no se pudo eliminar!';
        return Redirect('admin/usuario')->with('message', $message);
    }
}
