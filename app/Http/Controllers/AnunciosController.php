<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnunciosController extends Controller
{
    public function store()
    {
        return view('anuncios.anuncios');
    }
}
