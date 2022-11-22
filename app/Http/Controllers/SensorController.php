<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dadosdispositivos;
use App\Models\dadossensores;

class SensorController extends Controller
{
    //Tela do usuario é puxada daqui, pois os dados de "registrosDispositivo" não puxam de outra forma. Não sei o motivo - Matheus
    public function MostrarSensor(Request $request)
    {
        $dadosSensor = dadossensores::query();
        $dadosSensor = $dadosSensor->get();
        $dadosDispositivo = dadosdispositivos::query();
        $dadosDispositivo = $dadosDispositivo->get();
        return view('areaUser', ['registrosSensor' => $dadosSensor], ['registrosDispositivo' => $dadosDispositivo]);
    } //fim da funcao

}//fim da classe
