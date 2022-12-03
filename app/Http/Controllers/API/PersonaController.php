<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;


class PersonaController extends Controller
{
    public function index($id)
    {
        $persona = Persona::find($id);
        return $persona;
    }
    public function listarJugador(){
        $consulta = Persona::all();
        $consulta = Persona::where('rol','jugador')->get();
        return $consulta;
    }
    public function jugador($id){
        $consulta = Persona::all();
        $consulta = Persona::where('id_user',$id)->where('rol','jugador')->get();
        return $consulta;
    }
    public function listarDelegado(){
        $consulta = Persona::all();
        $consulta = Persona::where('rol','delegado')->get();
        return $consulta;
    }
    public function delegado($id){
        $consulta = Persona::all();
        $consulta = Persona::where('id_user',$id)->where('rol','delegado')->get();
        return $consulta;
    }
    public function buscar($nombre,$apellido){
        $consulta = Persona::all();
        $consulta = Persona::where('nombre',$nombre)->where('apellido',$apellido)->get();
        return $consulta;
    }

    public function store(Request $request)
    {
        //alta de persona
        $persona = new Persona;
        $persona->id_user = $request->input('id_user');
        $persona->id_equipo = $request->input('id_equipo');
        $persona->ci = $request->input('ci');
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->rol = $request->input('rol');
        $persona->sexo = $request->input('sexo');
        $persona->nacionalidad = $request->input('nacionalidad');
        $persona->fechaNac = $request->input('fechaNac');
        $persona->foto = $request->input('foto');
        $persona->save();

    }

    public function show()
    {
        $persona = Persona::All();
        return $persona;
    }

    public function viewPersona($nombre)
    {
        $persona = Persona::find($nombre);
        return $persona;
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona -> update($request->all());
    }

    public function destroy( $id)
    {
        $persona = Persona::destroy($id);
        return $persona;
    }
}
