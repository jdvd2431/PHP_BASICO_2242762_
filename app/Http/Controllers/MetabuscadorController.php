<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    public function formulario_buscador(){
        // mostrar formulario
        return view('metabuscador');
    }
    public function buscar(){
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";
    }
}
