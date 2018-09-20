@if(empty($proceso))
{!! Form::open(['route' => 'procesos.store','class'=> 'form-group']) !!}
@else
{!! Form::model($proceso, ['route' => ['procesos.update', $proceso->id], 'method' => 'PUT','class'=> 'form-group']) !!}
@endif
        
{{ csrf_field() }}
<div class="col-sm-8 glyphicon-align-center">
    {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Proceso'])}}
</div>
<br><br>
<div class="col-sm-8">
    {{Form::number('prioridad',null,['class'=>'form-control','placeholder'=>'Prioridad del Proceso'])}}
</div>
<br><br>
<div class="col-sm-8">
    {{Form::text('caracteres',null,['class'=>'form-control','placeholder'=>'Caracteres del Proceso'])}}
</div>

<br><br>


<div class="col-sm-8">
<footer>
        
        <button type="summit" class="btn btn-success">Guardar</button>
        <a type="button" class="btn btn-default" href="{{route('procesos.index')}}" >Cancelar</a>
</footer>
</div>

{!! Form::close() !!}