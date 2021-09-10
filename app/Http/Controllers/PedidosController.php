<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function pedidos()
    {
        return view('pedidos.pedidos');
    }
}
