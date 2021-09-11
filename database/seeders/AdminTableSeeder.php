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
            'name' => 'Manager_System',
            'email' => 'administrador@email.com',
            'password' => bcrypt('admin@teste'),
            'cpf' => '309.081.058-19',
            'phone' => '(11) 9 6112-5777',
            'cep' => '06192140',
            'address' => 'Rua do Nosso programa',
            'number' => '1000',
            'city' => 'Software',
            'uf' => 'SF',
            'ative' => 'true',
            'paper' => '1',
            'profile_photo_path' => 'admin.jpg',
            'created_at' => '09/09/2021 20:50:00',
            'updated_at' => '09/09/2021 20:50:00',
        ]);

        DB::table('users')->insert([
            'company' => '1',
            'name' => 'Kleber Patti',
            'email' => 'sistem.atc@gmail.com',
            'password' => bcrypt('123456789'),
            'cpf' => '309.081.058-19',
            'phone' => '(11) 9 6112-5777',
            'cep' => '06192140',
            'address' => 'Rua Claudio Aparecido de Oliveira',
            'number' => '37',
            'city' => 'Osasco',
            'uf' => 'SP',
            'ative' => 'true',
            'paper' => '1',
            'profile_photo_path' => 'admin.jpg',
            'created_at' => '09/09/2021 20:50:00',
            'updated_at' => '09/09/2021 20:50:00',
        ]);

        DB::table('users')->insert([
            'company' => '1',
            'name' => 'Phetulia Sousa',
            'email' => 'phetulia@domain.com',
            'password' => bcrypt('123456789'),
            'cpf' => '111.111.111-11',
            'phone' => '(11) 1 1111-1111',
            'cep' => '11111-111',
            'address' => 'Rua das Ruas',
            'number' => '555',
            'city' => 'Osasco',
            'uf' => 'SP',
            'ative' => 'true',
            'paper' => '1',
            'profile_photo_path' => 'admin.jpg',
            'created_at' => '09/09/2021 20:50:00',
            'updated_at' => '09/09/2021 20:50:00',
        ]);

        DB::table('users')->insert([
            'company' => '1',
            'name' => 'Primeiro Seller',
            'email' => 'seller@domain.com',
            'password' => bcrypt('123456789'),
            'cpf' => '95.591.723/0001-19',
            'phone' => '(11) 1 1111-1111',
            'cep' => '11111-111',
            'address' => 'Rua Sellers',
            'number' => '456',
            'city' => 'São Paulo',
            'uf' => 'SP',
            'ative' => 'true',
            'paper' => '2',
            'profile_photo_path' => 'admin.jpg',
            'created_at' => '09/09/2021 20:50:00',
            'updated_at' => '09/09/2021 20:50:00',
        ]);
    }
}
