<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quantum;
use App\Http\Requests\QuantumStoreRequest;
use App\Http\Requests\QuantumUpdateRequest;
class QuantumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantums = Quantum::all();
        $totalQuantums = Quantum::count('*');
        return view('quantums.index',compact('quantums','totalQuantums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $quantum = null;
        return view('quantums.create',compact('quantum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuantumStoreRequest $request)
    {
        $quantum = Quantum::create($request->all());
        return redirect()->route('procesos.index',compact('quantum'))
        ->with('crear','Quantum creado con Exito!!');
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
    public function edit(Quantum $quantum)
    {
        return view('quantums.edit',compact('quantum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuantumUpdateRequest $request, Quantum $quantum)
    {
        $quantum->update($request->all());
        return redirect()->route('procesos.index')
        ->with('editar','Quantum Actualizado con Exito !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantum $quantum)
    {
        $quantum->delete();
        return redirect()->route('procesos.index')
        ->with('eliminar','Quantum Eliminado con Exito !!');

    }
}
