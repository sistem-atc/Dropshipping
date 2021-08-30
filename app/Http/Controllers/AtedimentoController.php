<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtedimentoController extends Controller
{
    public function atendimentosSellers()
    {
        return view('atendimentos.mensagensSellers');
    }
    public function atendimentosML()
    {
        return view('atendimentos.mensagensML');
    } 
}
