<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Inventory;
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d

class AnunciosController extends Controller
{
    public function store()
<<<<<<< HEAD
    {   
        $estoques = Inventory::all();
        return view('anuncios.anuncios', ['estoques' => $estoques]);
    }

    public function publicarML(Request $request)
    {
        dd($request);
    }
    
=======
    {
        return view('anuncios.anuncios');
    }
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
}
