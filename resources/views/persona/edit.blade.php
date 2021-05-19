@extends('layouts\plantillabase');

@section('contenido')
<h2>EDITAR REGISTRO</h2>
<form action="/personas/{{$persona->id}}" method="POST">
    @method('PUT')
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$persona->nombre}}">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Ap. Paterno</label>
        <input id="appaterno" name="appaterno" type="text" class="form-control" value="{{$persona->appaterno}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Ap. Materno</label>
        <input id="apmaterno" name="apmaterno" type="text" class="form-control" value="{{$persona->apmaterno}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Fecha Nacimiento</label>
        <input id="fechanacimiento" name="fechanacimiento" type="text" class="form-control" value="{{$persona->fechanacimiento}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Numero Dni</label>
        <input id="fechanacimiento" name="numerodni" type="text" class="form-control" value="{{$persona->numerodni}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Genero</label>
        <input id="sexo" name="sexo" type="text" class="form-control" value="{{$persona->sexo}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Estado Civil</label>
        <input id="estadocivil" name="estadocivil" type="text" class="form-control" value="{{$persona->estadocivil}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Pais</label>
        <input id="pais" name="pais" type="text" class="form-control" value="{{$persona->pais}}">
    </div>

    <a href="/personas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@endsection