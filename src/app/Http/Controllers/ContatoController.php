<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(){
        $params = array(
            "title" => "Contatos",
        );
        return view('site.contato', $params);
    }
}
