@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Crea un nuevo proceso</h5>
                        @include('quantums.error')
                        @include('quantums.form')
                </div>
            </div>
        </div>
    </div>
</div>



@endsection