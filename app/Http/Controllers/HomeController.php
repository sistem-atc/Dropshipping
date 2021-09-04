<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        $roles = Role::all();
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
        return view('home',  ['roles' => $roles ,'appId' => $appId , 'secretKey' => $secretKey]);
    }

    public function menus()
    {
        $usercompany = Auth::user()->company;
        $empresas = Company::all();
        foreach($empresas as $empresa){
            if ($usercompany = $empresa->id){
                $appId = $empresa->appid;
                $secretKey = $empresa->secretkey;
            }
        }
        return view('menus',['appId' => $appId , 'secretKey' => $secretKey]);
    }
}
