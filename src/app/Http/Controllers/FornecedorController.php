<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = array(
            0 => array(
                "nome"   => "Fernandinho",
                "status" => "A",
                "cnpj"   => "00.000.000/000000",
                "ddd"    => "11",
                "tel"    => "0000-0000",
            ),
            1 => array(
                "nome"   => "Angelinha",
                "status" => "I",
                "cnpj"   => null,
                "ddd"    => "11",
                "tel"    => "0000-0000",
            ),
            2 => array(
                "nome"   => "João",
                "status" => null,
                "cnpj"   => "00.000.000/000000",
                "ddd"    => "11",
                "tel"    => "0000-0000",
            )
        );
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
