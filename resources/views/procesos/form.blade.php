@if(empty($proceso))
{!! Form::open(['route' => 'procesos.store','class'=> 'form-group']) !!}
@else
{!! Form::model($proceso, ['route' => ['procesos.update', $proceso->id], 'method' => 'PUT','class'=> 'form-group']) !!}
@endif
        
{{ csrf_field() }}
<div class="form-group">
<div class="col-sm-8 glyphicon-align-center">
    {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Proceso'])}}
</div>

<div class="col-sm-8">
    <input type="hidden" name="prioridad",value="" class="form-control" placeholder="Prioridad del Proceso" id="prioridad">
    
</div>
<br><br>
<div class="col-sm-8">
    {{Form::text('caracteres',null,['class'=>'form-control','placeholder'=>'Caracteres del Proceso'])}}
</div>

<br><br>
<div class="col-sm-8">

{!! Form::select('quanta_id', $quantum,$quantum , ['class' => 'form-control', 'id' => 'grupo', 'placeholder' => 'Seleccione el Quantum']) !!}


</div>
<br><br>

<div class="col-sm-8">
<footer>
        
        <button type="summit" class="btn btn-success">Guardar</button>
        <a type="button" class="btn btn-info" href="{{route('procesos.index')}}" >Cancelar</a>
</footer>
</div>
</div>
{!! Form::close() !!}

<script>
  var prioridad = Math.floor((Math.random() * 3 )+0); 
  document.getElementById("prioridad").value=prioridad

  var contar =[];
  
  

</script>