@extends('layouts.plantilla')
@section('title', 'asignacionar Nota')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">

                    <tbody>
                        <tr>
                            <th scope="row">Curso</th>
                            <td>{{ $curso->nombre }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Alumno</th>
                            <td>{{ $alumno->name }}</td>
                        </tr>
                        <tr>

                            <th scope="row">Actividades Entregadas</th>

                            <td>

                                <p>
                                    <a class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Ver Actividades
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <ol class="list-group">
                                            @foreach ($actividades as $actividad)
                                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">{{ $actividad->nombre }}</div>

                                                    </div>
                                                    <span
                                                        class="badge bg-primary rounded-pill">{{ $actividad->valor }} pts</span>
                                                </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>


                            </td>

            </div>


            </tr>

            <tr>
                <form action="{{ route('asignaciones.update', $asignacione) }}" method="POST">
                    @csrf
                    @method('put')

                    <th scope="row">Asignar Nota</th>
                    <td>
                        <div class="mb-3">

                            <input type="text" class="form-control note" name="nota"
                                value="{{ old('nota', $asignacione->nota) }}">

                        </div>
                        <button type="submit" class="btn btn-primary">Asignar Nota</button>

                    </td>
                    <br>

                    {{-- <button type="submit" class="btn btn-danger">Cancelar</button> --}}
                </form>

            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>

    <style>
        .note{
            border: 2px solid;
            border-color: #aecfeb;
            width: 12rem;
        }
    </style>

@endsection
