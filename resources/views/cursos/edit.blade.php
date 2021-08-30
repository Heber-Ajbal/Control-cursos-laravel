@extends('layouts.plantilla')
@section('title', 'Editar ' . $curso->nombre)
@section('content')

    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $curso->nombre) }}">

        </div>


        <div class="form-floating">
            <label>Descripcion</label>
            <textarea class="form-control" placeholder="breve descripcion sobre el curso" name="descripcion"
                rows="5">{{ old('descripcion', $curso->descripcion) }}</textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
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
