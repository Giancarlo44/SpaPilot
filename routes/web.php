<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/reservar', function () {
    return view('reservar');
});

Route::post('/reservar', function (\Illuminate\Http\Request $request) {
    // Aquí no guardamos nada, solo simulamos
    return redirect('/reservar')->with('success', 'Reserva enviada correctamente (simulado).');
});

Route::get('/contacto', function () {
    return view('contacto');
});

