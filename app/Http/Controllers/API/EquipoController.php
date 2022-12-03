<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;

class equipoController extends Controller
{
    public function index($id_equipo)
    {
        $equipo = Equipo::find($id_equipo);
        return $equipo;
    }

    public function store(Request $request)
    {
        $equipo = new Equipo;
        $equipo->id_categoria = $request->input('id_categoria');
        $equipo->nombre = $request->input('nombre');
        $equipo->pais = $request->input('pais');
        $equipo->ci_delegado = $request->input('ci_delegado');
        $equipo->save();

    }

    public function show()
    {
        $equipo = Equipo::All();
        return $equipo;
    }

    public function viewId($id_equipo)
    {
        $equipo = Equipo::find($id_equipo,['nombre']);
        return $equipo;
    }

    public function update(Request $request, $id_equipo)
    {
        $equipo = Equipo::find($id_equipo);
        $equipo -> update($request->all());
    }

    public function destroy( $id_equipo)
    {
        $equipo = Equipo::destroy($id_equipo);
        return $equipo;
    }
    public function porDelegado($id_delegado){
        $consulta = Equipo::all();
        $consulta = Equipo::where('ci_delegado',$id_delegado)->get();
        return $consulta;
    }
}
