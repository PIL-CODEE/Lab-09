<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Event extends Controller
{
    public function eventos()
    {
        $eventos = Events::all();
        return view('eventos', ['eventos' => $eventos]);
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function handleContact(Request $request)
    {
        $evento = new Events;
        $evento->Titulo = $request->input('titulo');
        $evento->Descripcion = $request->input('descripcion');
        $evento->Fecha = $request->input('fecha');
        $evento->save();

        return redirect('/eventos');
    }
}