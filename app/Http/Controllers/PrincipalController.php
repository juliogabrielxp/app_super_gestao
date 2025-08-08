<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        $fornecedores = [0 => ['Wurth' => 'Glauco'],
        1 => ['Tay' => 'Jasmin', 'CPF' => '123']
    ];

        return view('site.principal',compact('fornecedores'));
    }
}
