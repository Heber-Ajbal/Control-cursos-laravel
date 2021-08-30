@extends('layouts.plantilla')
@section('title', 'Alumnos')
@section('content')

<div class="container table-responsive py-5">
    <a href="{{route('alumnos.create')}}"><button type="button" class="btncreate btn btn-outline-primary">Registrar Alumno</button></a>
    <br><br>
    <table class="table table-success table-striped">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-light">

            @foreach ($alumnos as $alumno)


                <tr>
                    <th scope="row">{{$alumno->id}}</th>
                    <td>{{$alumno->name}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>

                        <form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
                            <a class="btn btn-sm btn-success " href="{{route('alumnos.show',$alumno)}}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                            <a class="btn btn-sm btn-primary " href="{{route('alumnos.edit',$alumno)}}"><i class="fas fa-edit"></i> Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $alumnos->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>


@endsection
