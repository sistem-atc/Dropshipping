<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{   
    public function store(Request $request){

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

    public function roles()
    {   
        $roles = Role::all();
        return view('cadastros.roles',['roles' => $roles]);
    }

    public function rolesbyuser()
    {
        $user = Auth::user()->paper;
        $role = Role::where('paper', '=' , $user->paper)->get();
    }    

}    