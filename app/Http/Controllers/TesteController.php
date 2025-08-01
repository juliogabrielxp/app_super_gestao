<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $n1, int $n2)  {
        return view('site.teste')->with('n1', $n1)->with('n2', $n2);
    }
}
