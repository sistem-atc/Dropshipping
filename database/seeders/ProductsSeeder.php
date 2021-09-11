<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Item 1 de Teste – Por favor, NÃO OFERTAR!',
            'profit_margin' => '25%',
            'length' => '1',
            'width' => '1',
            'height' => '1',
            'weight' => '1',
            'category' => 'Outros',
            'address_inventory' => 'A1',
            'description' => 'Item 1 de testes',
            'model' => 'Aneis',
            'material' => 'Prata',
            'user_create_id' => '1',
        ]);
        
        DB::table('products')->insert([
            'name' => 'Item 2 de Teste – Por favor, NÃO OFERTAR!',
            'profit_margin' => '25%',
            'length' => '1',
            'width' => '1',
            'height' => '1',
            'weight' => '1',
            'category' => 'Outros',
            'address_inventory' => 'A2',
            'description' => 'Item 2 de testes',
            'model' => 'Aneis',
            'material' => 'Prata',
            'user_create_id' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Item 3 de Teste – Por favor, NÃO OFERTAR!',
            'profit_margin' => '20%',
            'length' => '1',
            'width' => '1',
            'height' => '1',
            'weight' => '1',
            'category' => 'Outros',
            'address_inventory' => 'A3',
            'description' => 'Item 3 de testes',
            'model' => 'Aneis',
            'material' => 'Prata',
            'user_create_id' => '1',
        ]);

    }
}
