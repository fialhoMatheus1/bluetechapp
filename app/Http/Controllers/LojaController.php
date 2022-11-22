<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function MostrarLoja()
    {
        return view('loja');
    } //fim da funcao
}//fim da classe
