<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Compra;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    public function comprar(Curso $curso)
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            // Crea una nueva compra para el usuario autenticado y el curso
            $compra = new Compra();
            $compra->user_id = Auth::id();
            $compra->curso_id = $curso->id;
            $compra->save();

            return redirect()->route('cursos.index')->with('success', 'Curso comprado exitosamente.');
        }

        // Maneja el caso en el que el usuario no está autenticado según tus requisitos
        return redirect()->route('cursos.index')->with('error', 'Debes iniciar sesión para comprar cursos.');
    }
}