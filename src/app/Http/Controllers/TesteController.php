<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste($p1, $p2){
        $total = $p1 + $p2;
        echo "Total da soma é: ".$total;
        #return view('site.teste', ['p1' => $p1, 'p2' => $p2, 'total' => $total]);
        #return view('site.teste', compact('p1', 'p2', 'total'));
        return view('site.teste')->with('p1', $p1)
                                 ->with('p2', $p2)
                                 ->with('total', $total);
    }
}
