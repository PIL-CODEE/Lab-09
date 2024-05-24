<?php

use App\Http\Controllers\Event;

Route::get('/eventos', [Event::class, 'eventos'])->name('eventos.eventos');
Route::get('/eventos/formulario', [Event::class, 'formulario'])->name('eventos.formulario');

Route::post('/formulario', [Event::class, 'handleContact'])->name('formulario.submit');
