@extends('layouts.app')

@section('title', 'TransaccionFinanciera Index')

@section('content')
<div class="container">
    <h2>Listado de Contratos</h2>
        @foreach ($TransaccionFinanciera as $transaccionFinanciera)
            <div class="card">
                <h5 class="card-header">{{$transaccionFinanciera->transaccion_id}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$transaccionFinanciera->fecha_inicio_contrato}}</h5>
                    <p class="card-text">{{$transaccionFinanciera->fecha_fin_contrato}}</p>
                    <p class="card-text">{{$transaccionFinanciera->precio}}</p>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
        @endforeach
    </div>
</div>
@endsection
