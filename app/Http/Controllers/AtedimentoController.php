<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d

class AtedimentoController extends Controller
{
    public function atendimentosSellers()
<<<<<<< HEAD
    {   
        $users = $users = User::where('id','not like',Auth::user()->id)->get();
        return view('atendimentos.mensagensSellers', ['users' => $users]);
    }
    public function atendimentosML()
    {
        $usercompany = User::where('id', Auth::user()->id)->first();
        $companydata = $usercompany->company()->first();
        $appId = $companydata->appid;
        $secretKey = $companydata->secretkey;
=======
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
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
        
        return view('atendimentos.mensagensML',['appId' => $appId, 'secretKey' => $secretKey]);
    } 
}
