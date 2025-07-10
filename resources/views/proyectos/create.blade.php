@extends('layouts.app')

@section('title', 'Crear Proyecto')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Crear Proyecto</h1>
    <form method="POST" action="#">
        @csrf
        <div>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" placeholder="Escribe el título" class="border p-2 w-full">
        </div>
        <div class="mt-4">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" placeholder="Escribe una descripción" class="border p-2 w-full"></textarea>
        </div>
        <button type="submit" class="btn-primary mt-4">Guardar</button>
    </form>
@endsection
