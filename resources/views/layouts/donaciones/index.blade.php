@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4 text-blue-800">Listado de Donaciones</h1>

    <a href="{{ route('donaciones.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Registrar Donación
    </a>

    <table class="min-w-full mt-6 border text-sm bg-white shadow-md">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Monto</th>
                <th class="py-2 px-4 border">Fecha</th>
                <th class="py-2 px-4 border">Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- Este bloque se reemplazará cuando conectes con la base de datos --}}
            <tr>
                <td class="py-2 px-4 border">1</td>
                <td class="py-2 px-4 border">S/ 50.00</td>
                <td class="py-2 px-4 border">2025-06-13</td>
                <td class="py-2 px-4 border">
                    <a href="#" class="text-blue-600 hover:underline">Ver</a> |
                    <a href="#" class="text-green-600 hover:underline">Editar</a> |
                    <a href="#" class="text-red-600 hover:underline">Eliminar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
