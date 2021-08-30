@extends('layouts.plantilla')
@section('title', 'Curso')
@section('content')

<br><br>
    <h3 class="lines-effect" align="center">CURSOS</h3>
    <br><br>

    <a href="{{route('cursos.create')}}"><button type="button" class="btncreate btn btn-outline-primary">Agregar
            Curso</button></a>
    <br><br>

    {{-- CURSOS  --}}
    <div class="container">
        <div class="row">
            @foreach ($cursos as $curso)
                <div class="col-md-6">

                    <div class="card mb-4" style="max-width: 550px;">
                        <div class="row g-0">
                            <div class="col-md-4 ">
                                <img src="https://interaprendizaje.ipdrs.org/images/Articulos/notaarticulolati.jpg"
                                    class=" img-center" height="160px" width="200">
                            </div>
                            <div class="contenido col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $curso->nombre }}</h5>
                                    <small><p class="card-text">{{ $curso->descripcion }}</p></small>
                                    <br>
                                    <a href="{{ route('cursos.show', $curso) }}"> <button type="button"
                                            class="btn btn-secondary">VIEW</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-end">
            {{ $cursos->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
    <style>
        body {
            text-align: center;
        }

        .contenido {
            margin-top: -18px;
        }

        h3 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            display: inline-block;
            position: relative;
            color: blue;
        }

        h3::after,
        h3::before {
            content: '';
            position: absolute;
            width: 120px;
            height: 2px;
            background-color: currentColor;
            top: 0.6em;
        }

        h3::before {
            left: -130px;
        }

        h3::after {
            right: -130px;
        }

        .btncreate {
            margin-left: -62rem;
        }

    </style>

@endsection
