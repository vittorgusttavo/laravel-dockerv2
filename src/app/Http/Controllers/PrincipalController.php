<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        $params = array(
            'title' => 'Home',
        );

        return view('site.principal', $params);
    }
}
