<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Manager_System',
            'register' => 'True',
            'anuncios' => 'True',
            'mensagensML' => 'True',
            'mensagensSellers' => 'True',
            'estoque' => 'True',
            'anuncios' => 'True',
            'pedidos' => 'True',
            'relatov' => 'True',
            'cadastroA' => 'True',
            'cadastroP' => 'True',
            'cadastroS' => 'True',
            'roles' => 'True',
        ]);
        DB::table('roles')->insert([
            'name' => 'Seller',
            'register' => 'False',
            'anuncios' => 'True',
            'mensagensML' => 'True',
            'mensagensSellers' => 'True',
            'estoque' => 'False',
            'anuncios' => 'True',
            'pedidos' => 'True',
            'relatov' => 'True',
            'cadastroA' => 'False',
            'cadastroP' => 'False',
            'cadastroS' => 'False',
            'roles' => 'False',
        ]);
        DB::table('roles')->insert([
            'name' => 'Administrador',
            'register' => 'False',
            'anuncios' => 'True',
            'mensagensML' => 'True',
            'mensagensSellers' => 'True',
            'estoque' => 'True',
            'anuncios' => 'True',
            'pedidos' => 'True',
            'relatov' => 'True',
            'cadastroA' => 'True',
            'cadastroP' => 'True',
            'cadastroS' => 'True',
            'roles' => 'True',
        ]);
    }
}
