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
        //Capturar varibles=name
        $termino=$_POST['termino'];
        $motores=$_POST['motores'];
        //Identificar motor de busqueda
        switch ($motores) {
            case 1:
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;

            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3:
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 4:
                return redirect()->to("https://www.ask.com/web?q=$termino");
                break;
            case 5:
                return redirect()->to("https://www.udemy.com/courses/search/?src=ukw&q=$termino");
                break;
            case 6:
                return redirect()->to("https://www.ecosia.org/search?q=julian$termino");
                break;
            case 7:
                return redirect()->to("https://search.seznam.cz/?q=$termino");
                break;
            case 8:
                return redirect()->to("https://www.qwant.com/?q=$termino");
                break;
            case 9:
                return redirect()->to("https://www.amazon.com/s?k=$termino");
                break;
            case 10:
                return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
        }
        //print_r($_POST);

    }
}
