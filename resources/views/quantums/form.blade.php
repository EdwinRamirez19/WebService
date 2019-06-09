@if(empty($quantum))
{!! Form::open(['route' => 'quantums.store','class'=> 'form-group']) !!}
@else
{!! Form::model($quantum, ['route' => ['quantums.update', $quantum->id], 'method' => 'PUT','class'=> 'form-group']) !!}
@endif
        
{{ csrf_field() }}
<div class="form-group">
<div class="col-sm-8 glyphicon-align-center">
    {{Form::text('valor',null,['class'=>'form-control','placeholder'=>'Quantum'])}}
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

