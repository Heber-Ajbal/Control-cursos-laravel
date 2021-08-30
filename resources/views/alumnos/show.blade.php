@extends('layouts.plantilla')
@section('title', 'Alumno ' . $alumno->name)
@section('content')


    <div class="container">
        <div class="row">
            <div class="col col-12">
                <br><br>
                <img class="perfil"
                    src="https://i.pinimg.com/originals/60/99/f3/6099f305983371dadaceae99f5c905bf.png" alt="">
                <br> <br>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div class="input-group flex-nowrap datos">
                    <span class="input-group-text" id="addon-wrapping">Nombre</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping"
                        value="{{ $alumno->name }}" disabled>
                </div>


            </div>

            <div class="col-sm-4">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Correo</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping"
                        value="{{ $alumno->email }}" disabled>
                </div>
            </div>
            <br><br><br>
        </div>

        <div align="center">
            <div>
                <button type="button" class="btn btn-outline-primary">Subir Imagen</button>
                <button type="button" class="btn btn-outline-danger">Eliminar Imagen</button>
            </div>
        </div>
    </div>

    <div class="container">
        <br><br>
        <table class="table table-dark">

            <thead>
                <tr>

                    <th scope="col">Curso</th>
                    <th scope="col">Nota</th>
                    <th scope="col"><i class="fas fa-download"></i> <button type="button"
                            class="btn btn-outline-dark">Descargar Notas</button></th>
                </tr>
            </thead>

            <tbody>
                @if ($notas->count())
                @foreach ($notas as $nota)
                    <tr>
                        <th scope="row">{{ $nota->curso }}</th>
                        <td>{{ $nota->nota }}</td>
                    </tr>
                @endforeach
                @else
                <div class="card-body">
                    <tr>
                        <th scope="row">Sin cursos Asignados</th>

                    </tr>
                </div>
            @endif
            </tbody>
        </table>
        <br><br>
    </div>



    <style>
        body {

            text-align: center;
        }

        .perfil {
            width: 10rem;
            border-radius: 5rem;
        }

        .datos {
            float: left;
            float: right;
        }

        .btn-outline-dark {
            color: #fff;
        }

    </style>

@endsection
