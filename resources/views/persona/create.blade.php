@extends('layouts\plantillabase');

@section('contenido')

<h2>CREAR REGISTRO</h2>

<form action="/personas" method="POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Ap. Paterno</label>
        <input id="appaterno" name="appaterno" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Ap. Materno</label>
        <input id="apmaterno" name="apmaterno" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Nacimiento</label>
        <input id="fechanacimiento" name="fechanacimiento" type="text" class="form-control" tabindex="1">
    </div>
    <label for="" class="form-label">Numero Dni</label>
        <input id="numerodni" name="numerodni" type="text" class="form-control" tabindex="1">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Genero</label>
        <input id="genero" name="genero" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Estado Civil</label>
        <input id="estadocivil" name="estadocivil" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Pais</label>
        <input id="pais" name="pais" type="text" class="form-control" tabindex="1">
    </div>

    <a href="/personas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@endsection