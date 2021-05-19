@extends('layouts\plantillabase');

@section('contenido')

<a href="personas/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ap. Paterno</th>
            <th scope="col">Ap. Materno</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Numero Dni</th>
            <th scope="col">Genero</th>
            <th scope="col">Estado civil</th>
            <th scope="col">Pais</th>
            <th scope="col">Acciones</th>
        </tr>
        
    </thead>
    <tbody>
        @foreach ($persona as $personas)
        <tr>
            <td>{{$personas->id}}</td>
            <td>{{$personas->nombre}}</td>
            <td>{{$personas->appaterno}}</td>
            <td>{{$personas->apmaterno}}</td>
            <td>{{$personas->fechanacimiento}}</td>
            <td>{{$personas->numerodni}}</td>
            <td>{{$personas->genero}}</td>
            <td>{{$personas->estadocivil}}</td>
            <td>{{$personas->pais}}</td>
            <td>{{$personas->acciones}}</td>
            <td>
                <form action="{{ route ('personas.destroy',$personas->id)}}" method="POST">
                <a href="/personas/{{$personas->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
