<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Company;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;

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
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function index()
    {   

        $userlogged = User::where('id', Auth::user()->id)->first();
        $companydata = $userlogged->company()->first();
        if ($userlogged->paper == 2)
        {
            $tokenSeller = ''; //Rastrear o Token do Seller na tabel Token
            if ($tokenSeller){ //Validar se Existe um Token
                $tokenSellerExpiration = ''; //Puxar a Data de Expiração do Token
                if ($tokenSellerExpiration > now()){ //Comparar para ver se é valido ou não
                    Session::put([
                        'AuthML' => Company::find($companyid)->token,
                        'appId' => Company::find($companyid)->appid,
                        'secretKey' => Company::find($companyid)->secretkey,
                    ]);
                } else {
                    Session::put([
                        'AuthML' => 'Renew',
                    ]);
                }
            } else {
                Session::put([
                    'AuthML' => 'New', 
                ]);
            };
        } else{
            $companyid = $companydata->id;
            $tokencompany = Company::find($companyid)->token;
            
            if (count($tokencompany) != 0)
            {   
                $timeExpiration = strtotime($tokencompany->last()->created_at) + $tokencompany->last()->expires_in;
                if ($timeExpiration > time())
                {   
                    Session::put([
                        'AuthML' => $tokencompany->last()->access_token,
                        'appId' => $companydata->appid,
                        'secretKey' => $companydata->secretkey,
                    ]);
                }else {
                    Session::put([
                        'AuthML' => 'Renew',
                    ]);
                } 
            } else{
                Session::put([
                    'AuthML' => 'New', 
                ]);
            };
        };
        
        $userroles = $userlogged->paper()->first();
        Session::put([
            'register' => $userroles->register,
            'anuncios' => $userroles->anuncios,
            'mensagensML' => $userroles->mensagensML,
            'mensagensSellers' => $userroles->mensagensSellers,
            'estoque' => $userroles->estoque,
            'pedidos' => $userroles->pedidos,
            'relatov' => $userroles->relatov,
            'cadastroA' => $userroles->cadastroA,
            'cadastroP' => $userroles->cadastroP,
            'cadastroS' => $userroles->cadastroS,
            'roles' => $userroles->roles,
            'company' => $companydata->id,
        ]);   
        
        return view('home');
    }

    public function menus()
    {
        $usercompany = User::where('id', Auth::user()->id)->first();
        $companydata = $usercompany->company()->first();
        $appId = $companydata->appid;
        $secretKey = $companydata->secretkey;
        return view('menus',['appId' => $appId , 'secretKey' => $secretKey]);
    }
}
