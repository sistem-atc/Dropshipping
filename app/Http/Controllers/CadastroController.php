<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Company;
use App\Models\Key;
use App\Models\Seller;

class CadastroController extends Controller
{
    public function storeA(Request $request){
        
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
    
    public function cadastroA(){   
        $empresas = Company::all();
        $roles = Role::all();
        return view('cadastros.cadastroA',['empresas' => $empresas, 'roles' => $roles]);
    }
    
    public function cadastroP()    {
        return view('cadastros.cadastroP');
    }

    public function cadastroS()    {
        return view('cadastros.cadastroS');
    }
    
    public function storeS(Request $request){
        Seller::create([
            'name' =>  $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'cpfcnpj' => $request->cpfcnpj,
            'cep' => $request->cep,
            'address' => $request->address,
            'number' => $request->number,
            'city' => $request->city,
            'uf' => $request->uf,
            'ative' => $request->ative,
        ]);

        $PesquisaSellers = Role::all();
        foreach ($PesquisaSellers as $PesquisaSeller){
            if ($PesquisaSeller->email = $request->email){
                $SellerID = $PesquisaSeller->id;
            };
        };

        Key::create([
            'id_seller' => $SellerID,
            'name_dp' => $request->name_dp,
            'appid' => $request->appid,
            'secretkey' => $request->secretkey,
        ]);

        return redirect('/cadastroSellers');
    }

    public function storeR(Request $request){

        Role::create([

        'name' => $request->name,
        'menus' => $request->menus,
        'home' => $request->home,
        'anuncios' => $request->anuncios,
        'mensagensML' => $request->mensagensML,
        'mensagensSellers' => $request->mensagensSellers,
        'estoque' => $request->estoque,
        'pedidos' => $request->pedidos,
        'relatov' => $request->relatov,
        'cadastroA' => $request->cadastroA,
        'cadastroP' => $request->cadastroP,
        'cadastroS' => $request->cadastroS,
        'roles' => $request->roles,
        ]);

        return redirect('/roles');
    } 

    public function roles(){   
        $roles = Role::all();
        return view('cadastros.roles',['roles' => $roles]);
    }    
}
