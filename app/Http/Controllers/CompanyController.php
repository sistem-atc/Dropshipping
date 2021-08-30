<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function companies(Request $request){
        
        Company::create([
            
            'name' => $request->name,
            'cnpj' => $request->cnpj,
            'phone' => $request->phone,
            'cep' => $request->cep,
            'address' => $request->address,
            'number' => $request->number,
            'city' => $request->city,
            'uf' => $request->uf,
            'appid' => $request->appid,
            'secretkey' => $request->secretkey,
        ]);
	
        return redirect('/');
    }
    
    public function register()
    {
        return view('auth.register');
    }

}
