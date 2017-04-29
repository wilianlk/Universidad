<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Estudiantes;
use Datatables;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::orderBy('id', 'desc')->paginate(9);
        return view('usuario.index', compact('usuario'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::where('id', $id)->first();
        $electiva = Estudiantes::where('users_id', $usuario->id)->get();
        return view('usuario.show', compact('electiva'));
    }
}
