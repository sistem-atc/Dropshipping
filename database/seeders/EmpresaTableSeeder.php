<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Empresa Teste',
            'cnpj' => '00000000000000',
            'phone' => '11956482365',
            'cep' => '90001',
            'address' => 'Rua do Nosso programa',
            'number' => '666',
            'city' => 'Software',
            'uf' => 'SF',
            'appid' => 'appidficticio65999854',
            'secretkey' => 'chavesecretaparaauteticacao',
        ]);
    }
}
