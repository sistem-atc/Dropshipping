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
            'name' => 'Empresa Sistema Master',
            'cnpj' => '00000000000000',
            'phone' => '11956482365',
            'cep' => '90001',
            'address' => 'Rua do Nosso programa',
            'number' => '666',
            'city' => 'Software',
            'uf' => 'SF',
            'appid' => '1635893815413634',
            'secretkey' => '5bwCZMMgGXs303sLsZbjI2Mb9eQPrlXb',
        ]);
    }
}
