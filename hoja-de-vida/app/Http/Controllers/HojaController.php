<?php

// app/Http/Controllers/HojaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HojaController extends Controller
{
    // Método para la página principal
    public function index()
    {
        return view('hoja.index');  // Asegúrate de que esta vista existe en 'resources/views/hoja/index.blade.php'
    }

    // Método para el formulario de crear la hoja de vida
    public function create()
    {
        return view('hoja.create');  // Asegúrate de que la vista 'hoja.create' también esté definida
    }

    // Método para guardar los datos del formulario
    public function store(Request $request)
    {
        return "Datos recibidos: Nombre: " . $request->nombre . ", Email: " . $request->email;
    }
}

