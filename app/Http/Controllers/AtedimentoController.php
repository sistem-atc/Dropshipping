<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;

class AtedimentoController extends Controller
{
    public function atendimentosSellers()
    {
        return view('atendimentos.mensagensSellers');
    }
    public function atendimentosML()
    {
        $usercompany = Auth::user()->company;
        $empresas = Company::all();
        foreach($empresas as $empresa)
        {
            if ($usercompany = $empresa->id)
            {
                $appId = $empresa->appid;
                $secretKey = $empresa->secretkey;
            }
        } 
        
        return view('atendimentos.mensagensML',['appId' => $appId, 'secretKey' => $secretKey]);
    } 
}
