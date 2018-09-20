@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-sm-12">
            <div class="card">
                <div class="header">
                    <h3 class="card-title">Procesos Registrados
                        <a role="button"class="btn btn-primary pull-right" href="{{route('procesos.create')}}">+ Nuevo Proceso</a>    
                    </h3>
                    
                </div>
                
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>PID</th>
                                    <th>Nombre del Proceso</th>
                                    <th>Prioridad</th>
                                    <th>Caracteres</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($procesos as $proceso)
                                    <tr>
                                        <td>{{$proceso->id}}</td>
                                        <td>{{$proceso->nombre}}</td>
                                        <td>{{$proceso->prioridad}}</td>
                                        <td>{{$proceso->caracteres}}</td>
                                        <td>
                                            <a role="button"class="btn btn-primary" href="{{route('procesos.edit',$proceso->id)}}">Editar</a>    
                                        </td>
                                        
                                        <td>
                                        {!! Form::open(['route' => ['procesos.destroy', $proceso->id], 'method' => 'DELETE']) !!}
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