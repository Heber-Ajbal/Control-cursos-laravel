@extends('layouts.plantilla')
@section('title', 'Actividad ')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <br><br>
                <h2>Actividad: "{{ $actividade->nombre }}" </h2>
                <div class="float-right">
                    <a><button type="button" data-bs-toggle="modal" data-bs-target="#editarActividade"
                            class="btn btn-outline-primary">Editar</button></a>
                    <a href="javascript:window.history.go(-1);"><button type="button"
                            class="btn btn-outline-primary">Regresar</button></a>
                </div>
                <div class="coltext col-sm-5">
                    <h5>{{ $actividade->descripcion }}</h5>
                </div>


                <br>
                <h3>Estado de la Actividad</h3>

                <table class="table">

                    <tbody>
                        <tr>
                            <th scope="row">Estado</th>
                            <td>Esperando Entregas</td>
                        </tr>
                        <tr>
                            <th scope="row">Valor</th>
                            <td>{{ $actividade->valor }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Ultima Actualizacion</th>
                            <td>{{ $actividade->updated_at }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Archivos Enviados</th>
                            <td><strong>sin archivos por calificar</strong></td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>



    <style>
        .coltext {
            margin-left: -15px;
        }

    </style>


    <!-- Modal -->
    <div class="modal fade" id="editarActividade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {!! Form::model($actividade, ['route' => ['actividades.update', $actividade], 'method' => 'put']) !!}

                <div class="class-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nuevo nombre de la actividade']) !!}

                    @error('nombre')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <br> <br>

                    {!! Form::label('descripcion', 'Descripcion') !!}
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Cambiar descripcion de la actividade']) !!}

                    @error('descripcion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <br>

                <div class="container">
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="col">
                            {!! Form::submit('Editar la actividade', ['class' => 'btn btn-outline-success']) !!}
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}


            </div>
        </div>
    </div>



@endsection
