@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Proyecto</h2>
    <form>
        @csrf
        <input type="text" name="titulo" placeholder="Título del Proyecto" class="form-control my-2">
        <textarea name="descripcion" placeholder="Descripción" class="form-control my-2"></textarea>
        <input type="number" name="meta" placeholder="Meta de Recaudación" class="form-control my-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
