<?php

namespace App\Http\Controllers\Estudiante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Electivas;
use App\User;
use App\Estudiantes;
use App\Profesor;
use Datatables;

class ElectivasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $electiva = Electivas::orderBy('id', 'desc')->paginate(9);
        
        return view('estudiante.electiva.index', compact('electiva','inscrito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        
        $electiva = Electivas::find($id);
        if($electiva->cupos_disponibles == 0)
        {
            $message = $electiva ? 'No puede Inscribirse | No hay cupos Disponibles' : 'Error al Inscribirse!';
        }
        elseif($electiva->cupos_disponibles != 0)
        {
            $estudiante = Estudiantes::create([
                'users_id'            => \Auth::user()->id,
                'electivas_id'       => $id,
            ]);
            $electiva->cupos_disponibles = $electiva->cupos_disponibles - 1;
            $electiva->update($request->all());
            $message = $electiva ? 'Usted se pudo Inscribir Correctamente!' : 'Usted no pudo Inscribirse Correctamente!';
            
        }

        return Redirect('estudiante/electivas')->with('message', $message);
    }

    public function profesor()
    {
        $profesor = Profesor::orderBy('id', 'desc')->paginate(9);
        return view('estudiante.profesor.index', compact('profesor'));
    }

    public function listados($id)
    {
        $electivas = Electivas::where('profesor_id', $id)->get();
        return view('estudiante.profesor.show', compact('electivas'));
    }

    public function electivas()
    {
        $listado = Electivas::orderBy('id', 'desc')->paginate(9);
        return view('estudiante.listado.index', compact('listado'));
    }

    public function listado($id)
    {
        $listados = Estudiantes::where('electivas_id', $id)->get();
        return view('estudiante.listado.show', compact('listados'));
    }

    public function anyData()
{
    return Datatables::of(User::query())->make(true);
}
}
