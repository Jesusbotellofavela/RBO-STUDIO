@extends('layouts.app')

@section('title', 'TransaccionFinanciera Create')
@section('content')
<div class="container mt-5">
    <h1 class="display-6">Agregar Transaccion</h1>
    <hr style="color: #0056b2;" />
    <form class="row g-3 needs-validation" method="POST" action="/TransaccionFinanciera">
        @csrf
        <div class="col-md-6">
            <label for="transaccion_id" class="form-label">Transaccion_Id:</label>
            <input type="text" name="transaccion_id" class="form-control" id="transaccion_id" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="tipo_transaccion" class="form-label">tipo_transaccion:</label>
            <input type="text" name="tipo_transaccion" class="form-control" id="tipo_transaccion" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="monto" class="form-label">monto:</label>
            <input type="text" name="monto" class="form-control" id="monto" required>
            <div class="valid-feedback">
                Looks good!
            </div>

            <div class="col-md-6">
            <label for="fecha_transaccion" class="form-label">fecha_transaccion:</label>
            <input type="text" name="fecha_transaccion" class="form-control" id="fecha_transaccion" required>
            <div class="valid-feedback">
                Looks good!
            </div>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection
