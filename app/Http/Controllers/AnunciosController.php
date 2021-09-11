<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class AnunciosController extends Controller
{
    public function store()
    {   
        $estoques = Inventory::all();
        return view('anuncios.anuncios', ['estoques' => $estoques]);
    }

    public function publicarML(Request $request)
    {
        dd($request);
    }
    
}
