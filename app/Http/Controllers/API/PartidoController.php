<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partido;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_partidos)
    {
        $partido = Partido::find($id_partidos);
        return $partido;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido = new Partido;
        $partido->estado = $request->input('estado');
        $partido->id_juez = $request->input('id_juez');
        $partido->fecha = $request->input('fecha');
        $partido->hora = $request->input('hora');
        $partido->equipo1 = $request->input('equipo1');
        $partido->equipo2 = $request->input('equipo2');

        $partido->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $partido = Partido::All();
        return $partido;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_partidos)
    {
        $partido = Partido::find($id_partidos);
        $partido -> update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_partidos)
    {
        $partido = Partido::destroy($id_partidos);
        return $partido;
    }
    public function partidoActivo(){
            $consulta = Partido::all();
            $consulta = Partido::where('estado','activo')->get();
            return $consulta;
    }
}
