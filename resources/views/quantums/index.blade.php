@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-sm-12">
            <div class="card">
                <div class="header">
                    
                    <h3 class="card-title">Procesos Registrados
                        <a role="button"class="btn btn-primary pull-right" href="{{route('procesos.index')}}">- Volver</a> 
                        @if($totalQuantums == 0)
                        <a role="button"class="btn btn-primary pull-right" href="{{route('quantums.create')}}">+ Nuevo Quantum</a>    
                        @endif
                    </h3>
                    
                </div>
                
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Valor Quantums</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($quantums as $quantum)
                                    <tr>
                                        <td>{{$quantum->id}}</td>
                                        <td>{{$quantum->valor}}</td>
                                        
                                        <td>
                                            <a role="button"class="btn btn-warning" href="{{route('quantums.edit',$quantum->id)}}">Editar</a>    
                                        </td>
                                        
                                        <td>
                                        {!! Form::open(['route' => ['quantums.destroy', $quantum->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-danger">
                                                        Eliminar
                                                    </button>                           
                                                {!! Form::close() !!}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                
        
                </div>
            </div>

        </div>
    </div>
</div>
@endsection