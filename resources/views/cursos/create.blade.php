@extends('layouts.plantilla')
@section('title', 'Crear Curso')
@section('content')

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">

        </div>


        <div class="form-floating">
            <label for="floatingTextarea">Descripcion</label>
            <textarea class="form-control" placeholder="breve descripcion sobre el curso" id="floatingTextarea"
                name="descripcion" rows="5"></textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
        {{-- <button type="submit" class="btn btn-danger">Cancelar</button> --}}
    </form>

@endsection

<style>
    form {
        margin-left: 3rem;
        margin-top: 4rem;
        margin-right: 30rem;
    }

</style>
