@extends('layouts.plantilla')
@section('title', 'Curso ' . $curso->nombre)
@section('content')

    <br>
    <h2 class="lines-effect" align="center">Bienvenido al Curso de: {{ $curso->nombre }}</h2>
    <br><br>

    {{-- CURSO --}}
    <div class="container">
        <div class="row">
            <div class="datos col-sm-3">
                <div class="d-flex">
                    <div class="sidebar-container ">
                        <div class="logo">
                            <h4 class="text-black font-weight-bold">Acciones</h4>
                        </div>
                        <div class="menu">
                            <a href="{{ route('cursos.index') }}"
                                class="font-weight-bold text-success p-3 mr-2 lead d-block">Cursos</a>
                            <a href="{{ route('cursos.edit', $curso) }}"
                                class="font-weight-bold text-success p-3 mr-2 lead d-block">Editar Curso</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#EliminarCurso"
                                class="font-weight-bold text-success p-3 mr-2 lead d-block">Eliminar Curso</a>

                            <a href="{{ route('asignaciones.show', $curso) }}"
                                class="font-weight-bold text-success p-3 mr-2 lead d-block">Alumnos</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <h2 align="center">Actividades</h2>
                <br><br>
                <div class="___class_+?14___">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarActividad">
                        Agregar Actividad
                    </button>
                </div>
                <br><br>
                <div class="row row-cols-1 row-cols-md-3 g-4">


                    @if ($actividades->count())
                        @foreach ($actividades as $actividad)
                            <div class="col">
                                <div class="card" align="center">
                                    <img src="https://www.agdecora.net/wp-content/uploads/2019/02/check-list-de-tareas-para-el-regreso-a-clases.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $actividad->nombre }}</h5>
                                        <p class="card-text">{{ $actividad->descripcion }}</p>

                                        <div class="btn-group" role="group" aria-label="Basic example">



                                            <form  action="{{ route('actividades.destroy', $actividad->id) }}" method="POST">
                                                 <a href="{{ route('actividades.show', $actividad) }}">
                                                    <button type="button" class="btn btn-outline-secondary">ver</button></a>

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"
                                                    name="">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="card-body">
                            <strong>Aun no se agregan actividades </strong>
                        </div>
                    @endif



                </div>
                <div class="d-flex justify-content-end">
                    {{ $actividades->links('vendor.pagination.bootstrap-4') }}
                </div>

            </div>

        </div>

    </div>


    {{-- ########################## MODALS ##################### --}}

    <div class="modal fade" id="EliminarCurso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Curso:{{ $curso->name }} </h5>

                </div>
                <div class="modal-body">
                    <h6>¿Esta seguro de eliminar el curso?, de ser así se eliminaran todos los registros relacionados con
                        dicho curso</h6>
                </div>
                <div class="modal-footer">
                    <form action="" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" name="">Eliminar Curso</button>
                    </form>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="AgregarActividad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Actividad</h5>

                </div>
                <div class="modal-body">
                    <form action="{{ route('actividades.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre">

                        </div>


                        <div class="form-floating">
                            <label for="floatingTextarea">Descripcion:</label>
                            <textarea class="form-control" placeholder="breve descripcion sobre la actividad"
                                id="floatingTextarea" name="descripcion" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Valor de Actividad:</label>
                            <input type="number" class="form-control" name="valor">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">IDCurso</label>
                            <input class="form-control" name="curso_id" value="{{ $curso->id }}">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        {{-- <button type="submit" class="btn btn-danger">Cancelar</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="AsignarAlumno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Actividad</h5>

                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="name">

                        </div>


                        <div class="form-floating">
                            <label for="floatingTextarea">Descripcion:</label>
                            <textarea class="form-control" placeholder="breve descripcion sobre la actividad"
                                id="floatingTextarea" name="description" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Valor de Actividad:</label>
                            <input type="number" class="form-control" name="value">

                        </div>

                        <div class="mb-3">
                            <label class="form-label">IDCurso</label>
                            <input class="form-control" name="course_id" value="{{ $curso->id }}">

                        </div>

                        <br>
                        <button type="submit" class="btn btn-success">Guardar</button>
                        {{-- <button type="submit" class="btn btn-danger">Cancelar</button> --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <style>
        a:hover {
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

    </style>


@endsection
