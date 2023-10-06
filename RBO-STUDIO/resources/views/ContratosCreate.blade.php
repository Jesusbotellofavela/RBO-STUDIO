
@extends('layouts.app')

@section('title', 'Contratos Create')
@section('content')
<div class="container mt-5">
    <h1 class="display-6">Agregar Contrato</h1>
    <hr style="color: #0056b2;" />
    <form class="row g-3 needs-validation" method="POST" action="/contrato">
        @csrf
        <div class="col-md-6">
            <label for="contrato_id" class="form-label">Contrato_Id:</label>
            <input type="text" name="contrato_id" class="form-control" id="contrato_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="fecha_inicio_contrato" class="form-label">fecha_inicio_contrato:</label>
            <input type="text" name="fecha_inicio_contrato" class="form-control" id="fecha_inicio_contrato" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="fecha_fin_contrato" class="form-label">fecha_fin_contrato:</label>
            <input type="text" name="fecha_fin_contrato" class="form-control" id="fecha_fin_contrato" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="precio" class="form-label">precio:</label>
            <input type="text" name="precio" class="form-control" id="precio" required>
            <div class="valid-feedback">
                Looks good!
            </div>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection
