<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use App\Models\dadosdispositivos;

class DipositivoController extends Controller
{
    public function MostrarCadastroDispositivo()
    {
        return view('cadastrarDispositivo');
    } //fim da funcao
    
    public function SalvarBancoDispositivo(Request $request)
    {
        $dadosDispositivos = $request->validate([
            'local' => 'string|required',
            'serial' => 'string|required',
            'FK_Usuario' => 'int|required'
        ]);

        dadosdispositivos::create($dadosDispositivos);
        return Redirect::route('home');
    } //fim da funcao



}//fim da classe
