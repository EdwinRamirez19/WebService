<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proceso;
use App\Quantum;
use App\Http\Requests\ProcesoStoreRequest;
use App\Http\Requests\ProcesoUpdateRequest;
class ProcesoController extends Controller
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

        $contarCaracteres = \DB::table('procesos')->select('caracteres')->get();
        $total = strlen($contarCaracteres);
        
        

    
        return view('procesos.index',compact('procesos','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proceso = null;
        $quantum = Quantum::pluck('valor','id');
        
        return view('procesos.create',compact('proceso','quantum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProcesoStoreRequest $request)
    {
        $proceso = Proceso::create($request->all());
          
        return redirect()->route('procesos.index', compact('proceso'))
        ->with('crear', 'Proceso Creado con Éxito !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proceso $proceso)
    {
        return view('procesos.edit',compact('proceso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProcesoUpdateRequest $request, Proceso $proceso)
    {
        $proceso->update($request->all());
        return redirect()->route('procesos.index')
        ->with('editar','Proceso Actualizado con Exito !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proceso $proceso)
    {
        $proceso->delete();
        return redirect()->route('procesos.index')
       ->with('eliminar', 'Proceso Eliminado con Éxito !!');;

    }
}
