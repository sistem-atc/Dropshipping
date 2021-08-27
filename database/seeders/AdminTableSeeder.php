<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'company' => '1',
            'name' => 'Administrador',
            'email' => 'administrador@email.com',
            'password' => bcrypt('admin@teste'),
            'cpf' => '29562697045',
            'phone' => '11956482365',
            'cep' => '90001',
            'address' => 'Rua do Nosso programa',
            'number' => '666',
            'city' => 'Software',
            'uf' => 'SF',
            'ative' => 'true',
            'paper' => '1',
        ]);
    }
}
