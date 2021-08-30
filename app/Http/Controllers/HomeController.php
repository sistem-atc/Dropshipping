<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

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
    public function logout()
    {
        return view('home');
    }
    public function index()
    {   
        return view('home');
    }
    public function menus(){
        return view('menus');
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
}
