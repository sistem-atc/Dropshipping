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
	
<<<<<<< HEAD
        return redirect()->route('home');
=======
        return redirect('/');
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
    }
    
    public function register()
    {
        return view('auth.register');
    }

}
