<?php

namespace App\Http\Controllers\Mantenedores;

use App\Models\Level;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class MantenedorDeNiveles extends Controller
{

    /**
     * @return string
     */
    public function listarTodos()
    {
        $niveles = Level::all();

        $numNiveles  = count ( $niveles );
       // dd($niveles);

        return view('mantenedores/listarNivel', [
            'niveles'       => $niveles,
            'numNiveles'    => $numNiveles,
        ]);
    }

}
