<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Company;
use App\Models\Key;
use App\Models\Product;
use App\Models\Imagem;
use Illuminate\Support\Facades\Auth;

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

    public function storeP(Request $request){
        $input=$request->all();
        $images=array();
        
        if($files=$request->file('images')){
            foreach($files as $file){
                $name = uniqid(date('HisYmd'));
                $extension = $file->extension();
                $nameFile = "{$name}.{$extension}";
                $images[]=$nameFile;
                $upload = $file->storeAs('img_products', $nameFile);
                    if ( !$upload )
                        return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();
            }
        }                
        Product::create([
            
            'name' => $request->name,
            'profit_margin' => $request->profit_margin,
            'length' => $request->length,
            'width' => $request->width,
            'height' => $request->height,
            'weight' => $request->weight,
            'category' => $request->category,
            'address_inventory' => $request->adress_inventory,
            'description' => $request->description,
            'model' => $request->model,
            'material' => $request->material,
            'user_create_id' => auth()->user()->id,
        ]);

        $PesquisaProducts = Product::all();
        foreach ($PesquisaProducts as $PesquisaProduct){
            if ($PesquisaProduct->name = $request->name){
                $ProdutID = $PesquisaProduct->id;
            };
        };

        foreach ($images as $image){
            Imagem::create([
                'idproduct' => $ProdutID,
                'images' => $image,
            ]);
        };

        return redirect('/cadastroProdutos');
    } 

    public function cadastroS()    {
        return view('cadastros.cadastroS');
    }
    
    public function storeS(Request $request){
        User::create([
            'company' => auth()->user()->company,
            'name' =>  $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'cpf' => $request->cpf_cnpj,
            'cep' => $request->cep,
            'address' => $request->address,
            'number' => $request->number,
            'city' => $request->city,
            'uf' => $request->uf,
            'ative' => $request->ative,
            'user_create_id' => auth()->user()->id,
            'paper' => 2,
        ]);

        $LocalizarUsers = User::all();
        foreach ($LocalizarUsers as $LocalizarUser){
            if ($LocalizarUser->email = $request->email){
                $UserID = $LocalizarUser->id;
            };
        };
        
        Key::create([
            'id_user' => $UserID,
            'name_dp' => $request->name_dp,
            'appid' => $request->appid,
            'secretkey' => $request->secretkey,
        ]);

        return redirect('/cadastroSellers');
    }

    public function storeR(Request $request){

        Role::create([

        'name' => $request->name,
        'register' => $request->register,
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
