@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Panel de Usuario</h1>
    <p>Bienvenido a tu plataforma de apoyo. Desde aquí podrás gestionar tus proyectos, donaciones y actualizaciones.</p>

    <div class="mt-6">
        <ul class="list-disc list-inside">
            <li><a href="{{ route('proyectos.index') }}" class="text-blue-600 underline">Ver proyectos</a></li>
            <li><a href="{{ route('donaciones.index') }}" class="text-blue-600 underline">Ver donaciones</a></li>
            <li><a href="{{ route('actualizaciones.index') }}" class="text-blue-600 underline">Ver actualizaciones</a></li>
        </ul>
    </div>
</div>
@endsection
