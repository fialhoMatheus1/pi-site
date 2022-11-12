<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dad;
use App\Models\dadossensores;

class SensorController extends Controller
{
    public function Sensor()
    {
        return view('sensor');
    } //fim da funcao

    public function MostrarSensor(Request $request)
    {
        $dadosSensor = dadossensores::query();
        $dadosSensor = $dadosSensor->get();
        return view('sensor', ['registrosSensor' => $dadosSensor]);
    }//fim da funcao

}//fim da classe
