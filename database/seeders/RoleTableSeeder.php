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
            'name' => 'Admin Sistema',
            'menus' => 'True',
            'home' => 'True',
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
