@extends('layouts.app')

@section('title', 'Contrato Index')

@section('content')
<div class="container">
    <h2>Listado de Pacientes</h2>
        @foreach ($contratos as $contrato)
            <div class="card">
                <h5 class="card-header">{{$contrato->contrato_id}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$contrato->fecha_inicio_contrato}}</h5>
                    <p class="card-text">{{$contrato->fecha_fin_contrato}}</p>
                    <p class="card-text">{{$contrato->precio}}</p>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
        @endforeach
    </div>
</div>
@endsection
