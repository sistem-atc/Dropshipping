<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Product;

class InventoryController extends Controller
{
    public function estoque()
    {   
        $produtos = Product::all();
        return view('estoque.estoque', [ 'produtos' => $produtos]);
    }

    public function store(Request $request){

        Inventory::create([
            'nf' => $request->nf,
            'serie' => $request->serie,
            'total_value' => $request->total_value,
            'cfop' => $request->cfop,
            'tax' => $request->tax,
            'namecompany' => $request->namecompany,
            'cpf_cnpj' => $request->cpf_cnpj,
            'ie' => $request->ie,
            'cod_produto' => $request->cod_produto,
            'unitary_value' => $request->unitary_value,
            'qtd' => $request->qtd,
            'user_create_id' => auth()->user()->id,
        ]);
           
        return redirect()->route('estoque');

    }
}
