<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class CadastroAController extends Controller
{
    public function store(Request $request){
        
        User::create([
            
            'company' => $request->company,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cpf' => $request->cpf,
            'phone' => $request->phone,
            'cep' => $request->cep,
            'address' => $request->address,
            'number' => $request->number,
            'city' => $request->city,
            'uf' => $request->uf,
            'ative' => $request->ative,
            'paper' => $request->paper,
        ]);

        return redirect('/cadastroAdministradores');
    } 
    
    public function cadastroA()
    {   
        $empresas = Company::all();
        $roles = Role::all();
        return view('cadastros.cadastroA',['empresas' => $empresas, 'roles' => $roles]);
    }
}
