@extends('layouts.plantilla')
@section('title', 'asignaciones ')
@section('content')

    <!-- JavaScript Bundle with Popper -->

    <div class="container table-responsive py-5">
        <h1>Alumnos Asignados al Curso: {{ $curso->nombre }}</h1>
        <br><br>
        <div class="float-right">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#AsignarAlumno">
                Asignar Alumno
            </button>
        </div>
        <br><br>
        <table class="table table-success table-striped">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-light">

                @foreach ($alumnos as $asignacione)


                    <tr>
                        <th scope="row">{{ $asignacione->id }}</th>
                        <td>{{ $asignacione->name }}</td>
                        <td>{{ $asignacione->nota }}</td>
                        <td>

                            <form action="{{ route('asignaciones.destroy', $asignacione->idAssig) }}" method="POST">
                                <a class="btn btn-sm btn-primary " href="{{ route('asignaciones.edit',$asignacione->idAssig)}}">
                                    <i class="fas fa-edit"></i> Asiganar Nota</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                    Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <div class="modal fade" id="AsignarAlumno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Asignar Alumno</h5>
                </div>
                <div class="modal-body">
                    <form action="{{route('asignaciones.store')}}" method="POST">
                        @csrf


                        <div class="mb-3">
                            <label class="form-label">IDCurso</label>
                            <input class="form-control" name="curso_id" value="{{ $curso->id }}" >
                        </div>

                        <div class="mb-3">
                            <label for="text" class="form-label">Alumno</label>
                            <br>

                            <select class="form-select form-select-sm" aria-label="Default select example" name="user_id">
                                @foreach ($NewAlumnos as $alu)
                                    <option value="{{ $alu['id'] }}">{{ $alu['name'] }} </option>
                                @endforeach
                            </select>




                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
