<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\User;

class AtedimentoController extends Controller
{
    public function atendimentosSellers()
    {   
        $users = $users = User::where('id','not like',Auth::user()->id)->get();
        return view('atendimentos.mensagensSellers', ['users' => $users]);
    }

    public function mensagensSellers(Request $request)
    {
        
        return redirect()->route('atendimentosSellers');

    }

}
