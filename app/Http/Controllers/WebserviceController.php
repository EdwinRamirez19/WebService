<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proceso;
class WebserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesos = \DB::table('procesos')
        ->join('quanta','quanta.id','=','procesos.quanta_id')
        ->select(\DB::raw("procesos.*,quanta.valor"))
        ->orderBy('nombre','ASC')
        ->get();
        return response()->json($procesos);
    }

    public function store(Request $request)
    {
        $proceso = Proceso::create($request->all());
        return response()->json($proceso,201);
    }

    public function show(Proceso $proceso)
    {
        return $proceso;
    }

    public function update(Request $request,Proceso $proceso)
    {
        $proceso->update($request->all());
        return response()->json($proceso,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Proceso $proceso)
    {
        $proceso->delete();
        return response()->json('Proceso Eliminado',204);
    }
}
