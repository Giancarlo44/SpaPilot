@extends('layout')

@section('content')
<h2>Reservar un servicio</h2>

@if(session('success'))
    <div class="success">{{ session('success') }}</div>
@endif

<form method="POST" action="/reservar">
    @csrf
    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="servicio">Servicio:</label>
    <select id="servicio" name="servicio" required>
        <option value="">Seleccione un servicio</option>
        <option value="masajes">Masajes relajantes</option>
        <option value="faciales">Tratamientos faciales</option>
        <option value="manicura">Manicura y pedicura</option>
        <option value="sauna">Sauna y jacuzzi</option>
        <option value="aromaterapia">Aromaterapia</option>
    </select>

    <label for="fecha">Fecha preferida:</label>
    <input type="date" id="fecha" name="fecha" required>

    <button type="submit">Enviar reserva</button>
</form>
@endsection
