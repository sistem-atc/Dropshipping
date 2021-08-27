<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function menus(){
        return view('menus');
    }
    public function cadastroA()
    {   
        $empresas = Company::all();
        return view('cadastros.cadastroA',['empresas' => $empresas]);
    }
    public function cadastroC()
    {
        return view('cadastros.cadastroC');
    }
    public function cadastroP()
    {
        return view('cadastros.cadastroP');
    }
    public function cadastroS()
    {
        return view('cadastros.cadastroS');
    }
    public function relatov()
    {
        return view('relatorios.relatov');
    }
    public function atendimentosSellers()
    {
        return view('atendimentos.mensagensSellers');
    }
    public function atendimentosML()
    {
        return view('atendimentos.mensagensML');
    }    
    public function pedidos()
    {
        return view('pedidos.pedidos');
    }
    public function anuncios()
    {
        return view('anuncios.anuncios');
    }
    public function estoque()
    {
        return view('estoque.estoque');
    } 
    public function register()
    {
        return view('auth.register');
    } 
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

        return view('cadastros.cadastroA');
    } 

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

}
