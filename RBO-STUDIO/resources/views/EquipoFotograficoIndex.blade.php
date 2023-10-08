@extends('layouts.app')

@section('title', 'EquipoFotografico Index')

@section('content')
<div class="container">
    <h2>Listado de Contratos</h2>
        @foreach ($EquipoFotografico as $equipoFotografico)
            <div class="card">
                <h5 class="card-header">{{$equipoFotografico->equipo_id}}</h5>
                <div class="card-body">
                    <p class="card-text">{{$equipoFotografico->nombre}}</p>
                    <p class="card-text">{{$equipoFotografico->cantidad_disponible}}</p>
                    <p class="card-text">{{$equipoFotografico->descripcion}}</p>
                    <h5 class="card-title">{{$equipoFotografico->precio}}</h5>
                    <a href="#" class="btn btn-primary">Ver detalle</a>
                </div>
        @endforeach
    </div>
</div>
@endsection
